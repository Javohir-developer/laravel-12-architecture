<?php

namespace App\Http\Requests\Movies;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Foydalanuvchiga ruxsat berish (har doim true)
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'release_year' => 'required|integer',
            'rating' => 'required|numeric|min:0|max:10'
        ];
    }
}
