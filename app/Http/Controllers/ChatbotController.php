<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $config = [];

        // Create BotMan instance
        $botman = BotManFactory::create($config, new LaravelCache);

        // Handle user messages
        $botman->hears('.*', function (BotMan $bot) {
            $userMessage = $bot->getMessage()->getText();

            // Get response from Gemini API
            $response = $this->getResponse($userMessage);

            // Send response to user
            $bot->reply($response);
        });

        $botman->listen();
    }

    private function getResponse($userMessage)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->post('http://127.0.0.1:5000/chat', [
            'json' => ['message' => $userMessage]
        ]);

        $responseData = json_decode($response->getBody(), true);

        return $responseData['response'];
    }

    private function getGeminiResponse($message)
    {
        $apiKey = env('GEMINI_API_KEY');
        $apiUrl = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent";

        // Make API request using Laravel HTTP Client
        $response = Http::withHeaders([
            'Content-Type' => 'application/json'
        ])->post("$apiUrl?key=$apiKey", [
                    "contents" => [
                        [
                            "parts" => [
                                ["text" => $message]
                            ]
                        ]
                    ]
                ]);

        $data = $response->json();

        return $data['candidates'][0]['content']['parts'][0]['text'] ?? "Sorry, I couldn't process that.";
    }
}