<?php

namespace App\View\Base;

class GridBuilder
{
    protected array $columns = [];
    protected $rows;

    public function __construct($rows)
    {
        $this->rows = $rows;
    }

    public function column(string $key, string $label, $callback = null): self
    {
        $this->columns[] = compact('key', 'label', 'callback');
        return $this;
    }

    public function getColumns()
    {
        return $this->columns;
    }

    public function getRows()
    {
        return $this->rows;
    }

    public function render()
    {
        return view('components.grid.table', [
            'columns' => $this->columns,
            'rows'    => $this->rows,
        ])->render();
    }
}
