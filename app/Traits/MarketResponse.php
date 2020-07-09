<?php
namespace  App\Traits;

trait MarketResponse {
    public function decodeResponse($response){
        $jsonDecode= json_decode($response);
        return $jsonDecode->data??$jsonDecode;
    }
    public function checkError($response){
        if(isset($response->error)){
            throw new \Exception("Something wrong $response->error");
        }
    }
}
