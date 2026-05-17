@extends('layouts.portfolio_template')
@section('title', 'Diplomes / Certifications')
    @section('content')
      <main class="flex-shrink-0">
            
                {{-- <!-- Diplomes Section-->"> --}}
            <section class="container py-5">
                <div class="diplomes_liste">
            <div class="mb-4">
                <h2 class="section-title">Diplômes / Certifications</h2>
                <p class="text-center">Liste de tous les diplômes et certifications obtenus.</p>
            </div>

            <div class="d-flex justify-content-end mb-3">
                @auth
                    <a href="{{ route('admin.diplomes.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Créer un diplôme/certification
                    </a>
                @endauth
            </div>

            <div class="table-responsive">
                <table class="custom-table">
                    <thead>
                        <tr>
                            <th>Titre</th>
                            <th>Année</th>
                            <th>Centre formateur</th>
                            <th>Compétences</th>
                            @auth <th>Actions</th> @endauth
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($diplomes as $diplome)
                        <tr>
                            <td class="fw-bold">{{ $diplome->Titre }}</td>
                            <td><span class="badge-year">{{ $diplome->Annee_obtention }}</span></td>
                            <td>{{ $diplome->Centre_formateur }}</td>
                            <td>
                                @forelse ($diplome->competence as $competence)
                                    <span class="tech-tag">{{ $competence->nom }}</span>
                                @empty
                                    <span class="text-muted small">Aucune compétence</span>
                                @endforelse
                            </td>
                            @auth
                            <td>
                                <div class="d-flex gap-2">
                                    <a href="{{ route('admin.diplomes.edit', $diplome->id) }}" class="btn btn-outline btn-sm">Edit</a>
                                    <form action="{{ route('admin.diplomes.destroy', $diplome->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Supprimer ?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                            @endauth
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
            
            </section>
                

            {{--    <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Diplomes / Certifications</span></h1>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-11 col-xl-9 col-xxl-8">
                            @auth
                                <a href="{{ route('admin.diplomes.create') }}" class="btn btn-primary">creer</a>                           
                            @endauth
                                <!-- Diploma Card 1-->
                            @foreach ($diplomes as $diplome)
                            <div class="card mb-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $diplome->Titre }}</h5>
                                    <p class="card-text">{{ $diplome->Annee_obtention }}</p>
                                    <p>{{ $diplome->Centre_formateur }}</p>
                                    <p>
                                        Compétences associées :
                                        @forelse ($diplome->competence as $competence) 
                                        <span class="badge bg-secondary">{{ $competence->nom }}</span>
                                        @empty
                                            <span class="text-danger">Aucune compétence associée.</span>
                                        @endforelse
                                    </p>                                    
                                    <br>
                                    @auth
                                        <a href="{{ route('admin.diplomes.edit', $diplome->id) }}" class="btn btn-primary">Edit</a>
                                        <form action="{{ route('admin.diplomes.destroy', $diplome->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    @endauth
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section> --}}
        </main>
    @endsection