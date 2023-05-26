<?php

namespace App\Http\Requests;

use App\Models\Client;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class ClientRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $id = Request::segment(3, null);

        $request = request()->all();

        return [
            'name' => 'required',
            'cpf' => [
                'required',
                Rule::unique(Client::class)->ignore($id),
            ],
            'email' => [
                'required',
                'email',
                Rule::unique(Client::class)->ignore($id),
            ],
            'active' => 'required|boolean',
        ];
    }
}
