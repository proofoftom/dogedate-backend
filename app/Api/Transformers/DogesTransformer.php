<?php

namespace App\Api\Transformers;

use App\Doge;
use League\Fractal\TransformerAbstract;

class DogesTransformer extends TransformerAbstract {

    // protected $defaultIncludes = ['owner'];

    public function transform(Doge $doge)
    {
        return [
            'id'          => $doge->id,
            'name'        => $doge->name,
            'image'       => $doge->image,
            'genes'       => $doge->genes->pluck('name'),
            'liked_count' => (string) $doge->liked_count,
            'owner'       => $doge->owner
        ];
    }

    public function includeOwner(Doge $doge)
    {
        return $this->item($doge->owner, OwnersTransformer::class);
    }
}
