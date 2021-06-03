<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        <div class="title">
            {{ __('Profile Information') }}
        </div>
    </x-slot>

    <x-slot name="description">
        <div class="description">
            {{ __('Update your account\'s profile information and email address.') }}
        </div>
    </x-slot>

    <x-slot name="form">
        <div class="form">
            <!-- Name -->
            <div class="name">
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
                <x-jet-input-error for="name" class="mt-2" />
            </div>

            <!-- Email -->
            <div class="email">
                <x-jet-label for="email"/>Email&nbsp;
                <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
                <x-jet-input-error for="email" class="mt-2" />
            </div>
        </div>
    </x-slot>

    <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                    {{ __('Saved.') }}
            </x-jet-action-message>
        <div class="save">
            <x-jet-button wire:loading.attr="disabled" wire:target="photo">
                {{ __('Save') }}
            </x-jet-button>
        </div>
    </x-slot>
</x-jet-form-section>
<hr>
<style>
    #x1{
        color: white !important;
    }
    #x2{
        color: rgb(255, 183, 0) !important;
    }
    .title{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 3rem;
        letter-spacing: 2px;
        color: rgb(255, 183, 0);
        font-weight: 700;
        text-align: center;
    }
    hr{
        margin-top: 5%;
        margin-bottom: 5%;
    }
    .description{
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        text-align: center;
    }
    .form{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }
    .mt-1{
        padding: 10px 10px;
        padding-right: 100px;
        border-bottom: 5px solid rgb(255,183,0);
        border-radius: 5px;
    }
    .name{
        margin-bottom: 2%;
        margin-top: 2%;
    }
    .save button{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: auto;
        margin-top: 2%;
        background: rgb(255, 183, 0);
        color: white;
        padding: 1% 3%;
        border: none;
        border-radius: 15px;
        transition: 0.3s ease-in-out;
        font-size: 1rem;
    }
    .save button:hover{
        transform: scale(1.1);
    }
</style>
