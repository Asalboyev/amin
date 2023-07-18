<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TelegramController extends Controller
{
    public function sendMessage(Request $request)
    {
        // Telegram botning API kalitasi
        $botToken = '6398817589:AAE2zwkh588CWUhNXAtIqTCM-zwGUNV6umQ';
        // Botga yuboriladigan chat ID
        $chatID = '5008167286';
        // Ism va telefon raqamini olish
        $name = $request->input('name');
        $phone = $request->input('phone');
        // Yuboriladigan xabar
        $message = "Ism: $name\nTelefon Raqam: $phone";

        // Telegramga xabarni yuborish
        $client = new Client();
        $response = $client->post(
            "https://api.telegram.org/bot{$botToken}/sendMessage",
            [
                'form_params' => [
                    'chat_id' => $chatID,
                    'text' => $message,
                ],
            ]
        );

        return redirect()->route('index')->with('success', '✔');
    }
    public function indexMessage(Request $request)
    {
        // Telegram botning API kalitasi
        $botToken = '6398817589:AAE2zwkh588CWUhNXAtIqTCM-zwGUNV6umQ';
        // Botga yuboriladigan chat ID
        $chatID = '5008167286';
        // Ism va telefon raqamini olish
        $name = $request->input('name');
        $phone = $request->input('phone');
        $check = $request->input('check');

        // Yuboriladigan xabar

        $message = "Ism: $name\nTelefon Raqam: $phone\ncheckbox: $check";

        // Telegramga xabarni yuborish
        $client = new Client();
        $response = $client->post(
            "https://api.telegram.org/bot{$botToken}/sendMessage",
            [
                'form_params' => [
                    'chat_id' => $chatID,
                    'text' => $message,
                ],
            ]
        );

        return redirect()->route('index')->with('success', '✔');
    }
}
