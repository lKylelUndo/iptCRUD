@extends('layouts.app')

@section('content')
    <section>
        <div class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-xl mx-auto">
                <!-- Form Card -->
                <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                    <div class="bg-indigo-600 px-8 py-6">
                        <h1 class="text-2xl font-bold text-white flex items-center gap-3">
                            
                            New Category
                        </h1>
                        <p class="text-indigo-100 mt-1 text-sm">Define a new grouping for your inventory items.</p>
                    </div>

                    <form action="#" method="POST" class="p-8 space-y-6">
                        @csrf

                        <!-- Category Name -->
                        <div>
                            <label for="category_name" class="block text-sm font-semibold text-gray-700 mb-2">Category
                                Name</label>
                            <div class="">
                               
                                <input type="text" name="category_name" id="category_name"
                                    class="block w-full pl-5 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all sm:text-sm"
                                    placeholder="e.g. Electronics, Home Decor..." required>
                            </div>
                        </div>


                        <!-- Form Actions -->
                        <div class="pt-6 border-t border-gray-100 flex items-center justify-end gap-4">

                            <button type="submit"
                                class="px-6 py-2.5 rounded-lg text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                                Add Category
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </section>
@endsection
