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
        @if($notes->isEmpty())
        <div class="text-center">
            <p class="text-xl font-bold">No notes yet</p>
            <p class="text-sm">Click the button below to add first note</p>
            <x-button primary icon-right="plus" class="mt-6" href="{{route('notes.create')}}" wire:navigate>Create note</x-button>
        </div>
        
        @else
        <x-button primary icon-right="plus" class="mt-6" href="{{route('notes.create')}}" wire:navigate>Create note</x-button>
        <div class="grid grid-cols-2 gap-4 mt-12">
            @foreach ($notes as $note)
                <x-card wire:key="{{ $note->id }}">
                <div class="flex justify-between">
                    <a href="#" 
                        class="text-xl font-bold hover underline hover text-blue-500">{{$note->title}}</a>
                    <div class="text-xs text-gray-100">{{ \Carbon\Carbon::parse($note->send_date)->format('M-d-Y')}}</div>
                </div>
                <div class="flex items-end justify-between mt-4 space-x-1">
                        <p class="text-xs">Recipient: <span class="font-semibold">{{ $note->recipient }}</span></p>
                        <div>
                            <x-button.circle icon="eye"></x-button.circle>
                            <x-button.circle icon="trash"></x-button.circle>
                        </div>
                </div>
                </x-card>
            @endforeach
        </div>
        @endif
    </div>
</div>
