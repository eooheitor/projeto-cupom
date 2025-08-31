@props([
    'modalId',
    'size' => 'max-w-md',
    'form' => $form = new \App\View\Forms\CategoriaForm($categoria ?? null)
])

<x-modal :modalId="$modalId" :title="$form->getTitle()" :size="$size">
    <form action="{{ $form->getRoute() }}" method="POST">
        @csrf
        @if (strtoupper($form->getMethod()) === 'PUT')
            @method('PUT')
        @endif

        {!! $form->render() !!}
    </form>
</x-modal>
