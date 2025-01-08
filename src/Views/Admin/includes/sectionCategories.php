<div class="max-w-4xl mx-auto bg-white shadow-lg rounded-lg p-6">
        <h1 class="text-2xl font-bold text-gray-800 mb-6">Gestion des Catégories</h1>

        <!-- Add Category -->
        <form method="POST" class="mb-6">
            <div class="flex items-center space-x-4">
                <input 
                    type="text" 
                    name="nom" 
                    placeholder="Nom de la catégorie" 
                    required 
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button 
                    type="submit" 
                    name="add" 
                    class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
                    Ajouter
                </button>
            </div>
        </form>

        <!-- List Categories -->
        <table class="w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-200 text-gray-700">
                    <th class="border border-gray-300 px-4 py-2">#</th>
                    <th class="border border-gray-300 px-4 py-2">Nom</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>