<?php

namespace App\Http\Controllers;

use App\Models\UserSalon;
use Illuminate\Http\Request;


class UserSalonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserSalon $userSalon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserSalon $userSalon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UserSalon $userSalon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserSalon $userSalon)
    {
        //
    }

    /**
     * Exibe o formulário de cadastro de usuários.
     */
    public function showRegistrationForm()
    {
        return view('cadastro/cadastro');
    }

    /**
     * Processa o formulário de cadastro de usuários.
     */


    public function register(Request $request)
    {
        // Validação dos dados
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user_salons,email', // Altere para verificar a unicidade na tabela user_salons
            'password' => 'required|string|min:8',
            'date_of_birth' => 'required|date',
            'sex' => 'required|in:male,female,other',
            'address' => 'nullable|string|max:255',
        ]);

        // Criando um novo usuário no modelo UserSalon
        $userSalon = UserSalon::create([
            'name' => $validatedData['name'],
            'last_name' => $validatedData['last_name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'date_of_birth' => $validatedData['date_of_birth'],
            'sex' => $validatedData['sex'],
            'address' => $validatedData['address'],
        ]);

        // Redirecionar após o cadastro
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso! Você pode fazer o login agora.');
    }



}
