<?php
namespace App\Services;

use App\Traits\ConsumeServices;
use App\Traits\MarketAuthRequests;
use App\Traits\MarketResponse;

class MarketService{
    use ConsumeServices,MarketAuthRequests,MarketResponse;
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri=config('services.market.base_uri');
    }

    public function getProducts(){
        return $this->makeRequest('GET','products');
    }

    public function getCategories(){
        return $this->makeRequest('GET','categories');
    }

    public function getProduct($id){
        return $this->makeRequest('GET',"products/{$id}");
    }


    public function getCategoryProduct($id){
        return $this->makeRequest('GET', "categories/{$id}/products");
    }





}
