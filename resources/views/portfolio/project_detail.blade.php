@extends('layouts.portfolio_template')
@section('title', $project->titre)
@section('content')

<!-- Back Link -->
<div class="container mx-auto px-4 py-8">
    <a href="{{ url('/') }}" class="inline-flex items-center gap-2 text-blue-500 hover:text-blue-600 mb-8 transition-all group">
        <i class="fas fa-arrow-left group-hover:-translate-x-1 transition-transform"></i>
        Retour aux projets
    </a>
</div>

<!-- Project Detail Section -->
<div class="container mx-auto px-4 py-8 max-w-3xl">
    <div class="flex gap-10 items-start">
        <!-- Project Icon -->
        <div class="flex-shrink-0">
            <div class="w-28 h-28 bg-gray-800 border-2 border-blue-500 border-opacity-30 rounded-2xl flex items-center justify-center backdrop-blur">
                {{-- @if($project->images)
                    <img src="{{ asset($project->images) }}" alt="{{ $project->titre }}" class="w-16 h-16 object-cover rounded-lg">
                @else
                    <i class="fas fa-tasks text-5xl text-blue-500"></i>
                @endif --}}

                <i class="fas fa-tasks text-5xl text-blue-500"></i>

            </div>
        </div>

        <!-- Project Content -->
        <div class="flex-1">
            <!-- Title -->
            <h1 class="text-4xl font-bold text-white mb-4 leading-tight">
                {{ $project->titre }}
            </h1>
            <div>
                <img src="{{ asset($project->images) }}" alt="{{ $project->titre }}" class="">
            </div>
            <!-- Description -->
            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                {{ $project->description }}
            </p>

            <!-- Skills/Competences -->
            <div class="flex flex-wrap gap-3 mb-8">
                @foreach($project->competence as $competence)
                    <span class="px-4 py-2 bg-blue-500 bg-opacity-15 border border-blue-500 border-opacity-40 text-blue-400 rounded-full text-sm font-medium hover:bg-opacity-25 transition-all cursor-default">
                        {{ $competence->nom_competence }}
                    </span>
                @endforeach
            </div>

            <!-- Additional Information -->
            <div class="border-t border-blue-500 border-opacity-20 pt-6 mb-8">
                <div class="grid grid-cols-1 gap-4 text-sm">
                    @if($project->date_debut)
                    <div class="flex justify-between">
                        <span class="text-gray-400">Période de développement</span>
                        <span class="text-white font-medium">
                            {{ \Carbon\Carbon::parse($project->date_debut)->format('F Y') }} 
                            @if($project->date_fin)
                                - {{ \Carbon\Carbon::parse($project->date_fin)->format('F Y') }}
                            @else
                                - Actuellement
                            @endif
                        </span>
                    </div>
                    @endif

                    @if($project->role)
                    <div class="flex justify-between">
                        <span class="text-gray-400">Rôle</span>
                        <span class="text-white font-medium">{{ $project->role }}</span>
                    </div>
                    @endif

                    @if($project->statut)
                    <div class="flex justify-between">
                        <span class="text-gray-400">Statut</span>
                        <span class="text-white font-medium">
                            @if($project->statut == 'Publié')
                                Publié
                            @elseif($project->statut == 'En cours')
                                En cours
                            @else
                                Terminé
                            @endif
                        </span>
                    </div>
                    @endif
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex gap-3">
                @if($project->lien_demo)
                <a href="{{ $project->lien_demo }}" target="_blank" class="px-6 py-3 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition-all hover:-translate-y-0.5 inline-flex items-center gap-2">
                    <i class="fas fa-link"></i>
                    Voir le projet
                </a>
                @endif

                @if($project->lien_github)
                <a href="{{ $project->lien_github }}" target="_blank" class="px-6 py-3 bg-transparent border border-blue-500 border-opacity-40 text-blue-400 rounded-lg font-medium hover:bg-blue-500 hover:bg-opacity-10 transition-all inline-flex items-center gap-2">
                    <i class="fas fa-code"></i>
                    Code source
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Projects Gallery Below (Optional) -->
@if($relatedProjects ?? false)
<div class="container mx-auto px-4 py-20">
    <h2 class="text-3xl font-bold text-white mb-10">Autres projets</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        @foreach($relatedProjects as $relatedProject)
        <div class="bg-gray-800 rounded-xl p-6 hover:shadow-lg transition-all hover:-translate-y-1">
            <div class="flex items-start gap-4 mb-4">
                <div class="w-16 h-16 bg-gray-700 rounded-lg flex items-center justify-center flex-shrink-0">
                    <i class="fas fa-code text-blue-500 text-2xl"></i>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-white">{{ $relatedProject->titre }}</h3>
                    <p class="text-sm text-gray-400">{{ $relatedProject->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif

<style>
    body {
        background: linear-gradient(135deg, #1a2845 0%, #16213e 100%);
    }

    /* Smooth transitions */
    * {
        transition-property: color, background-color, border-color, box-shadow, transform;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* Ensure proper spacing */
    .container {
        width: 100%;
    }

    /* Icon animations */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-8px); }
    }

    .project-icon-box:hover {
        animation: float 3s ease-in-out infinite;
    }
</style>

@endsection