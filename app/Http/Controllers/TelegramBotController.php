<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Finder\SplFileInfo;
use Telegram\Bot\FileUpload\InputFile;
use Illuminate\Support\Str;
use Telegram\Bot\Laravel\Facades\Telegram;

class TelegramBotController extends Controller
{
    public function updatedActivity()
    {
        $activity = Telegram::getUpdates();
        dd($activity);
    }

    public function storeMessage(Request $request){
        $text = "Новая заявка с Сайта!\n\n"
            . "<b>Связь с клиентом: </b>\n"
            . "$request->phone\n"
            . "<b>Сообщение от клиента: </b>\n"
            . $request->text_message;

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', '-802850420'),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        if (!empty($request->file)){
            $files = $request->file('file');
            foreach ($files as $key => $value){
                (object)$filed = $files[$key];
                Telegram::sendDocument([
                    'chat_id' => env('TELEGRAM_CHANNEL_ID', '-802850420'),
                    'document' => InputFile::createFromContents(file_get_contents($filed->getRealPath()), Str::random(10) . '.' . $filed->getClientOriginalExtension())
                ]);
            }

        }
        return redirect()->back();
    }
}
