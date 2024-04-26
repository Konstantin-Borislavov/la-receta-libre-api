<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Factory as ValidationFactory;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'=>'required',
            'password'=>'required'
        ];  
    }


    //Este código que está comentado debería servir para que el usuario pueda loguearse tanto con
    //el email como con el nombre de usuario, solo que de momento me está dando errores, así que
    //lo implementaré más adelante

    /*public function getCredentials(){
        $username = $this->get('username');

        if($this->isEmail($username)){
            return[
                'email'=> $username,
                'password'=> $this->get('password')
            ];

            return $this->only('username','password');
        }

    }

    //Función para comprobar si lo que ha introducido el usuario para
    //logearse es su correo o su nombre de usuario
    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return ! $factory->make(['uername'=>$value],['username'=>'email'])->fails();
   

    }*/

}
