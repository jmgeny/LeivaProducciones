@component('mail::message')

Mensaje de: {{ $nombrede }} {{ $apellidode }} <br>
{{ $msg }}

Responder a: {{ $mailde }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent