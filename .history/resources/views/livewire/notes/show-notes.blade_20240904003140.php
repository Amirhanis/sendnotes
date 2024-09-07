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
    <div class="space-y-2">
    @foreach ($notes as $note)
        <x-card wire:key="{{ $note->id }}">
        <div class="flex justify-content">
            <a href="#" 
                class="text-xl font-bold hover underline hover text-blue-500">{{$note->title}}</a>
        </x-card>
    @endforeach
</div>
</div>
