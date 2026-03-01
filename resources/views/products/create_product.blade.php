@extends('layouts.app')

@section('content')
    <section class="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-2xl mx-auto">

            <!-- Form Card -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-200 overflow-hidden">
                <div class="bg-indigo-600 px-8 py-6">
                    <h1 class="text-2xl font-bold text-white flex items-center">
                        Create New Product
                    </h1>
                </div>

                <form action="#" method="POST" class="p-8 space-y-6">
                    @csrf

                    <!-- Product Name -->
                    <div>
                        <label for="product_name" class="block text-sm font-semibold text-gray-700 mb-2">Product
                            Name</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-tag text-gray-400"></i>
                            </div>
                            <input type="text" name="product_name" id="product_name"
                                class="block w-full pl-10 pr-3 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all sm:text-sm"
                                placeholder="e.g. Wireless Headphones" required>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Product Price -->
                        <div>
                            <label for="product_price" class="block text-sm font-semibold text-gray-700 mb-2">Price</label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">$</span>
                                </div>
                                <input type="text" name="product_price" id="product_price"
                                    class="block w-full pl-8  py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all sm:text-sm"
                                    placeholder="0.00" required>
                            </div>
                        </div>

                        <!-- Product Quantity -->
                        <div>
                            <label for="product_quantity" class="block text-sm font-semibold text-gray-700 mb-2">Quantity</label>
                            <div class="">
                                <input type="text" name="product_quantity" id="product_quantity"
                                    class="block w-full pl-5 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all sm:text-sm"
                                    placeholder="0" required>
                            </div>
                        </div>
                    </div>

                    <!-- Category Selection -->
                    <div>
                        <label for="category_id" class="block text-sm font-semibold text-gray-700 mb-2">Category</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <i class="fas fa-folder text-gray-400"></i>
                            </div>
                            <select id="category_id" name="category_id"
                                class="block w-full pl-5 pr-10 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition-all sm:text-sm appearance-none">
                                <option value="" disabled selected>Select a category</option>
                                <option value="1">Electronics</option>
                                <option value="2">Fashion</option>
                                <option value="3">Home & Garden</option>
                            </select>
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-400 text-xs"></i>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6 border-t border-gray-100 flex items-center justify-end gap-4">
                       
                        <button type="submit"
                            class="px-6 py-2.5 rounded-lg text-sm font-semibold text-white bg-indigo-600 hover:bg-indigo-700 shadow-md hover:shadow-lg transition-all flex items-center gap-2">
                            Save Product
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </section>
@endsection
