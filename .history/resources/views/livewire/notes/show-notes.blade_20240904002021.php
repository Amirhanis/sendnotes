<?php

use Livewire\Volt\Component;

new class extends Component {
    public function with(): array
    {
        return [
            'notes' => Auth::user()
                ->notes()
                ->orderBy('send_date', 'asc')
                ->get(),
        ];
    }
}; ?>

<div>
    <div>
    @foreach ($notes as $note)
        <x-card wire:key="{{ $note->id }}"
        <li>{{$note->title}}</li>
    @endforeach
</div>
</div>
