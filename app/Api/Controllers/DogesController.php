<?php

namespace App\Api\Controllers;

use App\Api\Transformers\DogesTransformer;
use App\Http\Requests;
use App\Doge;

class DogesController extends BaseController
{
    public function index()
    {
        $doges = Doge::all();

        return $this->collection($doges, new DogesTransformer);
    }

    public function show($id)
    {
        $doge = Doge::find($id);

        return $this->item($doge, new DogesTransformer);
    }
}
