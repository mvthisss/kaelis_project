<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\RedirectResponse;

class AuthController extends Controller
{
    
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    
    public function Inscrire(Request $request): RedirectResponse
    {
        // Validation des données
       $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'filiere' => 'required|string|max:255',
            'niveau' => 'required|string|max:255',
            'date_naissance' => 'required|date',
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => "L'adresse email est obligatoire.",
            'email.unique' => 'Cette adresse email est déjà utilisée.',
            'password.required' => 'Le mot de passe est obligatoire.',
            'password.confirmed' => 'La confirmation du mot de passe ne correspond pas.',
        ]
        );

        // Création de l'utilisateur
       $user= User::create(
        [
            'nom' => $validated['nom'],
            'prenom' => $validated['prenom'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'filiere' => $validated['filiere'],
            'niveau' => $validated['niveau'],
            'date_naissance' => $validated['date_naissance'],
        ]
       );
       // Connexion automatique de l'utilisateur
         Auth::login($user);
        // Redirection vers la page souhaitée avec un message de succès
        return redirect()->intended(route('acceuil.index'))
            ->with('success', 'Compte créé avec succès. Bienvenue !');
    }


    //methode pour la connexion
    public function login(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required'],
        ], [
            'email.required' => "L'adresse email est obligatoire.",
            'password.required' => 'Le mot de passe est obligatoire.',
        ]);

        if (Auth::attempt($validated, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('trips.index'))
                ->with('success', 'Vous êtes connecté.');
        }

        return back()->withErrors([
            'email' => 'Identifiants incorrects.',
        ])->onlyInput('email');
    }



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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
