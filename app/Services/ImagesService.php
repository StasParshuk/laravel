<?php

namespace App\Services;

use App\Services\Contracts\ImagesServiceContract;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Exception;

class ImagesService implements ImagesServiceContract
{

    /**
     * @param Model $model
     * @param string $methodName
     * @param array $images
     * @return mixed
     */
    public static function attach(Model $model, string $methodName, array $images = [])
    {

        if (!method_exists($model, $methodName)) {
            throw new \Exception($model::class . " doesn't have {$methodName}");
        }

        if (!empty($images)) {
            foreach ($images as $image) {
                call_user_func([$model, $methodName])->create(['path' => $image]);
            }
        }
    }
}
