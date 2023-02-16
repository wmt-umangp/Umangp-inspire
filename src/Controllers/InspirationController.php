<?php
namespace Umangp\Inspire\Controllers;
use Illuminate\Http\Request;
use Umangp\Inspire\Inspire;

class InspirationController{
    public function justDoit(Inspire $inspire) {
        $quote = $inspire->inspirequotes();

        return view('inspire::index', compact('quote'));
    }
}
