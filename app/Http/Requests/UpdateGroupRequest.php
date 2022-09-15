<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGroupRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'day' => 'required',
            'time' => 'required',
            'kurc_id' => 'required'
        ];
    }

    public function message(){
    return [
        'name.required' => 'gruppa atim kiritin',
        'day.required' => 'kunlerdi kiritin',
        'time.required' => 'waqitin kiritin'
    ];
    }
}
