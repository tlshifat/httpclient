<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumeServices{

    /**
     * @return  \stdClass
     */
    public function makeRequest($method,$url,$queryParams=[],$formParams=[],$headers=[]){
        $client=new Client([
            'base_uri'=>$this->baseUri,
                               ]);
        if(method_exists($this,'resolveAuthorization')){
            $this->resolveAuthorization($queryParams,$formParams,$headers);
        }

        $response= $client->request($method,$url,[
            'query'=>$queryParams,
            'form_params'=>$formParams,
            'headers'=>$headers,
        ]);
        $response = $response->getBody()->getContents();

        if(method_exists($this,'decodeResponse')){
            $response=$this->decodeResponse($response);
        }
        if(method_exists($this,'checkError')){
            $this->checkError($response);
        }

        return $response;
    }
}
