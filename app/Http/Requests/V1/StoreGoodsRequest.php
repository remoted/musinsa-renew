<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreGoodsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
      $user = $this->user();

      return $user != null && $user->tokenCan('create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $method = $this->method();

        return [
            'name' => ['required', 'nullable'],
            'comment' => ['required', Rule::in(['B', 'P', 'V', 'b', 'p', 'v'])],
            'customerId' => ['required', 'nullable'],
            'registedDate' => ['required', 'date_format:Y-m-d H:i:s'],
            'updateDate' => ['date_format:Y-m-d H:i:s', 'nullable']
        ];
    }      
  
    protected function prepareForValidation() {

        if($this->customerId){
          $this->merge([
            'customer_id' => $this->customerId
          ]);
        }

        if($this->updateDate){
          $this->merge([
            'update_date' => $this->updateDate
          ]);
        }

        if ($this->registedDate) {
            $this->merge([
                'registed_date' => $this->registedDate
            ]);
        }
    }
}
