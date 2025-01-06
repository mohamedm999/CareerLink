<?php 
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: ../auth/login.php');
        exit;
    }
    $user = $_SESSION['user'];

    if ($user['user_role'] != 'admin') {
        header('Location: ../auth/login.php');
        exit;
    }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CareerLink - Dashboard Administrateur</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-out;
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }

        .hover-scale:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .hover-glow:hover {
            box-shadow: 0 0 20px rgba(124, 58, 237, 0.5);
            transition: box-shadow 0.3s ease;
        }
    </style>
</head>
<body class="bg-slate-50">

<?php if (isset($_SESSION['success'])): ?>
    <div class="bg-green-100 text-green-600 px-4 py-3 border-l-4 border-green-600" role="alert">
        <p class="font-bold">Succès</p>
        <p><?php echo $_SESSION['success']; ?></p>
    </div>
    <?php unset($_SESSION['success']); ?> <!-- Clear the session variable -->
<?php endif; ?>


    <!-- Sidebar -->
    <aside class="fixed top-0 left-0 h-screen w-64 bg-slate-900 text-white p-6">
        <div class="flex items-center space-x-3 mb-10 hover-scale">
            <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-fuchsia-600 rounded-2xl flex items-center justify-center transform rotate-3">
                <i class="fas fa-briefcase text-2xl"></i>
            </div>
            <span class="text-xl font-bold">CareerLink</span>
        </div>

        <nav class="space-y-2">
            <a href="#" class="flex items-center space-x-3 bg-gradient-to-r from-violet-600 to-fuchsia-600 text-white p-3 rounded-xl">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line"></i>
                </div>
                <span>Tableau de bord</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users"></i>
                </div>
                <span>Utilisateurs</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-briefcase"></i>
                </div>
                <span>Offres d'emploi</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-building"></i>
                </div>
                <span>Entreprises</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-tags"></i>
                </div>
                <span>Catégories</span>
            </a>
            <a href="#" class="flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-cog"></i>
                </div>
                <span>Paramètres</span>
            </a>
        </nav>
    </aside>


    <!-- Main Content -->
    <main class="ml-64 p-8 animate-fadeIn">
  

        <!-- Top Bar -->
        <div class="flex justify-between items-center mb-8 px-4 py-4 bg-white shadow-md rounded-lg">
    <div>
        <div class="inline-flex items-center px-4 py-2 bg-violet-100 text-violet-600 rounded-full text-sm mb-2">
            <i class="fas fa-chart-pie mr-2"></i>
            Vue d'ensemble
        </div>
        <h1 class="text-3xl font-bold text-slate-800">Tableau de bord</h1>
    </div>
    
    <div class="flex items-center space-x-8">
        <div class="relative">
            <button class="w-10 h-10 bg-white rounded-xl flex items-center justify-center hover:bg-violet-50 shadow-sm transition duration-200">
                <i class="fas fa-bell text-slate-600"></i>
            </button>
            <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full w-5 h-5 text-xs flex items-center justify-center">
                3
            </span>
        </div>
        
        <div class="flex items-center space-x-3 bg-white px-4 py-2 rounded-xl shadow-md hover:shadow-lg transition-all duration-200">
            <img src="../../../public/images/Admin.jpg" alt="Admin" class="w-10 h-10 rounded-lg">
            <div>
                <p class="font-semibold text-slate-800">Admin</p>
                <p class="text-sm text-slate-500">Super Admin</p>
            </div>
        </div>
        
        <div class="flex items-center space-x-3">
        
            <form  action="../../Controllers/LoginController.php" method="POST" class="flex items-center space-x-3">
            <button class="bg-red-600 text-white font-semibold px-4 py-2 rounded-md shadow hover:bg-red-500 transition duration-200">
                <i class="fas fa-sign-out-alt mr-1"></i> Logout
            </button>
            </form>
        </div>
    </div>
</div>

        <!-- Stats Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 hover-scale">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-slate-500 mb-1">Total Utilisateurs</p>
                        <h3 class="text-3xl font-bold text-slate-800">12,845</h3>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-users text-violet-600 text-xl"></i>
                    </div>
                </div>
                <p class="flex items-center text-green-500 text-sm">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>+12% ce mois</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 hover-scale">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-slate-500 mb-1">Offres Actives</p>
                        <h3 class="text-3xl font-bold text-slate-800">3,426</h3>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-briefcase text-violet-600 text-xl"></i>
                    </div>
                </div>
                <p class="flex items-center text-green-500 text-sm">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>+8% ce mois</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 hover-scale">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-slate-500 mb-1">Entreprises</p>
                        <h3 class="text-3xl font-bold text-slate-800">1,245</h3>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-building text-violet-600 text-xl"></i>
                    </div>
                </div>
                <p class="flex items-center text-green-500 text-sm">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>+5% ce mois</span>
                </p>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100 hover-scale">
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <p class="text-slate-500 mb-1">Candidatures</p>
                        <h3 class="text-3xl font-bold text-slate-800">8,742</h3>
                    </div>
                    <div class="w-12 h-12 bg-gradient-to-br from-violet-100 to-fuchsia-100 rounded-xl flex items-center justify-center">
                        <i class="fas fa-file-alt text-violet-600 text-xl"></i>
                    </div>
                </div>
                <p class="flex items-center text-green-500 text-sm">
                    <i class="fas fa-arrow-up mr-1"></i>
                    <span>+15% ce mois</span>
                </p>
            </div>
        </div>

        <!-- Recent Activity & Latest Jobs Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Recent Activity -->
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold text-slate-800">Activités Récentes</h3>
                    <button class="text-violet-600 hover:text-violet-700 font-medium">Voir tout</button>
                </div>
                <div class="space-y-6">
                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-100 flex items-center justify-center">
                            <i class="fas fa-plus text-blue-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Nouvelle offre d'emploi</p>
                            <p class="text-sm text-slate-500">TechCorp a publié une nouvelle offre</p>
                            <p class="text-xs text-slate-400 mt-1">Il y a 2 heures</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-green-100 flex items-center justify-center">
                            <i class="fas fa-user text-green-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Nouvel utilisateur</p>
                            <p class="text-sm text-slate-500">Jean Dupont s'est inscrit</p>
                            <p class="text-xs text-slate-400 mt-1">Il y a 3 heures</p>
                        </div>
                    </div>

                    <div class="flex items-center space-x-4">
                        <div class="w-12 h-12 rounded-xl bg-yellow-100 flex items-center justify-center">
                            <i class="fas fa-edit text-yellow-500"></i>
                        </div>
                        <div>
                            <p class="font-semibold text-slate-800">Offre modifiée</p>
                            <p class="text-sm text-slate-500">DesignCo a mis à jour son offre</p>
                            <p class="text-xs text-slate-400 mt-1">Il y a 5 heures</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Jobs -->
            <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-xl transition-all duration-300 border border-slate-100">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-xl font-semibold text-slate-800">Dernières Offres d'Emploi</h3>
                    <button class="text-violet-600 hover:text-violet-700 font-medium">Voir tout</button>
                </div>
                <div class="divide-y divide-slate-100">
                    <div class="py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="../../../public/images/developpeur-web-fullstack.jpg" alt="TechCorp" class="w-10 h-10 rounded-lg">
                                <div>
                                    <p class="font-semibold text-slate-800">Développeur Full Stack</p>
                                    <p class="text-sm text-slate-500">TechCorp</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-green-100 text-green-600 rounded-lg text-sm">Active</span>
                                <button class="text-slate-400 hover:text-violet-600"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="../../../public/images/UI_UX.jpg" alt="DesignCo" class="w-10 h-10 rounded-lg">
                                <div>
                                    <p class="font-semibold text-slate-800">Designer UI/UX</p>
                                    <p class="text-sm text-slate-500">DesignCo</p>
                                </div>
                            </div>
                            <div class="flex items center space-x-2">
                                <span class="px-3 py-1 bg-red-100 text-red-600 rounded-lg text-sm">Inactive</span>
                                <button class="text-slate-400 hover:text-violet-600"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>

                    <div class="py-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <img src="/api/placeholder/40/40" alt="BuildCo" class="w-10 h-10 rounded-lg">
                                <div>
                                    <p class="font-semibold text-slate-800">Chef de Projet</p>
                                    <p class="text-sm text-slate-500">BuildCo</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-2">
                                <span class="px-3 py-1 bg-red-100 text-red-600 rounded-lg text-sm">Closed</span>
                                <button class="text-slate-400 hover:text-violet-600"><i class="fas fa-ellipsis-v"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="mt-12 text-center text-slate-500 text-sm">
            <p>&copy; 2025 CareerLink. Tous droits réservés.</p>
        </footer>
    </main>
</body>
</html>