<?php

namespace App\View\Forms;

use App\View\Base\FormBuilder;

class CategoriaForm extends FormBuilder
{
    protected string $title;
    protected string $route;
    protected string $method;

    public function __construct($categoria = null)
    {

        $this->setTitle('Nova Categoria');
        $this->setRouteForm(route('categorias.store'));
        $this->setMethod('POST');

        if ($categoria) {
            $this->setTitle('Editar Categoria');
            $this->setRouteForm(route('categorias.update', $categoria->id));
            $this->setMethod('PUT');
        }

        $this->build($categoria);
    }

    public function build($categoria = null)
    {
        $this->text('nome', 'Categoria', $categoria->nome ?? '');
        $this->checkbox('destaque', 'Destaque', $categoria->destaque ?? false);
        $this->color('cor', 'Cor', $categoria->cor ?? '#8a1590');
        $this->submit($categoria ? 'Atualizar' : 'Salvar');

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRoute(): string
    {
        return $this->route;
    }

    public function getMethod(): string
    {
        return $this->method;
    }
}
