<x-mail::message>
    # Introduction

    {{ __('Hello, dear user') }}

    {{ __('Your Password') }}: {{ $password }}

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
