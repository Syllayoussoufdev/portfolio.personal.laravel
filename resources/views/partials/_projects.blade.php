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
                    <div class="projet-card">
                        <div class="projet-image">
                            @if($projet->image && file_exists(public_path('storage/' . $projet->image)))
                                {{-- Cas où l'image existe --}}
                                <div class="image-wrapper">
                                    <img src="{{ asset('storage/' . $projet->image) }}" alt="Image du projet" class="project-img">
                                </div>
                            @else
                                {{-- Cas du "Sticker" avec dégradé selon la catégorie --}}
                                <div class="project-icon-sticker">
                                    @php
                                        // On normalise la catégorie pour la comparaison
                                        $category = strtolower($projet->category);
                                    @endphp
                                    {{-- <i class="fas fa-users"></i>
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
                                <small class="text-muted">statut : "{{ $projet->statut }}"</small>
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
                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="project-content">
                        <h3>Système de gestion des recrutements</h3>
                        <p>Plateforme complète pour gérer les candidatures et processus de recrutement.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Laravel</span>
                            <span class="tech-tag">MySQL</span>
                            <span class="tech-tag">Bootstrap</span>
                        </div>
                        <div class="project-buttons">
                            <a href="#" class="btn btn-small">Voir en ligne</a>
                            <a href="https://github.com/Syllayoussoufdev" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <div class="project-content">
                        <h3>Plateforme de formation</h3>
                        <p>Site WordPress personnalisé pour cours en ligne et gestion d'étudiants.</p>
                        <div class="project-tech">
                            <span class="tech-tag">WordPress</span>
                            <span class="tech-tag">PHP</span>
                            <span class="tech-tag">MySQL</span>
                        </div>
                        <div class="project-buttons">
                            <a href="#" class="btn btn-small">Voir en ligne</a>
                            <a href="https://github.com/Syllayoussoufdev" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <div class="project-content">
                        <h3>Application mobile Flutter</h3>
                        <p>Application de démonstration avec interface utilisateur moderne et responsive.</p>
                        <div class="project-tech">
                            <span class="tech-tag">Flutter</span>
                            <span class="tech-tag">Dart</span>
                            <span class="tech-tag">Firebase</span>
                        </div>
                        <div class="project-buttons">
                            <a href="#" class="btn btn-small">Démo</a>
                            <a href="https://github.com/Syllayoussoufdev" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>

                <div class="project-card">
                    <div class="project-image">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="project-content">
                        <h3>Dashboard utilisateur</h3>
                        <p>Interface d'administration responsive avec graphiques et gestion de données.</p>
                        <div class="project-tech">
                            <span class="tech-tag">HTML5</span>
                            <span class="tech-tag">CSS3</span>
                            <span class="tech-tag">JavaScript</span>
                        </div>
                        <div class="project-buttons">
                            <a href="#" class="btn btn-small">Voir en ligne</a>
                            <a href="https://github.com/Syllayoussoufdev" class="btn btn-outline">GitHub</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
