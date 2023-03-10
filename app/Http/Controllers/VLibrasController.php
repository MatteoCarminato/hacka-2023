<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class VLibrasController extends Controller
{
    public function translate(Request $request)
    {
        // $text = $request->input('text');
        // $url = "https://traducao2.vlibras.gov.br/translate?text=Oi";

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://traducao2.vlibras.gov.br/translate?text=Oi',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS =>'{"text": "Olá"}',
          CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
          ),
        ));
        
        $response = curl_exec($curl);
        
        curl_close($curl);
        echo $response;
        

        // $client = new Client();
        // $response = $client->request('POST', $url, [
        //     'headers' => [
        //         'Accept' => 'application/json'
        //     ],
        // ]);

        // $translation = json_decode($response->getBody(), true)['texto_traduzido'];

        return view('vlibras.translate')->with([
            'text' => 'oi',
            'translation' => $response,
        ]);
    }
}