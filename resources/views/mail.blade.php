@component('mail::message')
# Introduction
{{ $msg }}

Responder a: {{ $mailde }}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
