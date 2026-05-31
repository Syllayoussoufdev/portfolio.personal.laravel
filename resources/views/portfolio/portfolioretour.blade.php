<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sylla Youssouf - Développeur Web & Mobile Junior</title>
    <link rel="stylesheet" href="{{ asset('../assets/css/style2.css') }}">
    <!-- Font Awesome pour les icônes -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
    <body>
    <!-- Inclure la barre de navigation (un partial) -->
        <!-- Navigation fixe -->
    <nav class="navbar" id="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <a href="#accueil">Sylla Y.</a>
            </div>
            <div class="nav-menu" id="nav-menu">
                <a href="#accueil" class="nav-link active">Accueil</a>
                <a href="#apropos" class="nav-link">À propos</a>
                <a href="#competences" class="nav-link">Compétences</a>
                <a href="#projets" class="nav-link">Projets</a>
                <a href="#contact" class="nav-link">Contact</a>
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
    </style>
    <!-- HERO -->
    <section id="accueil" class="hero" aria-labelledby="hero-title">
        <div class="container hero-content">
        <div class="hero-image">
            <!-- Placeholder pour votre photo - remplacez par votre vraie photo -->
            <div class="profile-photo">
                <img src="{{ asset('assets/images/profil3.png') }}" alt="Photo de profil" />
            </div>
        </div>

        <div class="hero-right">
            <h1 id="hero-title" class="hero-title">{{ $owner->name }}</h1>
            <p class="hero-subtitle">{{ $owner->titre_professionnel}}</p>
            <p class="hero-description">{{ $owner->biographie }}</p>

            <div class="hero-buttons">
            <!-- lien direct vers ton CV (PDF) -->
            <a class="btn btn-primary" target="_blank" href="{{ $owner->cv }}" download aria-label="Télécharger le CV de Sylla Youssouf">
                <i class="fas fa-download"></i> Télécharger mon CV
            </a>
            <a class="btn btn-secondary" href="#contact"><i class="fas fa-envelope"></i> Me contacter</a>
            </div>

            <!-- Skills quick badges -->
            <div class="quick-skills" aria-hidden="false">
            <span class="skill-badge">PHP</span>
            <span class="skill-badge">Laravel</span>
            <span class="skill-badge">MySQL</span>
            <span class="skill-badge">JavaScript</span>
            <span class="skill-badge">React</span>
            </div>
        </div>
        </div>
    </section>

    <!-- Section À propos -->
    <section id="apropos" class="about">
        <div class="container">
            <h2 class="section-title">À propos de moi</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Jeune diplômé d'un BTS en Informatique Développeur d'Applications, j'ai travaillé sur plusieurs projets en PHP, Laravel, MySQL, HTML, CSS, JavaScript et Bootstrap. J'ai également une initiation en React.js et Flutter/Dart. Passionné par l'innovation digitale et les outils no-code, j'ai aussi une expérience en support technique, formation et documentation.
                    </p>
                    
                    <h3>Mon parcours</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2025</div>
                            <div class="timeline-content">
                                <h4>Assistant technique - MUSCOP-CI : (Temp parciel)</h4>
                                <p>Support utilisateurs, formation, déploiement applicatif</p><br>

                                <h4>Freelance web - (Temp parciel)</h4>
                                <p>Propection et Realisatin de projet web en Freelance pas trop gros (site web, vibe coding, no-code, ect ...)</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2023-2024</div>
                            <div class="timeline-content">
                                <h4>Stage développeur web - Stratos-CI</h4>
                                <p>PHP/Laravel, MySQL, Bootstrap, correction de bugs et documentation</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2021-2023</div>
                            <div class="timeline-content">
                                <h4>BTS Informatique Développeur d'Applications</h4>
                                <p>ISFMI(Institut Supperieur de formation au Metier de l'Informatique) Abidjan - Diplôme et Soutenance</p>
                            </div>
                        </div>
                    </div>                    
                </div>
                
                <div class="about-cards">
                    <div class="info-card">
                        <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <h4>Localisation</h4>
                            <p>Abidjan, Côte d'Ivoire</p>
                        </div>
                            <div class="info-card">
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                                <h4>Email</h4>
                                <p><a href="mailto:youssoufs1209@gmail.com">youssoufs1209@gmail.com</a></p>
                            </div>
                        <div class="info-card">
                            <i class="fab fa-github" aria-hidden="true"></i>
                            <h4>GitHub</h4>
                            <p><a href="https://github.com/Syllayoussoufdev" target="_blank" rel="noopener">Syllayoussoufdev</a></p>
                        </div>
                        <div class="info-card">
                            <i class="fab fa-linkedin" aria-hidden="true"></i>
                            <h4>LinkedIn</h4>
                            <p><a href="https://www.linkedin.com/in/sylla-youssouf-devweb?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener">Sylla Youssouf</a></p>
                        </div>
                </div>
            </div>
        </div>
    </section>
        
    <!-- Section Compétences -->
    <section id="competences" class="skills">
        <div class="container">
            <h2 class="section-title">Mes compétences</h2>
            <div class="skills-grid">
                <!-- Frontend Skills -->
                <div class="skill-category">
                    <h3><i class="fas fa-palette"></i> Frontend</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>HTML5 / CSS3</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>tailwind.css / Bootstrap</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>JavaScript / React.js</span>
                                <span>55%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="55%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Integration de templates</span>
                                <span>60%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="60%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Platorme Responsive</span>
                                <span>40%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="40%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Skills -->
                <div class="skill-category">
                    <h3><i class="fas fa-server"></i> Backend</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>PHP (Poo, MVC, CRUD)</span>
                                <span>80%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="80%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Laravel</span>
                                <span>75%</span>
                            </div>                            
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>SQL</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70%"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Mobile & Outils -->
                <div class="skill-category">
                    <h3><i class="fas fa-mobile-alt"></i> Mobile & Outils</h3>
                    <div class="skill-list">
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Flutter</span>
                                <span>50%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="50%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Git/GitHub</span>
                                <span>75%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="75%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>WordPress</span>
                                <span>70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-info">
                                <span>Documentation</span>
                                <span>85%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="85%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Formations & Certificats -->
    <section id="apropos" class="about">
        <div class="container">
            <h2 class="section-title">Formations & Certificats </h2>
            <div class="about-content">
                <div class="about-text">
                    <div class="timeline">                        
                        @foreach ($certificats_grouped as $year => $certificats)
                        <div class="timeline-item">
                            <div class="timeline-date">{{ $year }}</div>
                            <div class="timeline-content">
                                @foreach ($certificats as $certificat)
                                    <h4>{{ $certificat->nom_diplome }}</h4>
                                    <p>{{ $certificat->centre_formateur }}</p><br>
                                    <p>{{ $certificat->description }}</p>
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>  
                </div>                    
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projets" class="projects">
        <div class="container">
            <h2 class="section-title">Mes projets</h2>
            <div class="projects-grid">
                @auth         
                    <div class="mb-4 text-end">
                        <a href="{{ route('admin.projects.create') }}" class="btn btn-secondary">
                            <i class="bi bi-plus-lg"></i> Ajouter un Projet
                        </a>
                    </div>
                @endauth
                @forelse($owner->projets as $projet)
                    <div class="project-card">
                        <div class="project-image">
                           {{-- Cas où l'image existe --}}
                            @if($projet->images && file_exists(public_path($projet->images)))
                                <div class="project-image">
                                    <img src="{{ asset($projet->images) }}" alt="Image du projet {{ $projet->nom }}">
                                </div> {{-- Correction ici : bien fermer avec </div> --}}
                            @else
                                {{-- Cas du "Sticker" avec dégradé selon la catégorie --}}
                                <div class="project-image">
                                    @php
                                        // On normalise la catégorie pour la comparaison
                                        $category = strtolower($projet->category);
                                    @endphp
                                    {{-- <i class="fas fa-users"></i>S
                                        <i class="fas fa-graduation-cap"></i>
                                        <i class="fas fa-chart-bar"></i> --}}
                                    @if($category == 'web')
                                        <i class="fas fa-globe"></i>
                                    @elseif($category == 'mobile')
                                        <i class="fas fa-mobile-alt"></i>
                                    @elseif($category == 'ia' || $category == 'data')
                                        <i class="fas fa-brain"></i>
                                    @elseif($category == 'formation') {{-- Ajouté selon ton image --}}
                                        <i class="fas fa-graduation-cap"></i>
                                    @else
                                        <i class="fas fa-cubes"></i>
                                    @endif
                                </div>
                            @endif                          
                        </div>
                        <div class="project-content">
                            <h3>{{ $projet->titre }}</h3>
                            <h5>
                                <small class="text-muted">Catégorie : {{ $projet->category }}</small><br>
                                <small class="text-muted">Statut : "{{ $projet->statut }}"</small>
                            </h5>
                            <p>{{ Str::limit($projet->description, 120) }}</p>
                            <div class="project-tech">
                                @forelse ($projet->competence as $competence) 
                                    <span class="tech-tag">{{ $competence->nom_competence }}</span>
                                @empty
                                    <span class="tech-tag">Laravel,Bootstrap,MySQL</span>
                                @endforelse
                            </div>
                            <div class="project-buttons">
                                @if($projet->lien_demo
                                    )
                                    <a href="{{ $projet->lien_demo }}" target="_blank" class="btn btn-primary">
                                        <i class="bi bi-eye"></i> Voir
                                    </a>
                                @endif
                                <a href="{{ route('projects.show', $projet->id) }}" class="btn btn-small">
                                    Détails 
                                </a>
                                @if($projet->lien_github)
                                    <a href="{{ $projet->lien_github }}" target="_blank" class="btn btn-outline">
                                        <i class="bi bi-github"></i> GitHub
                                    </a>
                                @endif   
                                <br>
                                @auth
                                    <a href="{{ route('admin.projects.edit', $projet->id) }}" class="btn btn-warning btn-sm flex-grow-1">
                                        <i class="bi bi-pencil-square"></i> Éditer
                                    </a>
                                    <form action="{{ route('admin.projects.destroy', $projet->id) }}" method="POST" class="flex-grow-1">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce projet ?');">
                                            <i class="bi bi-trash"></i> Supprimer
                                        </button>
                                    </form>
                                @endauth   
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Aucun projet disponible.</p>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Contactez-moi</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Restons en contact</h3>
                    <p>N'hésitez pas à me contacter pour discuter de vos projets ou opportunités de collaboration.</p>
                    
                    <div class="contact-links">
                        <a href="mailto:youssoufs1209@gmail.com" class="contact-link">
                            <i class="fas fa-envelope"></i>
                            <span>youssoufs1209@gmail.com</span>
                        </a>
                        <a href="https://github.com/Syllayoussoufdev" class="contact-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub Profile</span>
                        </a>
                        <a href="https://www.linkedin.com/in/sylla-youssouf-devweb?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener" class="contact-link">
                            <i class="fab fa-linkedin"></i>
                            <span>LinkedIn Profile</span>
                        </a>
                        <a href="https://wa.me/0594564993" class="contact-link">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

                <form class="contact-form" id="contactForm" action="{{ route('Mesage.store') }}" method="POST" id="contact-form" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom et Prenom :</label>
                        <input class="form-control" id="nom" name="nom" type="text" placeholder="Entrez votre Nom..." data-sb-validations="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>                        
                        <input class="form-control" id="email" name="email" type="email" placeholder="sylla@example.com" data-sb-validations="required,email" />                    
                    </div>
                    <div class="form-group">
                        <label for="sujet">Objet :</label>
                        <input class="form-control" id="sujet" name="sujet" type="text" placeholder="Objet" data-sb-validations="required" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message..." data-sb-validations="required"></textarea>
                                  
                    </div>
                    {{-- <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        Envoyer le message
                    </button> --}}

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" > <i class="fas fa-paper-plane"></i>Envoyer</button>
                    </div>                    
                </form>
            </div>
        </div>
    </section>
    <!-- Script JavaScript -->
    <script src={{ asset('assets/js/script2.js') }}></script>    

    <!-- Inclure le footer (un partial) -->
    <!-- Footer -->
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Sylla Youssouf. Tous droits réservés.</p>
             <p>Développé à Abidjan</p>
        </div> 
        
    </footer>

    <!-- Vos scripts JS globaux -->
    <script src="{{ asset('../assets/js/script1.js') }}"></script>
    </body>
</html>