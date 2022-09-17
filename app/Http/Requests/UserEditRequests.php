<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserEditRequests extends FormRequest
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
            'password' => ['nullable', 'min:8', 'max:15'],
            'fname' => ['required', 'max:100'],
            'lname' => ['required', 'max:100'],
            'country' => ['required'],
            'phone' => ['required', 'max:40'],
            'role' => ['required'],
            'address' => ['required', 'max:5000', 'min:15'],
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
            'address.min' =>tt('Adresiniz minimum 15 karakter olmalıdır'),
            'address.max' =>tt('Adresiniz maximum 5000 karakter olmalıdır'),
            'address.required' => tt('Bu alan boş bırakılamaz'),
            'role.required' => tt('Bu alan boş bırakılamaz'),
            'phone.required' => tt('Bu alan boş bırakılamaz'),
            'phone.max' =>tt('Telefon numaranız maximum 40 karakter olmalıdır'),
            'email.required' => tt('Bu alan boş bırakılamaz'),
            'email.email' => tt('Lütfen Geçerli bir mail adresi giriniz.'),
            'password.min' => tt('Şifreniz minimum 8 karakter olmalıdır'),
            'password.max' => tt('Şifreniz maximum 15 karakter olmalıdır'),
            'fname.required' => tt('Bu alan boş bırakılamaz'),
            'fname.max' => tt('İsminiz maximum 100 karakter olmalıdır'),
            'lname.required' => tt('Bu alan boş bırakılamaz'),
            'lname.max' => tt('İkinci adınız maximum 100 karakter olmalıdır'),
        ];
    }
}
