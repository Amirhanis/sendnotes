<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $noteBody;
    public $noteRecipient;
    public $noteSendDate;

    public function submit()
    {
        $validated = $this->submit([
            'noteTitle' => ['required', 'string', 'min:5'],
            'noteTitle' => ['required', 'string', 'min:5'],
            'noteTitle' => ['required', 'string', 'min:5'],
            'noteTitle' => ['required', 'string', 'min:5'],
        ])
        dd($this->noteTitle, $this->noteBody, $this->noteRecipient, $this->noteSendDate);
    }
}; ?>

<div>
    <form wire:submit='submit'>
        <x-input wire:model="noteTitle" label="Title" />
        <x-textarea wire:model="noteBody" label="Body" />
        <x-input icon="user" wire:model="noteRecipient" placeholder="user@test.com" label="Recipient" />
        <x-input icon="calendar" wire:model="noteSendDate" type="date" label="Send Date" />
        <div class="pt-4">
            <x-button wire:click="submit" primary right-icon="calendar" spinner>Schedule Notes</x-button>
        </div>    
    </form>
</div>
    