@component('mail::message')

# {{$details['title']}}, 


{{$details['content']}}


<br>
{{ config('app.name') }}
@endcomponent
