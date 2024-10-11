<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTaskRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required','max:5'], //'required|max:5',
            'description' => 'required'
        ];
    }
}
