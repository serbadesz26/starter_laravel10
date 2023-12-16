<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            // 'email' => ['required', 'string', 'email:rfc,dns,spoof'],
            'email' => ['required', 'string', 'email:rfc'],
            'role' => ['nullable', 'string'],
            'verified' => ['nullable', 'boolean'],
        ];
    }
}
