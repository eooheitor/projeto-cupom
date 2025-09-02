<?php

namespace App\View\Grids;

use App\View\Base\GridBuilder;

class CategoriaGrid extends GridBuilder
{
    public function __construct($categorias)
    {
        parent::__construct($categorias);

        $this->setTitle('Categorias');
        $this->setRouteForm('adm.categorias.form');
        $this->setRouteDelete('categorias.destroy');

        $this->column('id', 'ID');
        $this->column('nome', 'Nome');
        $this->column('destaque', 'Destaque', function ($row) {
            return view('components.grid.badge', [
                'value' => $row->destaque,
            ])->render();
        });
        $this->column('cor', 'Cor', fn($row) => $row->cor);
    }
}
