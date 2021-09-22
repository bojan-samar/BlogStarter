@component('mail::message')
# Contact Us

<p><b>Name:</b> {{ $data['name'] }}</p>
<p><b>Email:</b> {{ $data['email'] }}</p>
<p><b>Message:</b></p>
<p>{{ $data['message'] }}</p>


Thanks,<br>
{{ config('app.name') }}
@endcomponent
