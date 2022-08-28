@component('mail::message')
# New Quotation Request

@component('mail::panel')
## Package Details

<p>Length: {{$length}} cm</p>
<p>Width: {{ $width }} cm</p>
<p>Height: {{ $height }} cm</p>

@endcomponent
@component('mail::panel')
## contact Details

<p>Origin: {{ $origin }}</p>
<p>Destination: {{ $destination }}</p>
<p>You can contact me on {{ $contact }} or {{ $email }}</p>

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
