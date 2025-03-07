@extends('layouts.app')

@section('content')
<div id="fullpage">
    <section id="home" class="section p-4 bg-background text-text flex flex-col md:flex-row justify-center items-center h-screen gap-8 md:gap-12">
        <div class="flex flex-col items-center md:items-end gap-6 w-full md:w-1/2 order-2 md:order-1">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center md:text-right">Alexandre TESTA</h1>
            <h2 class="text-xl md:text-2xl font-semibold text-center md:text-right">Développeur Web</h2>

            <p x-show="$store.portfolio.isPro" class="text-center md:text-end w-full md:w-2/3 text-base md:text-lg">
                Je suis Alexandre Testa, étudiant en 3ᵉ année de BUT MMI, passionné par le <span class="text-accent">développement web</span>. Mon parcours m'a permis de combiner rigueur et créativité dans la <span class="text-accent">création d'applications web et logicielles</span> .
            </p>
            <p x-show="!$store.portfolio.isPro" class="text-center md:text-end w-full md:w-2/3 text-base md:text-lg">
                Je suis Alexandre Testa, étudiant en 3ᵉ année de BUT MMI, passionné par le <span class="text-accent">développement web</span>. Mon parcours m'a permis de combiner rigueur et créativité dans la conception d'applications web et logicielles. Mes projets illustrent mon <span class="text-accent">engagement</span> pour <span class="text-accent">l'innovation</span> et <span class="text-accent">l'excellence technique</span>. Découvrez mon parcours et mes compétences.
            </p>
            <div class="flex flex-col md:flex-row gap-4 md:gap-6">
                <a href="{{ asset('pdf/cv.pdf') }}" target="_blank" class="px-4 md:px-6 py-3 bg-transparent border-2 border-accent text-accent font-semibold rounded-lg hover:shadow-lg hover:scale-105 transition flex items-center justify-center gap-2">
                    Télécharger mon CV
                </a>
                <x-contact-button>Contactez-moi</x-contact-button>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex flex-col justify-center md:items-start items-center order-1 md:order-2 mb-4 md:mb-0">
            <img src="{{ asset('images/PP.jpg') }}" alt="Photo de profil" class="w-1/2 md:w-2/4 h-auto object-cover custom-radius">
        </div>
    </section>

    <section id="realisations" class="section min-h-screen py-12 md:py-0 text-text flex justify-center items-center">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-center md:text-left">Mes projets</h2>

            <!-- Ajout de la pagination pour Swiper -->
            <div class="swiper-pagination mb-6"></div>

            <div class="swiper">
                <div class="swiper-wrapper">
                    @foreach ($projects as $project)
                    <template x-if="($store.portfolio.isPro && '{{ $project->category->name }}' === 'Professionnel') || (!$store.portfolio.isPro && '{{ $project->category->name }}' === 'Académique')">
                        <div class="swiper-slide">
                            <div class="flex flex-col items-center gap-4">
                                <a href="{{ url('/project/' . $project->id) }}" class="flex flex-col items-center group">
                                    @php
                                    $displayed = false;
                                    @endphp
                                    @foreach ($project->media as $media)
                                    @if ($media->file_type === 'image')
                                    <div class="mt-4 relative overflow-hidden rounded-xl transition-all duration-300 transform group-hover:scale-105 shadow-lg group-hover:shadow-accent/50">
                                        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-background/30 group-hover:to-accent/20 transition-all duration-300"></div>
                                        <img src="{{ asset($media->file_path) }}" alt="{{ $project->title }}"
                                            class="w-64 h-64 object-cover transition-all duration-300">
                                        <div class="absolute inset-0 border-2 border-transparent group-hover:border-accent/40 rounded-xl transition-all duration-300"></div>
                                    </div>
                                    @php $displayed = true; @endphp
                                    @endif
                                    @endforeach
                                    <h3 class="text-xl font-semibold mt-4 group-hover:text-accent transition-all duration-300">{{ $project->title }}</h3>
                                </a>
                            </div>
                        </div>
                    </template>
                    @endforeach
                </div>

                <!-- Boutons de navigation -->
                <div class="swiper-button-prev hidden md:flex"></div>
                <div class="swiper-button-next hidden md:flex"></div>
            </div>
        </div>
    </section>

    <section id="about" class="section min-h-screen py-12 md:py-0 text-text flex justify-center items-center">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center gap-8 md:gap-12">
                <!-- Image -->
                <div class="hidden md:flex w-full md:w-1/3 flex-col justify-center items-center md:items-end">
                    <img src="{{ asset('images/Photo_moi.png') }}" alt="Photo de profil" class="w-2/3 md:w-3/4 h-auto object-cover custom-radius-2">
                </div>

                <!-- Contenu texte -->
                <div class="flex flex-col gap-6 w-full md:w-2/3">
                    <h2 class="text-2xl md:text-3xl font-bold mb-2 md:mb-4 text-center md:text-left">À propos</h2>

                    <!-- Résumé -->
                    <p class="text-base md:text-lg text-center md:text-left">
                        Étudiant en 3ᵉ année de BUT MMI, je me spécialise en <span class="text-accent">développement web</span>.
                        J'ai acquis de solides compétences en <span class="text-accent">PHP</span>, <span class="text-accent">Laravel</span>, <span class="text-accent">React</span> et <span class="text-accent">Node.js</span>, ainsi qu'en gestion de bases de données avec <span class="text-accent">MariaDB</span> et <span class="text-accent">MongoDB</span>.
                    </p>

                    <!-- Expériences et Projets -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg md:text-xl font-semibold mb-2 text-center md:text-left">Expériences</h3>
                            <ul class="list-disc list-inside text-base md:text-lg">
                                <li>Développement d'un site avec paiement – <span class="text-accent">Var Éducation Loisirs</span> (2024)</li>
                                <li>Développement front-end – <span class="text-accent">IAS Ingénierie</span> (2023)</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl font-semibold mb-2 text-center md:text-left">Projets</h3>
                            <ul class="list-disc list-inside text-base md:text-lg">
                                <li>Site web de discussion en ligne nommé "VisioConf"</li>
                                <li>Site web pour une médiathèque fictive "TeloCulture"</li>
                                <li>Site événementiel d'une LAN organisé par des étudiants MMI</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Boutons -->
                    <div class="flex flex-col md:flex-row gap-4 md:gap-6">
                        <a href="{{ asset('pdf/cv.pdf') }}" target="_blank" class="px-4 md:px-6 py-3 bg-transparent border-2 border-accent text-accent font-semibold rounded-lg hover:shadow-lg hover:scale-105 transition flex items-center justify-center gap-2">
                            Télécharger mon CV
                        </a>
                        <x-contact-button>Contactez-moi</x-contact-button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="contact" class="section min-h-screen py-12 md:py-0 text-text flex justify-center items-center">
        <div class="container flex flex-col items-center gap-6 md:gap-8 w-full md:w-1/2 px-4">
            <h2 class="text-2xl md:text-3xl font-bold">Contactez-moi</h2>
            <p class="text-center text-base md:text-lg w-full md:w-3/4">
                Une question, un projet ou une opportunité ? N'hésitez pas à me contacter via ce formulaire ou par téléphone au <span class="text-accent">06 61 06 64 04</span>.
                Vous pouvez aussi me contacter via <a href="https://www.linkedin.com/in/alexandre-testa/" class="text-accent underline">LinKedIn</a>.
            </p>
            <form action="{{ route('contact.send') }}" method="POST" class="w-full flex flex-col gap-4 md:gap-6">
                @csrf

                <div class="flex flex-col md:flex-row gap-4 md:gap-6 justify-center items-center">
                    <div class="flex flex-col gap-2 w-full">
                        <label for="name" class="font-semibold">Nom</label>
                        <input type="text" id="name" name="name" required
                            class="p-3 bg-backgroundGray text-white rounded-lg border border-gray-700 focus:ring-2 focus:ring-primary"
                            placeholder="Votre nom">
                    </div>

                    <div class="flex flex-col gap-2 w-full">
                        <label for="email" class="font-semibold">Email</label>
                        <input type="email" id="email" name="email" required
                            class="p-3 bg-backgroundGray text-white rounded-lg border border-gray-700 focus:ring-2 focus:ring-primary"
                            placeholder="Votre adresse email">
                    </div>
                </div>

                <div class="flex flex-col gap-2">
                    <label for="message" class="font-semibold">Message</label>
                    <textarea id="message" name="message" rows="4" required
                        class="p-3 bg-backgroundGray text-white rounded-lg border border-gray-700 focus:ring-2 focus:ring-primary"
                        placeholder="Votre message"></textarea>
                </div>

                <button type="submit" class="px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:bg-opacity-80 transition">
                    Envoyer
                </button>
            </form>
        </div>
    </section>

</div>
@endsection