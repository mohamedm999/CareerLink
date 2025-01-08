<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Votre portail d'emploi</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        .animate-rotate {
            animation: rotate 5s linear infinite;
        }

        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .hover-rotate:hover {
            transform: rotate(5deg);
            transition: transform 0.3s ease;
        }

        .hover-glow:hover {
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.5);
            transition: box-shadow 0.3s ease;
        }

        .hover-text-glow:hover {
            text-shadow: 0 0 10px rgba(124, 58, 237, 0.8);
            transition: text-shadow 0.3s ease;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 backdrop-blur-lg bg-white/80 border-b border-slate-200">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="flex items-center space-x-3 hover-scale">
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-fuchsia-600 rounded-2xl flex items-center justify-center transform rotate-3 hover-rotate">
                        <i class="fas fa-briefcase text-2xl text-white"></i>
                    </div>
                    <span class="text-2xl font-bold text-slate-800 hover-text-glow">CareerLink</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Accueil</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Offres</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Entreprises</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Blog</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <a href="../auth/register.php" class="text-violet-600 hover:text-violet-700 font-medium hover-text-glow">S'inscrire</a>
                        <a href="../auth/login.php" class="bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white px-6 py-3 rounded-xl hover:opacity-90 transition-all duration-200 shadow-lg hover:shadow-violet-200 hover-glow">
                            Connexion
                        </a>
                    </div>
                </div>
                <!-- Mobile Menu Button -->
                <button class="md:hidden text-slate-600 hover:text-violet-600 transition-colors duration-200">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-32 pb-20 bg-slate-900 relative overflow-hidden animate-fadeIn">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-violet-500/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-fuchsia-500/30 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-500/20 rounded-full blur-3xl animate-pulse delay-500"></div>
        </div>
        
        <div class="container mx-auto px-4 relative">
            <div class="flex flex-wrap items-center">
                <div class="w-full lg:w-1/2 mb-12 lg:mb-0">
                    <div class="relative">
                        <div class="inline-flex items-center space-x-2 px-4 py-2 bg-violet-500/20 text-violet-300 rounded-2xl text-sm mb-6 animate-pulse">
                            <i class="fas fa-fire text-fuchsia-400"></i>
                            <span>Plus de 5000+ emplois disponibles</span>
                        </div>
                        <h1 class="text-4xl md:text-7xl font-bold mb-6 text-white leading-tight">
                            Construisez votre
                            <span class="relative">
                                <span class="absolute -inset-1 bg-gradient-to-r from-violet-600 to-fuchsia-600 rounded-lg blur-lg opacity-50"></span>
                                <span class="relative text-transparent bg-clip-text bg-gradient-to-r from-violet-400 to-fuchsia-400">
                                    futur
                                </span>
                            </span>
                            professionnel
                        </h1>
                        <p class="text-lg text-slate-300 mb-8 leading-relaxed max-w-xl">
                            Trouvez l'emploi qui correspond à vos aspirations parmi des milliers d'opportunités soigneusement sélectionnées.
                        </p>
                        
                        <!-- Stats with Hover Effects -->
                        <div class="flex flex-wrap gap-6">
                            <div class="group hover-scale">
                                <div class="flex items-center space-x-3 bg-white/5 backdrop-blur-lg rounded-2xl p-4 transition-all duration-200 hover:bg-white/10">
                                    <div class="w-12 h-12 bg-violet-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                        <i class="fas fa-building text-violet-400"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white group-hover:text-violet-400 transition-colors duration-200">2000+</div>
                                        <div class="text-sm text-slate-400">Entreprises</div>
                                    </div>
                                </div>
                            </div>
                            <div class="group hover-scale">
                                <div class="flex items-center space-x-3 bg-white/5 backdrop-blur-lg rounded-2xl p-4 transition-all duration-200 hover:bg-white/10">
                                    <div class="w-12 h-12 bg-fuchsia-500/20 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                        <i class="fas fa-users text-fuchsia-400"></i>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-white group-hover:text-fuchsia-400 transition-colors duration-200">10K+</div>
                                        <div class="text-sm text-slate-400">Candidats</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Search Form -->
                <div class="w-full lg:w-1/2">
                    <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-8 shadow-2xl relative overflow-hidden group hover-glow">
                        <!-- Background Gradient Animation -->
                        <div class="absolute inset-0 bg-gradient-to-br from-violet-600/20 to-fuchsia-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        
                        <div class="relative">
                            <h3 class="text-2xl font-semibold text-white mb-8">Trouvez votre emploi idéal</h3>
                            <form class="space-y-6">
                                <!-- Search Input with Icon -->
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-search text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        placeholder="Titre du poste ou entreprise" 
                                        class="w-full pl-12 pr-4 py-4 bg-white/10 border border-slate-600 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200"
                                    >
                                </div>

                                <!-- Two Column Layout -->
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <!-- Category Select -->
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-briefcase text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                        </div>
                                        <select class="w-full pl-12 pr-10 py-4 bg-white/10 border border-slate-600 rounded-xl appearance-none focus:outline-none focus:border-violet-400 text-slate-400 transition-all duration-200">
                                            <option value="">Catégorie</option>
                                            <option>Développement</option>
                                            <option>Design</option>
                                            <option>Marketing</option>
                                            <option>Finance</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none">
                                            <i class="fas fa-chevron-down text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                        </div>
                                    </div>

                                    <!-- Location Input -->
                                    <div class="relative group">
                                        <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                            <i class="fas fa-map-marker-alt text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                        </div>
                                        <input 
                                            type="text" 
                                            placeholder="Localisation" 
                                            class="w-full pl-12 pr-4 py-4 bg-white/10 border border-slate-600 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200"
                                        >
                                    </div>
                                </div>

                                <!-- Advanced Filters -->
                                <div class="flex flex-wrap gap-4 pt-2">
                                    <label class="flex items-center space-x-2 text-slate-300 cursor-pointer group">
                                        <input type="checkbox" class="w-4 h-4 rounded border-slate-600 text-violet-600 focus:ring-violet-500">
                                        <span class="group-hover:text-white transition-colors duration-200">Temps plein</span>
                                    </label>
                                    <label class="flex items-center space-x-2 text-slate-300 cursor-pointer group">
                                        <input type="checkbox" class="w-4 h-4 rounded border-slate-600 text-violet-600 focus:ring-violet-500">
                                        <span class="group-hover:text-white transition-colors duration-200">Remote</span>
                                    </label>
                                    <label class="flex items-center space-x-2 text-slate-300 cursor-pointer group">
                                        <input type="checkbox" class="w-4 h-4 rounded border-slate-600 text-violet-600 focus:ring-violet-500">
                                        <span class="group-hover:text-white transition-colors duration-200">Stage</span>
                                    </label>
                                </div>

                                <!-- Search Button -->
                                <button class="w-full bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white py-4 rounded-xl hover:opacity-90 transition-all duration-200 flex items-center justify-center space-x-2 shadow-lg hover:shadow-violet-500/25 hover-glow">
                                    <span class="font-medium">Rechercher un emploi</span>
                                    <i class="fas fa-arrow-right"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted Companies Section -->
    <div class="py-12 bg-white/50 backdrop-blur-lg border-y border-slate-200">
        <div class="container mx-auto px-4">
            <div class="text-center mb-8">
                <p class="text-slate-600">Des entreprises de confiance nous font confiance</p>
            </div>
            <div class="flex justify-center items-center flex-wrap gap-12">
                <img src="/api/placeholder/120/40" alt="Company 1" class="h-8 grayscale hover:grayscale-0 transition-all duration-200 hover-scale">
                <img src="/api/placeholder/120/40" alt="Company 2" class="h-8 grayscale hover:grayscale-0 transition-all duration-200 hover-scale">
                <img src="/api/placeholder/120/40" alt="Company 3" class="h-8 grayscale hover:grayscale-0 transition-all duration-200 hover-scale">
                <img src="/api/placeholder/120/40" alt="Company 4" class="h-8 grayscale hover:grayscale-0 transition-all duration-200 hover-scale">
                <img src="/api/placeholder/120/40" alt="Company 5" class="h-8 grayscale hover:grayscale-0 transition-all duration-200 hover-scale">
            </div>
        </div>
    </div>

    <!-- Categories Section -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-violet-100 text-violet-600 rounded-full text-sm mb-4 animate-pulse">
                    <i class="fas fa-th-large mr-2"></i>
                    Catégories populaires
                </div>
                <h2 class="text-3xl font-bold mb-4 text-slate-800 text-center">Explorez par domaine d'expertise</h2>
                <p class="text-slate-600 text-center max-w-2xl">Découvrez des opportunités dans votre domaine de prédilection et construisez votre carrière</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Development Category -->
                <div class="group cursor-pointer hover-scale">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-violet-600/5 to-fuchsia-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-code text-2xl text-violet-600"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2 group-hover:text-violet-600 transition-colors duration-200">Développement</h3>
                            <p class="text-slate-600 mb-4">450 offres disponibles</p>
                            <div class="flex items-center text-violet-600 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <span class="text-sm font-medium">Explorer</span>
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Design Category -->
                                <!-- Design Category -->
                <div class="group cursor-pointer hover-scale">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-violet-600/5 to-fuchsia-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-paint-brush text-2xl text-violet-600"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2 group-hover:text-violet-600 transition-colors duration-200">Design</h3>
                            <p class="text-slate-600 mb-4">280 offres disponibles</p>
                            <div class="flex items-center text-violet-600 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <span class="text-sm font-medium">Explorer</span>
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Marketing Category -->
                <div class="group cursor-pointer hover-scale">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-violet-600/5 to-fuchsia-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-bullhorn text-2xl text-violet-600"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2 group-hover:text-violet-600 transition-colors duration-200">Marketing</h3>
                            <p class="text-slate-600 mb-4">320 offres disponibles</p>
                            <div class="flex items-center text-violet-600 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <span class="text-sm font-medium">Explorer</span>
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Finance Category -->
                <div class="group cursor-pointer hover-scale">
                    <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 relative overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-br from-violet-600/5 to-fuchsia-600/5 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        <div class="relative">
                            <div class="w-16 h-16 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 group-hover:rotate-6 transition-transform duration-300">
                                <i class="fas fa-chart-line text-2xl text-violet-600"></i>
                            </div>
                            <h3 class="text-lg font-semibold text-slate-800 mb-2 group-hover:text-violet-600 transition-colors duration-200">Finance</h3>
                            <p class="text-slate-600 mb-4">190 offres disponibles</p>
                            <div class="flex items-center text-violet-600 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                <span class="text-sm font-medium">Explorer</span>
                                <i class="fas fa-arrow-right ml-2 text-sm"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Jobs Section -->
    <section class="py-20 bg-slate-50/50">
        <div class="container mx-auto px-4">
            <div class="flex flex-col items-center mb-16">
                <div class="inline-flex items-center px-4 py-2 bg-violet-100 text-violet-600 rounded-full text-sm mb-4 animate-pulse">
                    <i class="fas fa-star mr-2"></i>
                    Offres en vedette
                </div>
                <h2 class="text-3xl font-bold mb-4 text-slate-800 text-center">Dernières opportunités</h2>
                <p class="text-slate-600 text-center max-w-2xl">Les meilleures offres d'emploi sélectionnées pour vous</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Job Card 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 group hover-scale">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-16 h-16 bg-slate-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <img src="/api/placeholder/50/50" alt="Company Logo" class="w-10 h-10 rounded-lg">
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                    <i class="fas fa-check text-xs text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800 mb-1 group-hover:text-violet-600 transition-colors duration-200">Senior Developer</h3>
                                <p class="text-slate-600 text-sm">TechCorp</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-violet-100 text-violet-600 rounded-lg text-sm font-medium">CDI</span>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-violet-500"></i>
                            </div>
                            <span class="text-sm">Paris, France</span>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-euro-sign text-violet-500"></i>
                            </div>
                            <span class="text-sm">45K-55K € / an</span>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-violet-500"></i>
                            </div>
                            <span class="text-sm">Temps plein</span>
                        </div>
                    </div>

                    <!-- Skills Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">React</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">Node.js</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">TypeScript</span>
                    </div>

                    <div class="pt-6 border-t border-slate-100">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-slate-500">Publié il y a 2 jours</span>
                            <a href="#" class="flex items-center text-violet-600 hover:text-violet-700 font-medium text-sm group">
                                <span>Voir l'offre</span>
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job Card 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 group hover-scale">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-16 h-16 bg-slate-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <img src="/api/placeholder/50/50" alt="Company Logo" class="w-10 h-10 rounded-lg">
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                    <i class="fas fa-check text-xs text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800 mb-1 group-hover:text-violet-600 transition-colors duration-200">UX Designer</h3>
                                <p class="text-slate-600 text-sm">DesignCo</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-fuchsia-100 text-fuchsia-600 rounded-lg text-sm font-medium">CDD</span>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-fuchsia-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-fuchsia-500"></i>
                            </div>
                            <span class="text-sm">Lyon, France</span>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-fuchsia-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-euro-sign text-fuchsia-500"></i>
                            </div>
                            <span class="text-sm">35K-45K € / an</span>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-fuchsia-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-fuchsia-500"></i>
                            </div>
                            <span class="text-sm">Remote</span>
                        </div>
                    </div>

                    <!-- Skills Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">Figma</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">Adobe XD</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">Sketch</span>
                    </div>

                    <div class="pt-6 border-t border-slate-100">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-slate-500">Publié il y a 1 jour</span>
                            <a href="#" class="flex items-center text-fuchsia-600 hover:text-fuchsia-700 font-medium text-sm group">
                                <span>Voir l'offre</span>
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Job Card 3 -->
                <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 group hover-scale">
                    <div class="flex items-start justify-between mb-6">
                        <div class="flex items-center space-x-4">
                            <div class="relative">
                                <div class="w-16 h-16 bg-slate-100 rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-200">
                                    <img src="/api/placeholder/50/50" alt="Company Logo" class="w-10 h-10 rounded-lg">
                                </div>
                                <div class="absolute -bottom-2 -right-2 w-6 h-6 bg-green-500 rounded-full border-2 border-white flex items-center justify-center">
                                    <i class="fas fa-check text-xs text-white"></i>
                                </div>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800 mb-1 group-hover:text-violet-600 transition-colors duration-200">Marketing Manager</h3>
                                <p class="text-slate-600 text-sm">MarketPro</p>
                            </div>
                        </div>
                        <span class="px-3 py-1 bg-violet-100 text-violet-600 rounded-lg text-sm font-medium">CDI</span>
                    </div>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-map-marker-alt text-violet-500"></i>
                            </div>
                            <span class="text-sm">Bordeaux, France</span>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-euro-sign text-violet-500"></i>
                            </div>
                            <span class="text-sm">40K-50K € / an</span>
                        </div>
                        <div class="flex items-center space-x-2 text-slate-600">
                            <div class="w-8 h-8 bg-violet-50 rounded-lg flex items-center justify-center">
                                <i class="fas fa-clock text-violet-500"></i>
                            </div>
                            <span class="text-sm">Hybride</span>
                        </div>
                    </div>

                    <!-- Skills Tags -->
                    <div class="flex flex-wrap gap-2 mb-6">
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">SEO</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">Analytics</span>
                        <span class="px-3 py-1 bg-slate-100 text-slate-600 rounded-lg text-xs">Social Media</span>
                    </div>

                    <div class="pt-6 border-t border-slate-100">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-slate-500">Publié il y a 3 jours</span>
                            <a href="#" class="flex items-center text-violet-600 hover:text-violet-700 font-medium text-sm group">
                                <span>Voir l'offre</span>
                                <i class="fas fa-arrow-right ml-2 transform group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- View All Jobs Button -->
            <div class="text-center mt-12">
                <a href="#" class="inline-flex items-center space-x-2 bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white px-8 py-4 rounded-xl hover:opacity-90 transition-all duration-200 shadow-lg hover:shadow-violet-200 hover-glow">
                    <span class="font-medium">Voir toutes les offres</span>
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-900 text-slate-400 py-20">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-fuchsia-600 rounded-2xl flex items-center justify-center transform rotate-3 hover-rotate">
                            <i class="fas fa-briefcase text-2xl text-white"></i>
                        </div>
                        <span class="text-2xl font-bold text-white hover-text-glow">CareerLink</span>
                    </div>
                    <p class="mb-6">Votre partenaire de confiance pour trouver votre prochain emploi.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200 hover-text-glow">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200 hover-text-glow">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-200 hover-text-glow">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Liens rapides</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">À propos</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Offres d'emploi</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Entreprises</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Blog</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Catégories</h4>
                    <ul class="space-y-4">
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Développement</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Design</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Marketing</a></li>
                        <li><a href="#" class="hover:text-white transition-colors duration-200 hover-text-glow">Finance</a></li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-white font-semibold mb-6">Contact</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-map-marker-alt text-violet-500"></i>
                            <span>123 Rue de Paris, 75000 Paris</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-phone text-violet-500"></i>
                            <span>+33 1 23 45 67 89</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <i class="fas fa-envelope text-violet-500"></i>
                            <span>contact@careerlink.fr</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-slate-800 mt-12 pt-8 text-center">
                <p>&copy; 2025 CareerLink. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>