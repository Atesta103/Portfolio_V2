<!-- navbar.blade.php -->
<nav x-data="{ open: false }" class="bg-background text-text border-b border-gray-700 fixed w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="{{ url('/') }}#" class="text-xl font-bold text-text cursor-pointer">
                    Alexandre TESTA
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 sm:flex items-center">
                <a href="{{ url('/') }}#realisations" class="nav-link hover:text-accent hover:border-b-4 hover:border-accent cursor-pointer">Mes projets</a>
                <a href="{{ url('/') }}#about" class="nav-link hover:text-accent hover:border-b-4 hover:border-accent cursor-pointer">À propos</a>
                <a href="{{ url('/') }}#contact" class="nav-link hover:text-accent hover:border-b-4 hover:border-accent cursor-pointer">Contact</a>
            </div>

            <!-- Toggle du portfolio pour écran large -->
            <div class="hidden sm:flex items-center space-x-2">
                <span x-bind:class="!$store.portfolio.isPro ? 'text-accent font-semibold' : 'text-gray-400'" class="text-sm">Académique</span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input
                        type="checkbox"
                        x-model="$store.portfolio.isPro"
                        x-init="$store.portfolio.isPro = localStorage.getItem('isPro') === 'true'"
                        x-on:change="localStorage.setItem('isPro', $store.portfolio.isPro)"
                        class="sr-only peer">
                    <span class="w-14 h-8 bg-backgroundGray rounded-full duration-300"></span>
                    <span class="absolute left-1 top-1 w-6 h-6 bg-accent rounded-full peer-checked:translate-x-6 transition-transform duration-300"></span>
                </label>
                <span x-bind:class="$store.portfolio.isPro ? 'text-accent font-semibold' : 'text-gray-400'" class="text-sm">Professionnel</span>
            </div>

            <!-- Hamburger Menu -->
            <div class="flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-accent hover:bg-gray-800 focus:outline-none focus:bg-gray-800 focus:text-accent transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1 px-4">
            <a href="{{ url('/') }}#realisations" @click="open = false" class="block py-2 hover:text-accent">Mes projets</a>
            <a href="{{ url('/') }}#about" @click="open = false" class="block py-2 hover:text-accent">À propos</a>
            <a href="{{ url('/') }}#contact" @click="open = false" class="block py-2 hover:text-accent">Contact</a>

            <!-- Toggle du portfolio pour mobile -->
            <div class="py-4 flex items-center justify-center space-x-3">
                <span x-bind:class="!$store.portfolio.isPro ? 'text-accent font-semibold' : 'text-gray-400'" class="text-sm">Académique</span>
                <label class="relative inline-flex items-center cursor-pointer">
                    <input
                        type="checkbox"
                        x-model="$store.portfolio.isPro"
                        x-on:change="localStorage.setItem('isPro', $store.portfolio.isPro)"
                        class="sr-only peer">
                    <span class="w-14 h-8 bg-backgroundGray rounded-full duration-300"></span>
                    <span class="absolute left-1 top-1 w-6 h-6 bg-accent rounded-full peer-checked:translate-x-6 transition-transform duration-300"></span>
                </label>
                <span x-bind:class="$store.portfolio.isPro ? 'text-accent font-semibold' : 'text-gray-400'" class="text-sm">Professionnel</span>
            </div>
        </div>
    </div>
</nav>