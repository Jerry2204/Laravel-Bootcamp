@component('mail::message')
# Transaction Has Been Confirmed

Hi, {{ $checkout->user->name }}
<br>
Your transaction has been confirmed, now you can enjoy the benefits of {{ $checkout->camp->title }} Camp.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
