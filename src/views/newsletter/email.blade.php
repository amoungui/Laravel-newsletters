@component('mail::message')
# Introduction
There is new query from {{$email}} in the database newsletter


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
AMSCorp
@endcomponent
