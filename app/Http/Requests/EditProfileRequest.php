<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic if needed
    }

    public function rules()
    {
        return [
            'new_password' => [
                'nullable',
                'string',
                'min:8',
                'regex:/[!@#]/',
            ],
            'confirm_password' => [
                'nullable',
                'string',
                'min:8',
                'regex:/[!@#]/',
                'same:new_password'
            ]
        ];
    }

    public function messages()
    {
        return [                        
            'new_password.min' => 'The new password must be at least 8 characters long.',
            'new_password.regex' => 'The new password must contain at least one special character (!@#).',            
            'confirm_password.min' => 'The confirmation password must be at least 8 characters long.',
            'confirm_password.regex' => 'The confirmation password must contain at least one special character (!@#).',
            'confirm_password.same' => 'The confirmation password must match the new password.',
        ];
    }
}
