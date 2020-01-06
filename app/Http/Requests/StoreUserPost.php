<?php
// archivo para la verificacion de los post , se crea utilizando el comando make:request name Storen Name POST
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserPost extends FormRequest
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
        return [
            'name'=>'required| max:255',
            'email' => 'required | email |min:5 | max:500 | unique:users'  ,
            'surname' => 'required | max:255' ,
            'password'=>'required',

        ];
    }
}
