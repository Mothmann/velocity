<x-jet-form-section submit="updatePassword">
    <x-slot name="title">
        <div class="title">
            {{ __('Update Password') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="description">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </div>
    </x-slot>

    <x-slot name="form">
        <div class="cp">
            <p>Current Password</p>
            <x-jet-input id="current_password" type="password" class="mt-1 block w-full" wire:model.defer="state.current_password" autocomplete="current-password" />
            <x-jet-input-error for="current_password" class="mt-2" />
        </div>

        <div class="np">
            <p>New Password &nbsp; &nbsp; &nbsp;</p>
            <x-jet-input id="password" type="password" class="mt-1 block w-full" wire:model.defer="state.password" autocomplete="new-password" />
            <x-jet-input-error for="password" class="mt-2" />
        </div>

        <div class="cf">
            <p>Confirm Password</p>
            <x-jet-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model.defer="state.password_confirmation" autocomplete="new-password" />
            <x-jet-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>
        <div class="save">
            <x-jet-button>
                {{ __('Save') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-form-section>
<hr>
<style>
    .cp ,.np ,.cf{
        display: flex;
        flex-direction: row;
        align-content: center;
        justify-content: center;
        align-items: center;
        margin: 2%;
    }
    .cp p,.np p,.cf p{
        margin-right: 5%;
    }
</style>
