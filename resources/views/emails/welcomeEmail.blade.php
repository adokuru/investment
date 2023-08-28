@component('mail::message')
# Hello {{ $details['name'] }}

Welcome to Allianz Investment Hub, Your digital assets portfolio has been successfully registered.

To check out your dashboard, click on the login button below to log into your portfolio.

@component('mail::button', ['url' => 'https://allnzglobalassets.org/user/dashboard'])
        Click here to login
@endcomponent

Thank you for choosing Allianz.

Regards.
<br />
{{ config('app.name') }}
@endcomponent
