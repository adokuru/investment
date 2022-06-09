@component('mail::message')

# Hello {{$details['name']}}, 

Welcome to Allianz Investment Hub, Your trading account has been successfully registered.

Check out your dashboard. 
Click on login to log into your account.

@component('mail::button', ['url' => 'https://allianzassetshub.com/user/dashboard'])
Login to Your Dashboard
@endcomponent

Thank you for choosing our platform,<br>

If you did not create an account, no further action is required.

Regards.
{{ config('app.name') }}
@endcomponent
