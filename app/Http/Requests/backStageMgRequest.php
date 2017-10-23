<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class backStageMgRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
       // var_dump('expression');

        return [
            'account'=>'required|max:40',
            'password'=>'required|max:20'
            //
        ];
    }
}

