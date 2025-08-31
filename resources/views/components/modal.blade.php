@props([
    'modalId', 
    'size' => '',
    'title' => '', 
])

<div 
    x-show="currentModal === '{{ $modalId }}'"
    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    x-transition
>
    <div 
        @click.away="currentModal = null"
        class="bg-white rounded-lg shadow-lg w-full {{ $size }} p-6 relative"
    >
        {{-- Botão fechar --}}
        <button 
            @click="currentModal = null"
            class="absolute top-3 right-3 text-gray-500 hover:text-gray-700"
        >
            <x-heroicon-o-x-mark class="w-6 h-6" />
        </button>

        {{-- Título --}}
        <h2 class="text-xl font-bold mb-4">{{ $title }}</h2>

        {{-- Conteúdo que vier de dentro do componente --}}
        {{ $slot }}
    </div>
</div>
