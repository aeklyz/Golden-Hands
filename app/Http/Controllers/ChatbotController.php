<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;

class ChatbotController extends Controller
{
    /**
     * Handle user message.
     */
    public function handle(Request $request)
    {
        $botman = app('botman');

        // Handle the incoming user message
        $botman->hears('{message}', function (BotMan $bot, $message) {
            // Logic to reply to the user message
            $bot->reply("You said: " . $message);
        });

        // The input message from the user
        $userMessage = $request->input('message');

        // Make BotMan process the message and get a response
        $response = $botman->userStorage()->get('user')->replyTo($userMessage);

        // Return the response to the frontend
        return response()->json([
            'message' => $response
        ]);
    }
}
