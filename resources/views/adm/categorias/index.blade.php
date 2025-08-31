<x-app-layout>
    <div class="container mx-auto px-4 py-6" x-data="{ currentModal: null }">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Categorias</h1>
            <button @click="currentModal = 'create'"
                class="bg-[#8a1590] text-white px-4 py-2 rounded-md shadow hover:bg-purple-800 transition">
                Nova Categoria
            </button>
        </div>

        {{-- Modal Criar --}}
        <div x-show="currentModal === 'create'" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            @include('adm.categorias.form', ['modalId' => 'create'])
            <button @click="currentModal = null"
                class="absolute top-4 right-4 text-white text-2xl font-bold">&times;</button>
        </div>

        {{-- Renderiza o grid --}}
        {!! $grid->render() !!}
    </div>
</x-app-layout>
