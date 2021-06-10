@component('mail::message')
    <h4>Beste {{$firstname}} {{$lastname}}</h4>
    <br>
    De ingegeven onkost met titel: {{$expensetitle}} is afgekeurd
    <br>
    Reden: <br>
    {{$rejectreason}}<br>
    <br>
    Afgekeurd door: <br>
    {{$inspector}}<br>
    <br>
    Gelieve de nodige aanpassingen te maken en opnieuw in te dienen <br>
    <br>
    Met vriendelijke groeten,<br>
    {{ config('app.name') }}
@endcomponent
