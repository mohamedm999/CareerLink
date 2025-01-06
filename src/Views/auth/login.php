<?php
session_start();

// Get any stored input values and errors
$input = $_SESSION['input'] ?? [];
$errors = $_SESSION['errors'] ?? [];


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 backdrop-blur-lg bg-white/80 border-b border-slate-200">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <a href="#" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-fuchsia-600 rounded-2xl flex items-center justify-center transform rotate-3">
                        <i class="fas fa-briefcase text-2xl text-white"></i>
                    </div>
                    <span class="text-2xl font-bold text-slate-800">CareerLink</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Accueil</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Aide</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <div class="relative group">
                        <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Contact</a>
                        <div class="absolute bottom-0 left-0 w-0 h-0.5 bg-violet-600 group-hover:w-full transition-all duration-200"></div>
                    </div>
                    <a href="#" class="bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white px-6 py-3 rounded-xl hover:opacity-90 transition-all duration-200 shadow-lg hover:shadow-violet-200">
                        S'inscrire
                    </a>
                </div>
                <button class="md:hidden text-slate-600 hover:text-violet-600 transition-colors duration-200">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Login Section with Animated Background -->
    <div class="min-h-screen bg-slate-900 pt-32 pb-20 relative overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-violet-500/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-fuchsia-500/30 rounded-full blur-3xl animate-pulse delay-1000"></div>
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-96 h-96 bg-pink-500/20 rounded-full blur-3xl animate-pulse delay-500"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <div class="max-w-md mx-auto">
                <!-- Login Card -->
                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-8 shadow-2xl relative overflow-hidden group">
                    <!-- Background Gradient Animation -->
                    <div class="absolute inset-0 bg-gradient-to-br from-violet-600/20 to-fuchsia-600/20 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative">
                        <div class="text-center mb-8">
                            <h2 class="text-3xl font-bold mb-2 bg-gradient-to-r from-violet-400 to-fuchsia-400 bg-clip-text text-transparent">Bienvenue</h2>
                            <p class="text-slate-300">Connectez-vous à votre compte</p>
                        </div>

                        <!-- Social Login -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <button class="flex items-center justify-center space-x-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-3 hover:bg-white/20 transition-all duration-200">
                                <i class="fab fa-google text-white"></i>
                                <span class="text-white">Google</span>
                            </button>
                            <button class="flex items-center justify-center space-x-2 bg-white/10 backdrop-blur-md border border-white/20 rounded-xl p-3 hover:bg-white/20 transition-all duration-200">
                                <i class="fab fa-linkedin-in text-white"></i>
                                <span class="text-white">LinkedIn</span>
                            </button>
                        </div>

                        <div class="relative flex items-center justify-center mb-6">
                            <div class="border-t border-white/20 w-full"></div>
                            <span class="bg-transparent px-4 text-sm text-slate-300 absolute">ou</span>
                        </div>

                        <?php if (isset($errors['message'])): ?>
                            <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 backdrop-blur-md">
                                <div class="flex items-center space-x-3">
                                    <div class="flex-shrink-0">
                                        <i class="fas fa-exclamation-circle text-red-400"></i>
                                    </div>
                                    <p class="text-red-200 text-sm">
                                        <?php echo htmlspecialchars($errors['message']); ?>
                                    </p>
                                </div>
                            </div>
                        <?php endif; ?>

                        

                        <!-- Login Form -->
                        <form id="loginForm" action="../../Controllers/LoginController.php" method="POST" class="space-y-6">
                            <div>
                                <label class="block text-slate-300 font-medium mb-2" for="name">Nom</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-user text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                    </div>
                                    <input 
                                        type="text" 
                                        id="name"
                                        name="name" "
                                        class="w-full pl-12 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200" 
                                        placeholder="Votre nom" value="<?php echo htmlspecialchars($input['name'] ?? ''); ?>"
                                    >
                                </div>
                                <?php if (isset($errors['name'])): ?>
                                    <div class="mt-2 p-3 rounded-xl bg-red-500/10 border border-red-500/20 backdrop-blur-md">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-exclamation-circle text-red-400 text-sm"></i>
                                            <p class="text-red-200 text-sm font-medium">
                                                <?php echo htmlspecialchars($errors['name']); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label class="block text-slate-300 font-medium mb-2" for="email">Adresse email</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-envelope text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                    </div>
                                    <input 
                                        type="email" 
                                        id="email"
                                        name="email" 
                                        class="w-full pl-12 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200" 
                                        placeholder="votre@email.com"  value="<?php echo htmlspecialchars($input['email'] ?? ''); ?>"
                                    >
                                </div>
                                <?php if (isset($errors['email'])): ?>
                                    <div class="mt-2 p-3 rounded-xl bg-red-500/10 border border-red-500/20 backdrop-blur-md">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-exclamation-circle text-red-400 text-sm"></i>
                                            <p class="text-red-200 text-sm font-medium">
                                                <?php echo htmlspecialchars($errors['email']); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div>
                                <label class="block text-slate-300 font-medium mb-2" for="password">Mot de passe</label>
                                <div class="relative group">
                                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                        <i class="fas fa-lock text-slate-400 group-focus-within:text-violet-400 transition-colors duration-200"></i>
                                    </div>
                                    <input 
                                        type="password" 
                                        id="password"
                                        name="password" 
                                        class="w-full pl-12 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200" 
                                        placeholder="Votre mot de passe"
                                    >
                                </div>
                                <?php if (isset($errors['password'])): ?>
                                    <div class="mt-2 p-3 rounded-xl bg-red-500/10 border border-red-500/20 backdrop-blur-md">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-exclamation-circle text-red-400 text-sm"></i>
                                            <p class="text-red-200 text-sm font-medium">
                                                <?php echo htmlspecialchars($errors['password']); ?>
                                            </p>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </div>                        

                            <div class="flex items-center justify-between">
                                <label class="flex items-center">
                                    <input type="checkbox" class="w-4 h-4 bg-white/10 border border-white/20 rounded text-violet-600 focus:ring-violet-500">
                                    <span class="ml-2 text-slate-300">Se souvenir de moi</span>
                                </label>
                                <a href="#" class="text-violet-400 hover:text-violet-300 text-sm">Mot de passe oublié?</a>
                            </div>

                            <button type="submit" class="w-full bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white py-4 rounded-xl hover:opacity-90 transition-all duration-200 font-semibold shadow-lg hover:shadow-violet-500/25">
                                Se connecter
                            </button>
                        </form>

                        <!-- Sign Up Link -->
                        <p class="text-center mt-6 text-slate-300">
                            Pas encore de compte? 
                            <a href="#" class="text-violet-400 hover:text-violet-300 font-semibold">Créer un compte</a>
                        </p>
                    </div>
                </div>

                <!-- Help Box -->
                <div class="mt-8 bg-white/10 backdrop-blur-xl rounded-2xl p-6 border border-white/20">
                    <div class="flex items-start space-x-4">
                        <div class="w-12 h-12 bg-white/10 backdrop-blur-md rounded-xl flex items-center justify-center flex-shrink-0 border border-white/20">
                            <i class="fas fa-headset text-violet-400 text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold text-white mb-1">Besoin d'aide?</h3>
                            <p class="text-slate-300 text-sm mb-2">Notre équipe est là pour vous aider</p>
                            <a href="#" class="text-violet-400 hover:text-violet-300 text-sm font-medium group">
                                Contacter le support
                                <i class="fas fa-arrow-right ml-1 transform group-hover:translate-x-1 transition-transform duration-200"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php

    unset($_SESSION['input']);
    unset($_SESSION['errors']);
    ?>
</body>
</html>

