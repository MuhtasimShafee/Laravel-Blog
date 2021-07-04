@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>

<h1>{{$posts->title}}</h1>
<img style="width:100%" src="/storage/cover_image/{{$posts->cover_image}}" alt="">
<br><br>
<small>Written on {{$posts->created_at}}</small>

<div>
    {!!$posts->body!!}
</div>

<hr>
<a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>

@if (!Auth::guest())

@if(Auth::user()->id == $posts->user_id)

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy',$posts->id],'method' =>'POST','class' => 'pull-right']) !!}

{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class' => 'btn btn-danger'])}}

{!!Form::close()!!}

@endif
    
@endif



    

    
@endsection
    