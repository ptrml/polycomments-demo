<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\SearchEngines\GoogleImageSearch;

class GoogleImageSearchController extends AbstractImageSearchController
{

    function implementEngine($request)
    {
        return new GoogleImageSearch("","");
    }
}
