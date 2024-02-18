@component('mail::message')

# 2FA Code

Your 2FA code is: {{ $details['code'] }}

This code will expire in 5 minutes.

If you did not request this code, please ignore this email.

Regards.
<br />
{{ config('app.name') }}
@endcomponent
