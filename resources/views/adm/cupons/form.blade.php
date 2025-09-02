@props([
    'modalId',
    'size' => 'max-w-2xl',
    'form' => $form = new \App\View\Forms\CupomForm($cupom ?? null, $categorias ?? null)
])

<x-modal :modalId="$modalId" :title="$form->getTitle()" :size="$size">
    <form action="{{ $form->getRouteForm() }}" method="POST">

        @csrf
        @if (strtoupper($form->getMethod()) === 'PUT')
            @method('PUT')
        @endif

        {!! $form->render() !!}
    </form>
</x-modal>
