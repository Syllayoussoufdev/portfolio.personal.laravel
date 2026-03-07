<!DOCTYPE html>
<html lang="fr">
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
                    <a class="nav-link" href={{route('admin.Competences.index')}}>Competences</a>
                    <a class="nav-link" href={{ route('admin.diplomes.index') }}>Diplomes / Certifications</a>
                    <a class="nav-link" href='#'>Experiences</a>
                    <a class="nav-link" href={{ route('admin.messages.index') }}>Messages</a>        
                
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

    <!-- Section Accueil (Hero) -->
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
            <h1 id="hero-title" class="hero-title">Sylla Youssouf</h1>
            <p class="hero-subtitle">Développeur Web & Mobile Junior — PHP · Laravel · JavaScript · React</p>
            <p class="hero-description">J'aide les équipes à livrer des applications web robustes : back-end en PHP/Laravel et front moderne (JS/React). Expérience en déploiement, tests et documentation.</p>

            <div class="hero-buttons">
            <!-- lien direct vers ton CV (PDF) -->
            <a class="btn btn-primary" target="_blank" href="https://drive.google.com/file/d/1PcR6cYPK84EICsSl4zzhgcmeJ7sJbkBd/view?usp=drive_link" download aria-label="Télécharger le CV de Sylla Youssouf">
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
    {{-- <section id="accueil" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-image">
                    <!-- Placeholder pour votre photo - remplacez par votre vraie photo -->
                    <div class="profile-photo">
                    <img src="{{ asset('assets/images/profil3.png') }}" alt="Photo de profil" />
                    </div>
                </div>
                <div class="hero-text">
                    <h1 class="hero-title">Sylla Youssouf</h1>
                    <h2 class="hero-subtitle">Développeur Web & Mobile Junior</h2>
                    <p class="hero-description">
                        "Je conçois des applications web modernes et responsives avec des technologies Laravel, React.js et Flutter (Vue et utilisé dans des projets). Etant developeur junior je suis ouvert a l'utilisation d'autre technologies."
                         vous pourez me contacter pour toute opportunité de collaboration ou projet passionnant. , mon <a href="https://slydev-portfolio.firebaseapp.com/" class="btn btn-secondary">portfolio</a>
                    </p>
                    <div class="hero-buttons">
                        <a target="_blank" href="https://drive.google.com/file/d/1QcazYWZxhZDElVoAtrI3aunBUd6ih-Qs/view?usp=sharing" class="btn btn-primary" download aria-label="Télécharger le CV de Sylla Youssouf">
                            <i class="fas fa-download"></i> Télécharger mon CV
                        </a>
                        <a href="#contact" class="btn btn-secondary">
                            <i class="fas fa-envelope"></i> Me contacter
                        </a>
                    </div>
                     <!-- Skills quick badges -->
                    <div class="quick-skills" aria-hidden="false">
                        <span class="skill-badge">Laravel(PHP)</span>
                        <span class="skill-badge">Django (Python)</span>    
                        <span class="skill-badge">BD (MySQL, MongoDB)</span>
                        <span class="skill-badge">Frontend (React Js; Bootstrap)</span>                        
                        <span class="skill-badge">Mobile(Flutter)</span>
                        <span class="skill-badge">No-code (WordPress, Vibe-coding)</span>
                    </div>
      </div>
                </div>
            </div>
        </div>
        <!-- Flèche de scroll -->
        <div class="scroll-indicator">
            <a href="#apropos">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section> --}}

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

                    <h3></h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-date">2025</div>
                            <div class="timeline-content">
                                <h4>Openclasroom</h4>
                                <p>Certificat PHP - Laravel</p><br>
                                <p>Certificat python for begiming</p><br>
                                <h4>Orange Digitale Center</h4>
                                <p>Prompt Engineering Generative AI for Marketing & Advertising</p><br>
                                <p>Web Development in React.js: Development Basics en partenaria avec Coursera</p><br>

                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-date">2024</div>
                            <div class="timeline-content">
                                <h4>Certificat en Marketing digitale</h4>
                                <p>Suite a une formations de 3 jors j'ai obtenue le Certificat, decerne par l'AJNV</p>
                            </div>
                        </div>
                    </div>           
                </div>                    
            </div>
        </div>
    </section>

    <!-- Section Projets -->
    <section id="projets" class="projects">
        @include('partials._projects')
    </section>

    <!-- Section Contact -->
    <section id="contact" class="contact">
        @include('partials._contact_form')
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2025 Sylla Youssouf. Tous droits réservés.</p>
            <p>Développé à Abidjan</p>
            <a href="{{ route('login') }}" class="nav-link">Se connecter</a>
            <a href="{{ route('inscrire') }}" class="nav-link">S'inscrire</a>
             {{-- <div class="social-links">
                <a href="https://github.com/Syllayoussoufdev" class="social-link">
                    <i class="fab fa-github"></i>
                </a>
                <a href="https://www.linkedin.com/in/sylla-youssouf-devweb?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="social-link">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="mailto:youssoufs1209@gmail.com" class="social-link">
                    <i class="fas fa-envelope"></i>
                </a>
                <a href="https://wa.me/2250707123456" class="social-link">
                    <i class="fas fa-whatsapp"></i>
                </a>
                <a href="https://syllayoussouf.com" class="social-link">
                    <i class="fas fa-globe"></i>
                </a>
        </div> --}}
    </footer>

    <!-- Script JavaScript -->
    <script src="{{ asset('../assets/js/script2.js') }}"></script>
</body>
</html>