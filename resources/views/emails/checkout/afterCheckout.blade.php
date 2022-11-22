@component('mail::message')
# {{ $checkout->Camp->title }} camp registered

Hi, {{ $checkout->User->name }}
<br>
Thank you for purchasing our camp!, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('user.dashboard')])
Pay Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
