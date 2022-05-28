<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {
            case 'POST':
                return [
                'first_name'             => ['bail','required','string'],
                'last_name'              => ['bail','required','string'],
                'email'                  => ['bail','required','email',Rule::unique('employees')->whereNull('deleted_at')],
                'phone'                  => ['bail','required','numeric',Rule::unique('employees')->whereNull('deleted_at')],
                'company_id'             => ['bail','required','exists:companies,id'],
                ];
              break;
            case 'PUT':
                return [
                    'first_name'         => ['bail','required','string'],
                    'last_name'          => ['bail','required','string'],
                    'email'              => ['bail','required','email',Rule::unique('employees')->ignore(request('employee'))->whereNull('deleted_at')],
                    'phone'              => ['bail','required','numeric',Rule::unique('employees')->ignore(request('employee'))->whereNull('deleted_at')],
                    'company_id'         => ['bail','required','exists:companies,id'],
                    ];
              break;
            default:
            return [
                'first_name'             => ['bail','required','string'],
                'last_name'              => ['bail','required','string'],
                'email'                  => ['bail','required','email',Rule::unique('employees')->whereNull('deleted_at')],
                'phone'                  => ['bail','required','numeric',Rule::unique('employees')->whereNull('deleted_at')],
                'company_id'             => ['bail','required','exists:companies,id'],
                ];
              break;
        }
    }
}
