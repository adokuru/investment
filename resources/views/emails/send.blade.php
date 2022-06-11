@component('mail::message')

# {{$title}}, 

{{$content}}

<br>
{{ config('app.name') }}
@endcomponent
