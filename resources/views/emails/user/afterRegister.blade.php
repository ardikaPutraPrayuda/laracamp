@component('mail::message')
# Welcome

Hi, {{$user->name}}
<br>
Welcome to Laracamp, your account has been created

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
