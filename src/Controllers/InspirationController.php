<?php
namespace Weboccult\Inspire\Controllers;

use Illuminate\Http\Request;
use Weboccult\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();
        
        echo "In controller";

        return $quote;
    }
}