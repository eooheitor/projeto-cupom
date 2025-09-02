<?php

namespace App\View\Base;

class FormBuilder
{
    protected array $fields = [];
    protected string $title = '';
    protected string $routeForm = '';
    protected string $method = '';

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

    public function setMethod(string $method): self
    {
        $this->method = $method;
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

    public function getMethod(): string
    {
        return $this->method;
    }

    public function text(string $name, string $label, $value = ''): self
    {
        $this->fields[] = view('components.form.text', compact('name', 'label', 'value'))->render();
        return $this;
    }

    public function select(string $name, string $label, array $options = [], $selected = null): self
    {
        $this->fields[] = view('components.form.select', compact('name', 'label', 'options', 'selected'))->render();
        return $this;
    }

    public function checkbox(string $name, string $label, bool $checked = false): self
    {
        $this->fields[] = view('components.form.checkbox', compact('name', 'label', 'checked'))->render();
        return $this;
    }

    public function color(string $name, string $label, $value = '#000000'): self
    {
        $this->fields[] = view('components.form.color', compact('name', 'label', 'value'))->render();
        return $this;
    }

    public function submit(string $label = 'Salvar'): self
    {
        $this->fields[] = view('components.form.submit', compact('label'))->render();
        return $this;
    }

    public function render(): string
    {
        return implode("\n", $this->fields);
    }
}
