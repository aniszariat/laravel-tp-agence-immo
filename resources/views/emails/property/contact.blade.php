<x-mail::message>
    # Introduction
    # Hello

    The body of your message.
    <ul>
        <li><em>{{ $property->id }}</em></li>
        <li><em>{{ $property->title }}</em></li>
        <li><em>{{ $property->price }}</em></li>
    </ul>

    <x-mail::button :url="''">
        Button Text
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
