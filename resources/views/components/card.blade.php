<div class="w-full bg-gradient-to-r from-blue-500 to-blue-700 rounded-lg shadow-xl overflow-hidden">
    <div class="flex items-center p-6">
        <!-- Icon Container -->
        <div class="flex-shrink-0 mr-4 bg-blue-300 p-4 rounded-full">
            <i class="ri-{{ $icon }} text-4xl text-blue-700"></i>
        </div>

        <!-- Content -->
        <div class="ml-4">
            <h2 class="text-xl font-bold text-white">{{ $title }}</h2>
            <p class="text-white font-semibold">{{ $description }}</p>
        </div>
    </div>
</div>
