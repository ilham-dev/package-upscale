<?php

namespace ilhamdev\upscale\controllers;

use Illuminate\Routing\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->client = new  \GuzzleHttp\Client();

        $this->url = 'https://jsonplaceholder.typicode.com/';
    }

    public function getuser(){
        $response = $this->client->request('GET', $this->url.'users');
        $getResponse = $response->getBody()->getContents();
        $getResponse = json_decode($getResponse);
        
        return response()->json(['status'=> 200, 'message' => "Success", 'data' => $getResponse]);;
    }

    public function getuserdetail($id){
        $response = $this->client->request('GET', $this->url.'users/'.$id);
        $getResponse = $response->getBody()->getContents();
        $getResponse = json_decode($getResponse);
        
        return response()->json(['status'=> 200, 'message' => "Success", 'data' => $getResponse]);;
    }
}
