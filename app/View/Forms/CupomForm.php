<?php

namespace App\View\Forms;

use App\View\Base\FormBuilder;

class CupomForm extends FormBuilder
{
    protected string $title;
    protected string $route;
    protected string $method;

    public function __construct($cupom, $categorias)
    {

        $this->setTitle('Novo cupom');
        $this->setRouteForm(route('cupons.store'));
        $this->setMethod('POST');

        if ($cupom) {
            $this->setTitle('Editar Cupom');
            $this->setRouteForm(route('cupons.update', $cupom->id));
            $this->setMethod('PUT');
        }

        $this->build($cupom, $categorias);
    }

    public function build($cupom, $categorias)
    {
        $tags = [
            1 => 'Novo',
            2 => 'Exclusivo',
            3 => 'Imperdível'
        ];

        $this->text('descricao', 'Descrição', $cupom->descricao ?? '');
        $this->select('tag', 'Tag', $tags, $cupom->tag ?? '');
        $this->select(
            'categoria_id',
            'Categoria',
            $categorias ? $categorias->pluck('nome', 'id')->toArray() : [],
            $cupom->categoria_id ?? ''
        );
        $this->text('valor', 'Valor', $cupom->valor ?? '');
        $this->text('codigo', 'Código', $cupom->codigo ?? '');
        $this->submit($cupom ? 'Atualizar' : 'Salvar');

        return $this;
    }
}
