<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
   /*  public function authorize(): bool
    {
        return false;
    } */

    public function rules(){
        return [
            'type' => 'required|string|in:familia,planta',
            'family' => $this->getValidationRule(),
            'description' => $this->getValidationRule(),
            'common_name' => $this->getValidationRule()
        ];
    }

    protected function getValidationRule(){
        // Si el campo 'type' es 'FAMILIA', permite que 'family' sea nulo
        if ($this->input('type') === 'familia') {
            return 'nullable';
        }
        // Si el campo 'type' es 'PLANTA', 'family' no debe ser nulo
        return 'required';
    }
}
