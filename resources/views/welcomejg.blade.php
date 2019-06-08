@extends ('layout')

@section('title', 'Welcome')

@section('content')

    <h1>Dit is de home page van {{ $naam }}</h1>

    <p>Zomaar wat plaatsnamen</p>
<ul>
    @foreach($steden as $stad)
        <li> {{ $stad }} </li>
    @endforeach
</ul>

@endsection('content')