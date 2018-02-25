<?php

namespace App\Api\Controllers;

use App\Api\Transformers\OwnersTransformer;
use App\Api\Transformers\DogesTransformer;
use App\Http\Requests;
use App\Owner;
use App\Doge;

class OwnersController extends BaseController
{
    public function index()
    {
        $owners = Owner::all();

        return $this->collection($owners, new OwnersTransformer);
    }

    public function show($id)
    {
        $owner = Owner::find($id);

        return $this->item($owner, new OwnersTransformer);
    }

    public function pack($id)
    {
        $owner = Owner::find($id);
        $pack = $owner->doges;

        return $this->collection($pack, new DogesTransformer);
    }
}
