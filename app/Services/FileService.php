<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class FileService
{
    public function updateFile($model, $request, $type)
    {
        if (!empty($model->file)) {
            // Deletar o arquivo existente
            Storage::delete($model->file);
        }

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $name = time() . '.' . $extension;

        // Salvar o arquivo no storage
        $filePath = $file->storeAs('file', $name);

        $model->file = $filePath;

        return $model;
    }
}