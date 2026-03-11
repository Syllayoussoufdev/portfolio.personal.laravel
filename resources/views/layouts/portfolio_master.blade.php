<!DOCTYPE html>
<html lang="en">
    @include('partials.head')
    <body>
    <!-- Inclure la barre de navigation (un partial) -->
    @include('partials.navbar')
    <h1 class="text-center mt-4">Bienvenue admin</h1>

    <!-- Zone de contenu principale -->
        @yield('content')
    

    <!-- Inclure le footer (un partial) -->
    @include('partials.footer')

    <!-- Vos scripts JS globaux -->
    <script src="{{ asset('../assets/js/script.js') }}"></script>

    </body>
</html>