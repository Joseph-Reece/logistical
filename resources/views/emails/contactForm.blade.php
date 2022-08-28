@component('mail::message')
# New Client Contact

@component('mail::panel')
<p>
    Name: {{$fname}} {{$lname}}
</p>

<p>
    Contact: {{$phone_number}}
</p>

<p>
    email: {{$email}}
</p>
@endcomponent

<br>
@component('mail::panel')
## {{$message}}
@endcomponent
{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}

Thanks,<br>
{{$fname}} {{$lname}},
<br>
<br>
{{ config('app.name') }}
@endcomponent
