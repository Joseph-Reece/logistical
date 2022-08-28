@component('mail::message')
# New Quotation Request

The body of your message.
@component('mail::panel')
{{$data['contact']}}
{{$data['email']}}
@endcomponent

@component('mail::button', ['url' => '', 'color' => 'success'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
