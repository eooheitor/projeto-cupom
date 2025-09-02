<?php

namespace App\View\Base;

class GridBuilder
{
    protected string $title = '';
    protected string $routeForm = '';
    protected string $delete = '';
    protected array $columns = [];
    protected $rows;

    public function __construct($rows)
    {
        $this->rows = $rows;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function setRouteForm(string $routeForm): self
    {
        $this->routeForm = $routeForm;
        return $this;
    }

    public function setRouteDelete(string $delete): self
    {
        $this->delete = $delete;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getRouteForm(): string
    {
        return $this->routeForm;
    }

    public function getRouteDelete(): string
    {
        return $this->delete;
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

    public function render(array $extra = [])
    {
        return view('components.grid.grid', array_merge([
            'grid'    => $this,
            'columns' => $this->columns,
            'rows'    => $this->rows,
        ], $extra))->render();
    }
}
