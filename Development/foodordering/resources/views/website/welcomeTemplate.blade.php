<x-mail::message>
# Introduction
<h1>hii your name is {{$name}}</h1>

The body of your message.

<x-mail::button :url="''">
<h2>hii your email is {{$Email}}</h2>
</x-mail::button>
<x-mail::button :url="''">

    <img src="{{$fileContents}}" alt="Image">
</x-mail::button>


Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
