<x-mail::message>
    # Nouvelle demande de contact
    Une nouvelle demande de contact a été fait pour le bien <a
        href="{{ route('property.show', ['slug' => $property->getSlug($property->title), 'property' => $property]) }}">{{ $property->title }}</a>

    - Prénom: {{ $data['firstname'] }}
    - Nom: {{ $data['lastname'] }}
    - Email: {{ $data['mail'] }}
    {{-- - Téléphone: {{ $data['phone'] }} --}}

    ** Message :**<br>
    {{ $data['message'] }}<br>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
