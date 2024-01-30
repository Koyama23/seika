<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeikaRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'fish.name' => 'required|string|max:15',
        'fish.season' => 'required|string|max:10',
        'fish.price' => 'required|string|max:1',
        'fish.eat' => 'required|string|max:15',
        'fish.habitat' => 'required|string|max:30',
        ];
    }
}
