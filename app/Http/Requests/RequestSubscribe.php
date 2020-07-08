<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestSubscribe extends FormRequest
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
            'email' => 'required|email|unique:subscribe'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Bạn cần nhập Email để đăng kí theo dõi',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email không đúng định dạng',
        ];
    }
}
