<?php

namespace App\Http\Requests\admin;

use Illuminate\Foundation\Http\FormRequest;

class checkRequests extends FormRequest
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
        return [
            'name' => ['required', 'min:5', 'max:23'],
            'email' => ['required', 'string', 'email'],
            'pass' => [
                'required',
                'min:6'
            ],
            'pass_' => 'required',
            'pass_' != 'pass' => 'different',
            'image' => [
                'required',
                'image',
            ],
            'tieu_de' => ['required'],
            'tom_tat' => ['required'],
            'noi_dung' => ['required'],
            'hinh_anh' => ['required', 'image'],
            'tac_gia' => ['required'],
            'luot_xem' => ['required', 'integer', 'min:1'],
            'id_LT' => ['required', 'integer', 'min:1'],
            'ten_TL' => ['required'],
            'id_TL' => ['required', 'integer'],
            'ten_LT' => ['required'],
            'id_user' => ['required', 'integer'],
            'id_TT' => ['required', 'integer'],
            'binh_luan' => ['required'],
        ];
    }

    public function message()
    {
        return [
            //
        ];
    }

    public function attributes()
    {
        return [
            //
        ];
    }
}