<div class="overflow-x-auto bg-white rounded-lg shadow">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-[#8a1590]">
            <tr>
                @foreach($columns as $col)
                <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                    {{ $col['label'] }}
                </th>
                @endforeach
                <th class="px-6 py-3 text-right text-xs font-medium text-white uppercase tracking-wider">Ações</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @forelse($rows as $row)
            @include('adm.categorias.form', [
            'modalId' => "edit-{$row->id}",
            'categoria' => $row
            ])
            <tr class="hover:bg-gray-50 transition">
                @foreach($columns as $col)
                <td class="px-6 py-4 whitespace-nowrap text-gray-700">
                    {!! $col['callback'] ? $col['callback']($row) : $row->{$col['key']} !!}
                </td>
                @endforeach

                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium space-x-2">
                    <button @click="currentModal = 'edit-{{ $row->id }}'"
                        class="inline-flex items-center px-3 py-1 rounded-md bg-[#8a1590] text-white hover:bg-[#a53dac] transition">
                        <x-heroicon-o-pencil-square class="w-4 h-4 mr-1" />
                    </button>
                    <form action="{{ route('categorias.destroy', $row) }}" method="POST" class="inline-block"
                        onsubmit="return confirm('Tem certeza que deseja excluir?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="inline-flex items-center px-3 py-1 rounded-md bg-red-600 text-white hover:bg-red-700 transition">
                            <x-heroicon-o-trash class="w-4 h-4 mr-1" />
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="{{ count($columns) + 1 }}" class="px-6 py-4 text-center text-gray-500">
                    Nenhuma categoria cadastrada.
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $rows->links() }}
</div>