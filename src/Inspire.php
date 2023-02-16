<?php
namespace Umangp\Inspire;
use Illuminate\Support\Facades\Http;
class Inspire{
    public function inspirequotes(){
        $response = Http::get('https://inspiration.goprogram.ai/');
        return $response['quote'] .'-'. $response['author'];
    }
}
