@extends('base.app')

@section('content')
<div class="bg-white">
    <!-- Navigation Bar -->
    @include('includes.headerAdmin')

    <div class="flex items-center justify-center min-h-screen bg-gray-100 p-4">
        <!-- Container -->
        <div class="w-full max-w-lg bg-white p-6 rounded-lg shadow-lg mt-5 mb-5">
          <h2 class="text-xl font-semibold text-gray-800 mb-6 text-center">Add Item</h2>
      
          <!-- Form -->
          <form id="addItemForm">
            <!-- Title Input -->
            <div class="mb-4">
              <label for="title" class="block text-sm font-medium text-gray-700 mb-2">Title</label>
              <input
                type="text"
                id="title"
                class="w-full border border-gray-300 rounded-md p-3 text-sm focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Enter title"
                required
              />
            </div>
      
            <!-- Price Input -->
            <div class="mb-4">
              <label for="price" class="block text-sm font-medium text-gray-700 mb-2">Price</label>
              <input
                type="number"
                id="price"
                class="w-full border border-gray-300 rounded-md p-3 text-sm focus:ring-indigo-500 focus:border-indigo-500"
                placeholder="Enter price"
                required
              />
            </div>
      
            <!-- Description Input -->
            <div class="mb-6">
              <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Description</label>
              <textarea
                id="description"
                class="w-full resize-none border border-gray-300 rounded-md p-3 text-sm focus:ring-indigo-500 focus:border-indigo-500"
                rows="4"
                placeholder="Enter description"
                required
              ></textarea>
            </div>
      
            <!-- Add Button -->
            <div class="flex justify-end">
              
              <button id="addButton" class="mt-4 bg-blue-500 text-white py-2 px-4 rounded-[50px] hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Add</button>

              
            </div>
          </form>
        </div>
      </div>
      
      
      

</div>
@endsection