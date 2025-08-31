<?php

namespace App\View\Base;

class FormBuilder
{
    protected array $fields = [];

    public function text(string $name, string $label, $value = ''): self
    {
        $this->fields[] = view('components.form.text', compact('name', 'label', 'value'))->render();
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
