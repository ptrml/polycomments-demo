<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\SearchEngines\PixabayImageSearch;

class PixabayImageSearchController extends AbstractImageSearchController
{

    function implementEngine($request)
    {
        return new PixabayImageSearch();
    }
}
