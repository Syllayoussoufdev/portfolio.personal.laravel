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
