<x-mail::message>
# Nuovo messaggio di {{$name}} dal Front Office

> {{$message}}
<x-mail::button :url="'mailto:' . $email">
Rispondi
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
