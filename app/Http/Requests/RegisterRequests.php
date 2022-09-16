<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequests extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:15'],
            'fname' => ['required', 'max:100'],
            'lname' => ['required', 'max:100'],
            'country' => ['required'],
            'terms' => ['required'],
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => tt('Bu alan boş bırakılamaz'),
            'email.email' => tt('Lütfen Geçerli bir mail adresi giriniz.'),
            'password.required' => tt('Bu alan boş bırakılamaz'),
            'password.min' => tt('Şifreniz minimum 8 karakter olmalıdır'),
            'password.max' => tt('Şifreniz maximum 15 karakter olmalıdır'),
            'fname.required' => tt('Bu alan boş bırakılamaz'),
            'fname.max' => tt('İsminiz maximum 100 karakter olmalıdır'),
            'lname.required' => tt('Bu alan boş bırakılamaz'),
            'lname.max' => tt('İkinci adınız maximum 100 karakter olmalıdır'),
            'terms.required' => tt('Bu alan boş bırakılamaz'),
        ];
    }
}
