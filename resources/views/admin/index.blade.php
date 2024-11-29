<x-app-layout>
    <div class="flex space-x-4 bg-gray-100 p-4">
        <!-- Tombol Add Event -->
        <a href="{{ route('admin.store.get') }}" class="bg-blue-950 p-2 px-4 rounded-md text-white nav-link {{ request()->routeIs('admin.store.get') ? 'active' : '' }} mx-14">
            Add Event
        </a>

        <!-- Tombol Add News -->
        
    </div>
</x-app-layout>
