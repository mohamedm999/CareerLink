<?php
session_start();


$input = $_SESSION['input'] ?? [];
$errors = $_SESSION['errors'] ?? [];


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Inscription</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-slate-50 font-sans">
    <!-- Navbar -->
    <nav class="fixed w-full z-50 backdrop-blur-lg bg-white/80 border-b border-slate-200">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-20">
                <a href="../../../src/Views/home/index.php" class="flex items-center space-x-3">
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-fuchsia-600 rounded-2xl flex items-center justify-center transform rotate-3">
                        <i class="fas fa-briefcase text-2xl text-white"></i>
                    </div>
                    <span class="text-2xl font-bold text-slate-800">CareerLink</span>
                </a>
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Accueil</a>
                    <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Aide</a>
                    <a href="#" class="text-slate-600 hover:text-violet-600 transition-colors duration-200">Contact</a>
                </div>
                <button class="md:hidden text-slate-600 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Register Section -->
    <div class="min-h-screen bg-slate-900 pt-32 pb-20 relative overflow-hidden">
        <!-- Background Elements -->
        <div class="absolute inset-0">
            <div class="absolute top-0 right-0 w-96 h-96 bg-violet-500/30 rounded-full blur-3xl animate-pulse"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-fuchsia-500/30 rounded-full blur-3xl animate-pulse delay-1000"></div>
        </div>

        <div class="container mx-auto px-4 relative">
            <div class="max-w-md mx-auto">
                <!-- Register Card -->
                <div class="bg-white/10 backdrop-blur-xl rounded-2xl p-8 shadow-2xl relative">
                    <div class="text-center mb-8">
                        <h2 class="text-3xl font-bold mb-2 bg-gradient-to-r from-violet-400 to-fuchsia-400 bg-clip-text text-transparent">Créer un Compte</h2>
                        <p class="text-slate-300">Rejoignez CareerLink dès aujourd'hui</p>
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
                    <form action="../../Controllers/RegisterController.php" method="POST" class="space-y-6">
                        <div>
                            <label for="nom" class="block text-slate-300 font-medium mb-2">Nom</label>
                            <input type="text" id="nom" name="nom" class="w-full pl-4 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200" placeholder="Votre nom" 
                            value="<?php echo $input['name'] ?? ''; ?>">
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
                        <div>
                            <label for="email" class="block text-slate-300 font-medium mb-2">Email</label>
                            <input type="email" id="email" name="email" class="w-full pl-4 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200" placeholder="Votre email" 
                            value="<?php echo $input['email'] ?? ''; ?>">
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
                        <div>
                            <label for="mot_de_passe" class="block text-slate-300 font-medium mb-2">Mot de passe</label>
                            <input type="password" id="mot_de_passe" name="mot_de_passe" class="w-full pl-4 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 placeholder-slate-400 text-white transition-all duration-200" placeholder="Votre mot de passe" 
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
                        <div>
                            <label for="role" class="block text-slate-300 font-medium mb-2">Rôle</label>
                            <select id="role" name="role" class="w-full pl-4 pr-4 py-4 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:border-violet-400 text-white transition-all duration-200" 
                            value="<?php echo $input['role'] ?? ''; ?>">
                                <option class="text-black" value="candidate">Candidat</option>
                                <option  class="text-black" value="recruiter">Recruteur</option>
                            </select>
                        </div>
                        <?php if (isset($errors['role'])): ?>
                                    <div class="mt-2 p-3 rounded-xl bg-red-500/10 border border-red-500/20 backdrop-blur-md">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-exclamation-circle text-red-400 text-sm"></i>
                                            <p class="text-red-200 text-sm font-medium">
                                                <?php echo htmlspecialchars($errors['role']); ?>
                                            </p>
                                        </div>
                                    </div>
                        <?php endif; ?>

                        <button type="submit" class="w-full bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white py-4 rounded-xl hover:opacity-90 transition-all duration-200 font-semibold shadow-lg hover:shadow-violet-500/25">S'inscrire</button>
                    </form>
                    <p class="text-center mt-6 text-slate-300">
                        Vous avez déjà un compte? 
                        <a href="../../../src/Views/auth/login.php" class="text-violet-400 hover:text-violet-300 font-semibold">Se connecter</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-slate-900 py-6 border-t border-slate-700 text-center text-slate-400">
        <div class="container mx-auto px-4">
            <p>&copy; 2025 CareerLink. Tous droits réservés.</p>
        </div>
    </footer>
    <?php
    unset($_SESSION['errors']);
    unset($_SESSION['input']);
    ?>
</body>
</html>
