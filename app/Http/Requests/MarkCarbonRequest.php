<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkCarbonRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $redirect = 'dashboard/mark/create' ;

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
        return [
            'age'       => 'max:99|required',
            'local'     => 'required',
            'email'     => 'required|unique:mark_carbon|email',

            'bus'       => 'max:24', 
            'transmi'   => 'max:24', 
            'taxi'      => 'max:24', 
            'taxi_mas'  => 'max:24', 
            'moto'      => 'max:24',
            'moto_el'   => 'max:24', 
            'bici'      => 'max:24', 
            'avion'     => 'max:24',

        ];
    }

    public function messages(){
        return [
            'age.required'   =>  'Este campo es obligatorio. *', 
            'age.between'    =>  'La edad debe ser :max años *',
            'local.required' =>  'Este campo es obligatorio. *',
            
            'email.required' => 'Este campo es obligatorio. *', 
            'email.unique'   => 'Este correo ya está registrado *', 
            'email.email'    => 'Este campo debe ser tipo email. *',

            'bus.between'       => 'Debe ser máximo :max',
            'transmi.between'   => 'Debe ser máximo :max', 
            'taxi.between'      => 'Debe ser máximo :max', 
            'taxi_mas.between'  => 'Debe ser máximo :max', 
            'moto.between'      => 'Debe ser máximo :max', 
            'moto_el.between'   => 'Debe ser máximo :max', 
            'bici.between'      => 'Debe ser máximo :max', 
            'avion.between'     => 'Debe ser máximo :max', 
        ];
    }

    public function response(array $errors){
        return redirect($this->redirect)->withErrors($errors, 'markError')->withInput();
    }
}
