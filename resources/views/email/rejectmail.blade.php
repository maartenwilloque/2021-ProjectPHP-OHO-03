@component('mail::message')
Beste {{$firstname}} {{$lastname}}
De ingegeven onkost met titel: {{$expensetitle}} is afgekeurd

Reden:
{{$rejectreason}}


Afgekeurd door:
{{$inspector}}

Gelieve de nodige aanpassingen te maken en opnieuw in te dienen

Met vriendelijke groeten,<br>
{{ config('app.name') }}
@endcomponent
