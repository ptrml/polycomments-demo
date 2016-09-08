<?php

namespace App\Http\Controllers;

use App\InterventionImageFactory;
use App\Packages\ZipStreamDownloadable;
use App\ImageOptions;
use App\Interfaces\SearchableInterface;
use Illuminate\Http\Request;

use App\Http\Requests;

abstract class AbstractImageSearchController extends Controller
{

    function execute(Request $request, ImageOptions $img_opts)
    {

        $search_engine = $this->implementEngine($request);

        //CSV from request
        
        $query_array = [];//from csv

        $downloadable_batch = [];
        
        foreach ($query_array as $query)
        {
            $image = InterventionImageFactory::makeDownloadable($search_engine->search($query['query']),$query['result_filename'],$img_opts);

            $downloadable_batch[] = $image;
        }

        $package = new ZipStreamDownloadable($downloadable_batch,"images");
        $package->download();


        
    }

    abstract function implementEngine($request);
}
