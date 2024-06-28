<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended($this->redirectTo());
    }

    /**
     * Get the redirect path after login.
     */
    protected function redirectTo(): string
    {
        if (auth()->check() && auth()->user()->role === 'admin') {
            return route('dashboard'); // Redirige les administrateurs vers le dashboard
        }

        if (auth()->check()) {
            $user = auth()->user();
            if ($user->email === 'elieadiko5@gmail.com') {
                return route('dashboard'); // Redirection vers le dashboard pour cet utilisateur spécifique
            }else{
                return route('home');
            }
        }
    
        return route('home'); // Redirige tous les autres utilisateurs vers la page d'accueil
    
        
        
    }
    

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
