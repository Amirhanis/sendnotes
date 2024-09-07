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
        <x-card wire:key="{{ $note->id }}">
        <div class="flex justify-between">
            <a href="#" 
                class="text-xl font-bold hover underline hover text-blue-500">{{$note->title}}</a>
        </x-card>
    @endforeach
</div>
</div>
