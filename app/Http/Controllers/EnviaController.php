<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnviaRequest;
use App\Http\Requests\UpdateEnviaRequest;
use App\Models\Envia;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use App\Events\NuevaGuia;

class EnviaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $client = new Client();

        try {
            $response = $client->get('https://queries-test.envia.com/guide/03/2024', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('ENVIA_API_KEY'),
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    public function conexion()
    {
        $client = new Client();

        try {
            $response = $client->get('https://queries-test.envia.com/guide/03/2024', [
                'headers' => [
                    'Authorization' => 'Bearer ' . config('envia.api_key'),
                    'Accept' => 'application/json',
                ],
            ]);

            $data = json_decode($response->getBody()->getContents(), true);
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guia.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEnviaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $client = new Client();
        $headers = [
          'Content-Type' => 'application/json',
          'Authorization' => 'Bearer '. env('ENVIA_API_KEY')
        ];
        $body = '{
          "origin": {
            "name": "oscar mx",
            "company": "oskys factory",
            "email": "osgosf8@gmail.com",
            "phone": "8116300800",
            "street": "av vasconcelos",
            "number": "1400",
            "district": "mirasierra",
            "city": "Monterrey",
            "state": "NL",
            "country": "MX",
            "postalCode": "66236",
            "reference": ""
          },
          "destination": {
            "name": "oscar",
            "company": "empresa",
            "email": "osgosf8@gmail.com",
            "phone": "8116300800",
            "street": "av vasconcelos",
            "number": "1400",
            "district": "palo blanco",
            "city": "monterrey",
            "state": "NL",
            "country": "MX",
            "postalCode": "66240",
            "reference": ""
          },
          "packages": [
            {
              "content": "camisetas rojas",
              "amount": 2,
              "type": "box",
              "dimensions": {
                "length": 1,
                "width": 17,
                "height": 2
              },
              "weight": 5,
              "insurance": 400,
              "declaredValue": 400,
              "weightUnit": "KG",
              "lengthUnit": "CM"
            }
          ],
          "shipment": {
            "carrier": "fedex",
            "service": "ground",
            "type": 0
          },
          "settings": {
            "printFormat": "PDF",
            "printSize": "STOCK_4X6",
            "comments": "comentarios de el envío"
          }
        }';
        $request    = new Request('POST', 'https://api-test.envia.com/ship/generate/', $headers, $body);
        $res        = $client->sendAsync($request)->wait();
        $cont       = session()->increment('count');

        broadcast(new NuevaGuia($cont))->toOthers();
        return response()->json($res->getBody());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Envia  $envia
     * @return \Illuminate\Http\Response
     */
    public function show(Envia $envia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Envia  $envia
     * @return \Illuminate\Http\Response
     */
    public function edit(Envia $envia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEnviaRequest  $request
     * @param  \App\Models\Envia  $envia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEnviaRequest $request, Envia $envia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Envia  $envia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Envia $envia)
    {
        //
    }
}
