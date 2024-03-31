<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    protected function store(Request $request)
    {
        // Validar los datos del formulario de registro
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    
        // Si la validación falla, redirigir de nuevo al formulario de registro con los errores
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        // Crear el usuario si la validación fue exitosa
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        // Redireccionar al usuario a la ruta /admin si la creación fue satisfactoria
        return redirect('/admin')->with('status', '¡Registro exitoso! Bienvenido a nuestra aplicación.');
    }
}
