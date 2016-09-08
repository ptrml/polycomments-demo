<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\SearchEngines\BingImageSearch;

class BingImageSearchController extends AbstractImageSearchController
{

    function implementEngine($request)
    {
        return new BingImageSearch("");
    }
}
