<div class="overflow-x-auto">
    <table class="min-w-full border border-gray-200 rounded-lg">
        <thead class="bg-gray-100">
            <tr>
                @foreach($grid->getColumns() as $label)
                    <th class="px-4 py-2 text-left text-sm font-semibold text-gray-700">
                        {{ $label }}
                    </th>
                @endforeach
                <th class="px-4 py-2"></th> {{-- Coluna de ações --}}
            </tr>
        </thead>
        <tbody>
            @foreach($grid->getRows() as $row)
    @php
        // Se $row for uma Collection, pegamos o primeiro item
        $item = $row instanceof \Illuminate\Support\Collection ? $row->first() : $row;
    @endphp
    <tr class="border-t hover:bg-gray-50">
        @foreach($grid->getColumns() as $key => $label)
            <td class="px-4 py-2 text-sm text-gray-800">
                {{ $item->$key ?? '' }}
            </td>
        @endforeach
        <td class="px-4 py-2">
   
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
</div>
