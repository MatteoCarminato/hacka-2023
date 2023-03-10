<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\HandTalkService;

class HandTalkController extends Controller
{
    public function translate(Request $request)
    {
        $text = $request->input('text');
        $apiKey = config('services.handtalk.api_key');

        $handTalkService = new HandTalkService($apiKey);
        $translation = $handTalkService->translateToLibras($text);

        return view('handtalk.translate', [
            'text' => $text,
            'translation' => $translation
        ]);
    }
}