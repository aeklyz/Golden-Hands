<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Cache\LaravelCache;
use Illuminate\Http\Request;

class ChatbotController extends Controller
{
    public function handle(Request $request)
    {
        $config = [];

        // Create BotMan instance
        $botman = BotManFactory::create($config, new LaravelCache);

        // Define BotMan hears responses
        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('Hello! How can I assist you today?');
        });

        $botman->listen();
    }
}