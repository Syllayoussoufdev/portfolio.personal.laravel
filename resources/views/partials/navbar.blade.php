    <!-- Navigation fixe -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="{{ route('home') }}">Sylla Y.</a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="{{ route('home') }}" class="nav-link active">Accueil</a>
                <a href="{{ route('home') }}/#apropos" class="nav-link">À propos</a>
                <a href="{{ route('home') }}/#competences" class="nav-link">Compétences</a>
                <a href="{{ route('home') }}/#projets" class="nav-link">Projets</a>
                <a href="{{ route('home') }}/#contact" class="nav-link">Contact</a>
                @auth
                    <a class="nav-link" href={{route('admin.Competences.index')}}>CRUD-Comp</a>
                    <a class="nav-link" href={{ route('admin.diplomes.index') }}>CRUD-Diplômes / Certifications</a>
                    <a class="nav-link" href='#'>CRUD-Expériences</a>
                    <a class="nav-link" href={{ route('admin.messages.index') }}>CRUD-Messages</a>        

                    <a href="{{ route('dashboard') }}" class="nav-link">Dashboard Administration</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link">Logout</button>
                    </form>
                @else
                    {{-- <a href="{{ route('login') }}" class="nav-link">Se connecter</a>
                    <a href="{{ route('inscrire') }}" class="nav-link">S'inscrire</a> --}}
                @endauth                        
            </div>
            <!-- Hamburger menu pour mobile -->
            <div class="nav-toggle" id="nav-toggle">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>
    <style src ="{{ asset('../assets/css/style2.css') }}">
    </style>n