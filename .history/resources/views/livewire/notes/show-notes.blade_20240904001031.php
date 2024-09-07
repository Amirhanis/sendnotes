<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'title' => 'Show Notes',
        ];
    }
}; ?>

<div>
    {{$title}}
</div>
