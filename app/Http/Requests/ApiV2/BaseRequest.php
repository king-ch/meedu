<?php


namespace App\Http\Requests\ApiV2;


use App\Exceptions\ApiV2Exception;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class BaseRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    /**
     * @param Validator $validator
     * @throws ApiV2Exception
     */
    protected function failedValidation(Validator $validator)
    {
        throw new ApiV2Exception(implode(',', $validator->errors()->all()));
    }

}