@extends('layouts.app')

@section('content')

<div>
    <a href="/" class="btn btn-default">Go Back</a>
</div>

<h1>{{$title}}</h1>
    

    @if (count($services) > 0)
    <ul class="list-group">
        @foreach ($services as $service)

        <li class="list-group-item">{{$service}}</li>
            
        @endforeach
    </ul>
        
    @endif
    
@endsection