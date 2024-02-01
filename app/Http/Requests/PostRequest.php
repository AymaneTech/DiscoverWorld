<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "title" => ["required", "min:8", "max:255"],
            "slug" => ["required", "min:8", "max:255"],
            "description" => ["required"],
            "body" => ["required"],
            "destination_id" => ["required"],
            "images" => ["required"],
            "user_id" => ["required", ],
        ];
    }

}
