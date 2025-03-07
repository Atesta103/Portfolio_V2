@extends('layouts.app')

@section('content')
<section class="bg-background flex flex-col justify-center items-center p-4 md:p-8 lg:p-20 mb-0 gap-8 md:gap-12 text-text">
    <div class="flex flex-col justify-center items-center gap-4 md:gap-6 w-full">
        <h2 class="text-2xl md:text-3xl lg:text-4xl font-semibold text-center">{{ $project->title }}</h2>

        <!-- Conteneur flex pour les 3 blocs (technologies, AC, compétences) -->
        <div class="flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12 justify-between items-start w-full">

            <!-- Langages utilisés -->
            <div class="flex flex-col justify-start items-start w-full md:w-1/3">
                @if($project->languages->isNotEmpty())
                <div class="flex flex-col gap-2 w-full">
                    <p class="font-medium">Technologies utilisées:</p>
                    <ul class="flex flex-wrap gap-2 w-full" id="languages-list" data-items='@json($project->languages)'>
                        @foreach ($project->languages->take(2) as $language)
                        <li class="bg-accent px-3 md:px-4 py-1 rounded-xl text-sm md:text-base">{{ $language->name }}</li>
                        @endforeach
                        @foreach ($project->languages->skip(2) as $language)
                        <li class="bg-accent px-3 md:px-4 py-1 rounded-xl hidden text-sm md:text-base">{{ $language->name }}</li>
                        @endforeach
                    </ul>
                </div>
                @if($project->languages->count() > 2)
                <button onclick="toggleList('languages-list', this)" class="bg-primary px-3 md:px-4 py-1 rounded-xl my-2 text-sm">Voir tout</button>
                @endif
                @endif
            </div>

            <!-- Apprentissages Critiques -->
            <div class="flex flex-col justify-start items-start w-full md:w-1/3">
                @if($project->apprentissage_critique->isNotEmpty())
                <div class="flex flex-col gap-2 w-full">
                    <p class="font-medium">Apprentissages Critiques:</p>
                    <ul class="flex flex-wrap gap-2 w-full" id="apprentissage-list" data-items='@json($project->apprentissage_critique)'>
                        @foreach ($project->apprentissage_critique->take(2) as $apprentissage)
                        <li class="bg-accent px-3 md:px-4 py-1 rounded-xl relative group cursor-help text-sm md:text-base">
                            {{ $apprentissage->code }}
                            <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-64 p-2 bg-backgroundGray text-white text-xs md:text-sm rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-10">
                                {{ $apprentissage->name }}
                            </span>
                        </li>
                        @endforeach
                        @foreach ($project->apprentissage_critique->skip(2) as $apprentissage)
                        <li class="bg-accent px-3 md:px-4 py-1 rounded-xl hidden relative group cursor-help text-sm md:text-base">
                            {{ $apprentissage->code }}
                            <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-64 p-2 bg-backgroundGray text-white text-xs md:text-sm rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-10">
                                {{ $apprentissage->name }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @if($project->apprentissage_critique->count() > 2)
                <button onclick="toggleList('apprentissage-list', this)" class="bg-primary px-3 md:px-4 py-1 rounded-xl my-2 text-sm">Voir tout</button>
                @endif
                @endif
            </div>

            <!-- Compétences -->
            <div class="flex flex-col justify-start items-start w-full md:w-1/3">
                @if($project->competences->isNotEmpty())
                <div class="flex flex-col gap-2 w-full">
                    <p class="font-medium">Compétences:</p>
                    <ul class="flex flex-wrap gap-2 w-full" id="competences-list" data-items='@json($project->competences)'>
                        @foreach ($project->competences->take(2) as $competence)
                        <li class="bg-accent px-3 md:px-4 py-1 rounded-xl relative group cursor-help text-sm md:text-base">
                            {{ $competence->name }}
                        </li>
                        @endforeach
                        @foreach ($project->competences->skip(2) as $competence)
                        <li class="bg-accent px-3 md:px-4 py-1 rounded-xl hidden relative group cursor-help text-sm md:text-base">
                            {{ $competence->name }}
                            <span class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-64 p-2 bg-backgroundGray text-white text-xs md:text-sm rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity duration-300 z-10">
                                {{ $competence->name }}
                            </span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                @if($project->competences->count() > 2)
                <button onclick="toggleList('competences-list', this)" class="bg-primary px-3 md:px-4 py-1 rounded-xl my-2 text-sm">Voir tout</button>
                @endif
                @endif
            </div>
        </div>

        <script>
            function toggleList(listId, button) {
                const list = document.getElementById(listId);
                const hiddenItems = list.querySelectorAll('li.hidden');

                if (hiddenItems.length > 0) {
                    // Afficher les éléments cachés
                    hiddenItems.forEach(item => {
                        item.classList.remove('hidden');
                    });
                    button.textContent = 'Voir moins'; // Changer le texte du bouton
                } else {
                    // Masquer les éléments supplémentaires
                    const extraItems = list.querySelectorAll('li:nth-child(n+3)');
                    extraItems.forEach(item => item.classList.add('hidden'));
                    button.textContent = 'Voir tout'; // Réinitialiser le texte du bouton
                }
            }
        </script>
    </div>

    <div class="flex flex-col gap-8 md:gap-12 w-full">
        <!-- Section objectif et mockup -->
        <div class="flex flex-col md:flex-row gap-6 items-start md:items-center">
            <div class="flex flex-col justify-center gap-2 w-full md:w-1/2 order-2 md:order-1">
                <h3 class="text-xl md:text-2xl font-medium">OBJECTIF :</h3>
                <p class="text-base">{!! nl2br(($project->objectif)) !!}</p>
            </div>
            <div class="w-full md:w-1/2 order-1 md:order-2">
                @foreach ($project->media as $media)
                @if (!empty($media->mockup))
                <img src="{{ asset($media->mockup) }}" alt="{{ $project->title }}" class="object-cover rounded-2xl w-full h-auto">
                @endif
                @endforeach
            </div>
        </div>

        <!-- Section image et description -->
        <div class="flex flex-col md:flex-row gap-6">
            <div class="w-full md:w-5/12">
                @foreach ($project->media as $media)
                @if ($media->file_type === 'image')
                <img src="{{ asset($media->file_path) }}" alt="{{ $project->title }}" class="object-cover rounded-2xl w-full h-auto">
                @elseif ($media->file_type === 'video')
                <iframe class="w-full rounded-2xl" height="315" src="{{ $media->file_path }}" frameborder="0" allowfullscreen></iframe>
                @endif
                @endforeach

            </div>
            <div class="flex flex-col justify-center items-start md:items-end text-left gap-2 w-full md:w-7/12">
                <p class="text-base">{!! nl2br(($project->description)) !!}</p>
            </div>
        </div>
    </div>
</section>
@endsection