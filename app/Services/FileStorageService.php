<?php

namespace App\Services;

use App\Services\Contracts\FileStorageServiceContract;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileStorageService implements FileStorageServiceContract
{

    /**
     * @param $file
     * @return string
     */
    public static function upload(UploadedFile|null|string $file): string
    {
        if (is_string($file)) {
            return str_replace("public/storage", "", $file);
        }
        if (!empty($file)){
            return $Filepath = Storage::putFile('public/storage/photos', $file)  ;
        }

return "";
    }

    /**
     * @param $file
     * @return mixed
     */
    public static function remove(string $file)
    {
        // TODO: Implement remove() method.
    }


    protected static function randomName(): string
    {
        return Str::random() . "_" . time();
    }
}
