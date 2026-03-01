 <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
     <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
         <div class="flex justify-between h-16 items-center">

            
             <div class="flex items-center gap-2">
                 <h1 class="text-xl font-extrabold tracking-tight text-gray-900">
                     CRUD
                 </h1>
             </div>

             
             <div class="flex items-center space-x-4">
                 <a href="{{ route("product.index") }}" class="flex items-center gap-2 px-3 py-2 rounded-md text-sm font-medium text-gray-600 hover:text-indigo-600 hover:bg-indigo-50 transition-all duration-200">
                     <i class="fas fa-list-ul text-xs"></i>
                     Show Products
                 </a>

                 <div class="h-6 w-px bg-gray-200 mx-2"></div>

                 <a href="{{ route("product.create") }}" class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 shadow-sm hover:shadow transition-all duration-200">
                     <i class="fas fa-plus-circle"></i>
                     Create Product
                 </a>

                 <a href="{{ route("category.create") }}" class="flex items-center gap-2 px-4 py-2 rounded-lg text-sm font-medium text-indigo-600 border border-indigo-600 hover:bg-indigo-50 transition-all duration-200">
                     <i class="fas fa-folder-plus"></i>
                     Create Category
                 </a>
             </div>

         </div>

     </nav>
 </header>
