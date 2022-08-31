@if (session('failed'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mb-5 rounded relative" role="alert">
        <strong class="font-bold">Woops!</strong>
        <span class="block sm:inline">{{ session('failed') }}
    </div>
@endif

@if (session('success'))
    <div class="bg-green-100 border border-gree-400 text-gree-700 px-4 py-3 mb-5 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="block sm:inline">{{ session('success') }}
    </div>
@endif
