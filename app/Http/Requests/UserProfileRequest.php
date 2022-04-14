<?php

namespace App\Http\Requests;

use App\Rules\Phone;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UserProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|regex:/[A-Za-zА-Яа-яЁё\s-]/iu',
            'email' => 'required|email',
            'last_name' => 'required|regex:/[A-Za-zА-Яа-яЁё\s-]/iu',
            'phone' => ['required', 'string',  app(Phone::class)],
            'weight' => 'required|numeric|min:0',
            'height' => 'required|numeric|min:0',
            'sex' => ['required', Rule::in(['m', 'f'])],
            'birthday' => 'required|date',
            'root' => 'required|boolean',
            'stay' => 'required|numeric',
        ];
    }
}
