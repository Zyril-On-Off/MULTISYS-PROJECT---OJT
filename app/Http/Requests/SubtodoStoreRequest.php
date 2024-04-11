<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubtodoStoreRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'task' => 'required',
            'status' => 'required',
        ];
    }
}