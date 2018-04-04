<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TreesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    protected $redirect = 'dashboard/trees/create' ;

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
            'name' => 'required',
            'name_comun' => 'required',
            'tall' => 'required',
            'tall_branch' => 'required',    
            'top' => 'required',
            'shown' => 'required',
            'shadown' => 'required',
            'perimeter' => 'required',
            'perimeter_chest' => 'required',
            'numbers_trunk' => 'required',
            'diameter_north' => 'required',
            'diameter_west' => 'required',
            'branch_trunk' => 'required',
            'angle_tree' => 'required',
            'tall_branch' => 'required',
            'cup_land' => 'required',
            'cup_floor' => 'required',
            'cup_bush' => 'required',
            'cup_pavement' => 'required',
            'distance_gas' => 'required',
            'distance_floor' => 'required',
            'distance_wall' => 'required',
            'distance_horizontal' => 'required',
            'distance_vertical' => 'required',
            'latitud' => 'required',
            'longitud' => 'required',
        ];
    }

    public function messages(){
        return [
            'name.required' => 'Este campo es obligatorio *',
            'name_comun.required' => 'Este campo es obligatorio *',
            'tall.required' => 'Este campo es obligatorio *',
            'tall_branch.required' => 'Este campo es obligatorio *',

            'top.required' => 'Este campo es obligatorio *',
            'shown.required' => 'Este campo es obligatorio *',
            'shadown.required' => 'Este campo es obligatorio *',
            'perimeter.required' => 'Este campo es obligatorio *',
            'perimeter_chest.required' => 'Este campo es obligatorio *',
            'numbers_trunk.required' => 'Este campo es obligatorio *',
            'diameter_north.required' => 'Este campo es obligatorio *',
            'diameter_west.required' => 'Este campo es obligatorio *',
            'branch_trunk.required' => 'Este campo es obligatorio *',
            'angle_tree.required' => 'Este campo es obligatorio *',
            'tall_branch.required' => 'Este campo es obligatorio *',
            'cup_land.required' => 'Este campo es obligatorio *',
            'cup_floor.required' => 'Este campo es obligatorio *',
            'cup_bush.required' => 'Este campo es obligatorio *',
            'cup_pavement.required' => 'Este campo es obligatorio *',
            'distance_gas.required' => 'Este campo es obligatorio *',
            'distance_floor.required' => 'Este campo es obligatorio *',
            'distance_wall.required' => 'Este campo es obligatorio *',
            'distance_horizontal.required' => 'Este campo es obligatorio *',
            'distance_vertical.required' => 'Este campo es obligatorio *',
            'latitud.required' => 'Este campo es obligatorio *',
            'longitud.required' => 'Este campo es obligatorio *',
        ];
    }

    public function response(array $errors){
        return redirect($this->redirect)->withErrors($errors, 'TreeError')->withInput();
    }
}
