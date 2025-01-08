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
                    <img src="../../../../public/images/Admin.jpg" alt="Admin" class="w-10 h-10 rounded-lg">
                    <div>
                        <p class="font-semibold text-slate-800">Admin</p>
                        <p class="text-sm text-slate-500">Super Admin</p>
                    </div>
                </div>

                <div class="flex items-center space-x-3">

                    <form action="../../../../src/Controllers/LogoutController.php"  method="POST" class="flex items-center space-x-3">
                        <button class="bg-red-600 text-white font-semibold px-4 py-2 rounded-md shadow hover:bg-red-500 transition duration-200">
                            <i class="fas fa-sign-out-alt mr-1"></i> Logout
                        </button>
                    </form>
                </div>
            </div>
</div>