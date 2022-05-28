<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
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
                'name'             => ['bail','required'],
                'email'            => ['bail','required',Rule::unique('companies')->whereNull('deleted_at')],
                'logo'             => ['bail','required','image','dimensions:min_width=100,min_height=100'],
                'pagina_web'       => ['bail','required',Rule::unique('companies')->whereNull('deleted_at')],
                ];
              break;
            case 'PUT':
                return [
                    'name'         => ['bail','required'],
                    'email'        => ['bail','required',Rule::unique('companies')->ignore(request('company'))->whereNull('deleted_at')],
                    'logo'         => ['bail','nullable','image','dimensions:min_width=100,min_height=100'],
                    'pagina_web'   => ['bail','required',Rule::unique('companies')->ignore(request('company'))->whereNull('deleted_at')],
                    ];
              break;
            default:
            return [
                'name'             => ['bail','required'],
                'email'            => ['bail','required',Rule::unique('companies')->whereNull('deleted_at')],
                'logo'             => ['bail','required','image','dimensions:min_width=100,min_height=100'],
                'pagina_web'       => ['bail','required',Rule::unique('companies')->whereNull('deleted_at')],
                ];
              break;
        }
    }

}
