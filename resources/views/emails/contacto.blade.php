@component('mail::message')
<h3>{{$data->name}}</h3>
<h4>{{$data->email}}</h4>
<h4>{{$data->phone}}</h4>

{{$data->message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
