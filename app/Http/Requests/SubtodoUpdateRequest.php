<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubtodoUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true; 
    }

    public function rules()
    {
        return [
            'task' => 'sometimes|required',
            'status' => 'sometimes|required',
        ];
    }
}
