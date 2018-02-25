<?php

namespace App\Api\Transformers;

use App\Owner;
use League\Fractal\TransformerAbstract;
use Illuminate\Support\Facades\DB;


class OwnersTransformer extends TransformerAbstract {

    public function transform(Owner $owner)
    {
        $doges_liked = DB::table('doges_liked')->
          select('doge_id')->
          where('owner_id', '=', $owner->id)->
          pluck('doge_id')->
          all();

        return [
            'id'          => $owner->id,
            'name'        => $owner->name,
            'image'       => $owner->image,
            'doges'       => $owner->doges,
            'doges_liked' => $doges_liked
        ];
    }
}
