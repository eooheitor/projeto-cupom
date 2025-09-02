<?php

namespace App\View\Grids;

use App\View\Base\GridBuilder;

class CupomGrid extends GridBuilder
{
    public function __construct($cupons, $categorias)
    {
        parent::__construct($cupons, $categorias);
        $this->setTitle('Cupons');
        $this->setRouteForm('adm.cupons.form');
        $this->setRouteDelete('cupons.destroy');

        $this->column('id', 'ID');
        $this->column('descricao', 'Descrição');
        $this->column('tag', 'Tag', function ($row) {
            return view('components.grid.badge', [
                'value' => $row->tag,
            ])->render();
        });
        $this->column('valor', 'Valor');
        $this->column('codigo', 'Código');
    }
}
