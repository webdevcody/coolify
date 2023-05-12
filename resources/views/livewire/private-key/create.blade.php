<div>
    <form class="flex flex-col gap-2 " wire:submit.prevent='createPrivateKey'>
        <x-inputs.input id="name" label="Name" required />
        <x-inputs.input id="description" label="Description" />
        <x-inputs.input type="textarea" id="value" label="Private Key" required />
        <x-inputs.button type="submit" wire.click.prevent>
            Save Private Key
        </x-inputs.button>
    </form>
</div>
