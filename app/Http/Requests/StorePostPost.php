<?php
// archivo para la verificacion de los post , se crea utilizando el comando make:request name Storen Name POST
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostPost extends FormRequest
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
            'title'=>'required| min:5 | max:500',
            'url_clean' => 'required | min:5 | max:500',
            'content' => 'required | min:5'
        ];
    }
}
