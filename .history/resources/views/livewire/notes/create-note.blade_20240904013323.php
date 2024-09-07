<?php

use Livewire\Volt\Component;

new class extends Component {
    public $noteTitle;
    public $notBody;
    public $notRecipient;
    public $noteSendDate;

    public function submit()
    {
        dd($this->noteTitle, $this->noteBody, $this->noteRecipient, $this->noteSendDate);
    }
}; ?>

<div>
    <form>
        <x-input wire:model="noteTitle" label="Title" />
        <x-textarea wire:model="noteBody" label="Body" />
        <x-input wire:model="noteRecipient" label="Recipient" />
    </form>
</div>
