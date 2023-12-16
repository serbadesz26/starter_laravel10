<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuitemRequest extends FormRequest
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
            'route' => ['required', 'string'],
            'permission_name' => ['required', 'string'],
            'icon' => ['sometimes', 'required', 'string', 'starts_with:ri-'],
            'status' => ['sometimes', 'required', 'boolean'],
        ];
    }
}
