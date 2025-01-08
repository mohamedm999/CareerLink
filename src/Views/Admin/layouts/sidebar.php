<aside class="fixed top-0 left-0 h-screen w-64 bg-slate-900 text-white p-6">
        <div class="flex items-center space-x-3 mb-10">
            <div class="w-12 h-12 bg-gradient-to-br from-violet-600 to-fuchsia-600 rounded-2xl flex items-center justify-center transform rotate-3">
                <i class="fas fa-briefcase text-2xl"></i>
            </div>
            <span class="text-xl font-bold">CareerLink</span>
        </div>

        <nav class="space-y-2">
            <a href="/CAREERLINK/src/Views/Admin/home/dashboard.php"  class="homeButton flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200" onclick="toggleSection('sectionHome')">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-chart-line"></i>
                </div>
                <span>Tableau de bord</span>
            </a>
            <a href="/CAREERLINK/src/Views/Admin/Categorie/index.php"  class="categoriesButton flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200" onclick="toggleSection('sectionCategories')">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-tags"></i>
                </div>
                <span>Catégories</span>
            </a>
            <a href="/CAREERLINK/src/Views/Admin/tags/index.php"  class="tagsButton flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200" onclick="toggleSection('sectionTags')">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-tags"></i>
                </div>
                <span>Tags</span>
            </a>
            <a href="#" class="usersButton flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200" onclick="toggleSection('sectionUsers')">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-users"></i>
                </div>
                <span>Utilisateurs</span>
            </a>
            <a href="#" class="companiesButton flex items-center space-x-3 hover:bg-white/5 p-3 rounded-xl transition-all duration-200" onclick="toggleSection('sectionCompanies')">
                <div class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center">
                    <i class="fas fa-building"></i>
                </div>
                <span>Entreprises</span>
            </a>
        </nav>
</aside>