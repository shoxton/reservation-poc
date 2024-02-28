<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationRequest extends FormRequest
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
            'reservable_type' => ['required', 'string'],
            'reservable_id' => ['required', 'string'],
            'starts_at' => ['required', 'date', 'date_format:Y-m-d H:i:s'],
            'ends_at' => ['required', 'date', 'date_format:Y-m-d H:i:s'],
        ];
    }
}
