{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Mot de Pass :')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
<x-guest-layout>
@section('content')

<!-- 
  ===== CONTENEUR PRINCIPAL =====
  - min-h-screen : Prend toute la hauteur de l'écran
  - flex : Utilise flexbox pour centrer
  - items-center, justify-center : Centre le formulaire au milieu
  - px-4 : Padding horizontal pour mobile
  - style="background: ..." : Fond dégradé bleu (comme votre portfolio)
-->
<div class="min-h-screen flex items-center justify-center px-4 py-12" 
     style="background: linear-gradient(135deg, #1a2845 0%, #16213e 100%);">
    
    <!-- 
      ===== CARTE DU FORMULAIRE =====
      - w-full : Prend 100% de la largeur disponible
      - max-w-md : Largeur max de 448px (pas trop large !)
      - bg-white : Blanc
      - rounded-2xl : Coins arrondis 20px
      - shadow-2xl : Ombre douce
      - p-8 : Padding de 32px à l'intérieur
      - border : Bordure subtile
    -->
    <div class="w-3/4 max-w-md  bg-white rounded-2xl shadow-2xl p-8 border border-white border-opacity-20">
        
        <!-- ===== EN-TÊTE DU FORMULAIRE ===== -->
        <div class="text-center mb-8">
            <!-- Icône -->
            <div class="inline-flex items-center justify-center w-16 h-16 bg-blue-500 rounded-2xl mb-4">
                <i class="fas fa-cube text-white text-3xl"></i>
            </div>
            
            <!-- Titre -->
            <h2 class="text-3xl font-bold text-gray-900 mb-2">
                {{ __('Bienvenue') }}
            </h2>
            
            <!-- Sous-titre -->
            <p class="text-gray-500 text-sm">
                {{ __('Connectez-vous à votre compte') }}
            </p>
        </div>

        <!-- ===== FORMULAIRE DE CONNEXION ===== -->
        <form method="POST" action="{{ route('login') }}" class="space-y-5">
            @csrf

            <!-- ===== CHAMP EMAIL ===== -->
            <div>
                <!-- Label -->
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                    {{ __('Email') }}
                </label>
                
                <!-- Input
                  - w-full : 100% de largeur
                  - px-4 py-3 : Padding interne
                  - border border-gray-300 : Bordure grise
                  - rounded-lg : Coins arrondis
                  - focus: : Effets au focus
                  - transition-all : Animation fluide
                -->
                <input 
                    id="email"
                    type="email" 
                    name="email"
                    value="{{ old('email') }}"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg 
                           bg-gray-50 text-gray-900 text-sm
                           focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                           transition-all duration-200"
                    placeholder="vous@exemple.com"
                    required
                    autofocus
                >
                
                <!-- Message d'erreur si validation échoue -->
                @error('email')
                    <p class="text-red-500 text-sm mt-2 flex items-center gap-2">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- ===== CHAMP MOT DE PASSE ===== -->
            <div>
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">
                    {{ __('Mot de passe') }}
                </label>
                <input 
                    id="password"
                    type="password" 
                    name="password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg 
                           bg-gray-50 text-gray-900 text-sm
                           focus:bg-white focus:border-blue-500 focus:ring-2 focus:ring-blue-200
                           transition-all duration-200"
                    placeholder="••••••••"
                    required
                >
                @error('password')
                    <p class="text-red-500 text-sm mt-2 flex items-center gap-2">
                        <i class="fas fa-exclamation-circle"></i>
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <!-- ===== CHECKBOX "SE SOUVENIR" ===== -->
            <div class="flex items-center">
                <input 
                    id="remember" 
                    type="checkbox" 
                    name="remember" 
                    {{ old('remember') ? 'checked' : '' }}
                    class="h-4 w-4 rounded border-gray-300 text-blue-500 
                           focus:ring-blue-500 cursor-pointer"
                >
                <label for="remember" class="ml-3 text-sm text-gray-600 cursor-pointer">
                    {{ __('Se souvenir de moi') }}
                </label>
            </div>

            <!-- ===== BOUTON DE CONNEXION ===== 
              - w-full : 100% de largeur
              - py-3 : Padding vertical pour un bouton spacieux
              - bg-blue-500 : Bleu du portfolio
              - hover:bg-blue-600 : Change de couleur au survol
              - text-white font-medium : Texte blanc gras
              - rounded-lg : Coins arrondis
              - transition-all : Animation fluide
              - flex items-center justify-center gap-2 : Centrage avec icône
            -->
            <button 
                type="submit" 
                class="w-full py-3 px-4 bg-blue-500 hover:bg-blue-600 text-white font-medium 
                       rounded-lg transition-all duration-200 
                       flex items-center justify-center gap-2 
                       shadow-lg hover:shadow-xl hover:-translate-y-0.5"
            >
                <i class="fas fa-sign-in-alt"></i>
                {{ __('Se connecter') }}
            </button>
        </form>

        <!-- ===== SECTION BASSE DU FORMULAIRE ===== -->
        <!-- Séparateur -->
        <div class="relative my-6">
            <div class="absolute inset-0 flex items-center">
                <div class="w-full border-t border-gray-300"></div>
            </div>
            <div class="relative flex justify-center text-sm">
                <span class="px-2 bg-white text-gray-500">Ou</span>
            </div>
        </div>

        <!-- Liens de navigation -->
        <div class="space-y-3 text-center text-sm">
            <p class="text-gray-600">
                {{ __('Mot de passe oublié ?') }}
                <a href="{{ route('password.request') }}" 
                   class="text-blue-500 hover:text-blue-600 font-semibold hover:underline">
                    {{ __('Réinitialiser') }}
                </a>
            </p>
            <p class="text-gray-600">
                {{ __('Pas de compte ?') }}
                <a href="{{ route('inscrire') }}" 
                   class="text-blue-500 hover:text-blue-600 font-semibold hover:underline">
                    {{ __('S\'inscrire') }}
                </a>
            </p>
        </div>

        <!-- Info de sécurité -->
        <div class="text-center mt-6 pt-4 border-t border-gray-200">
            <p class="text-xs text-gray-500 flex items-center justify-center gap-2">
                <i class="fas fa-lock"></i>
                {{ __('Votre connexion est sécurisée') }}
            </p>
        </div>
    </div>
</div>

<!-- ===== STYLES PERSONNALISÉS ===== -->
<style>
    /* Import Font Awesome si nécessaire */
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css');
</style>

@endsection
</x-guest-layout>