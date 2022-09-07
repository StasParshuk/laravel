<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class RemoveImageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Image $image)
    {
        try {
            $image->delete();
            return response()->json(["massage"=>'image was delete ']);
        } catch (\Exception $exception) {
            logs()->error($exception);
            return response(422)->json(["massage"=>'oops image not delete same wrong ']);
        }
    }
}

