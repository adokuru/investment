@component('mail::message')
# Hello

The body of your message.

@component('mail::button', ['url' => 'https://allianzassetshub.com/dashboard'])
Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
