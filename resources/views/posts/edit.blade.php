@extends('layouts.app')

@section('content')

<h1>Edit Posts</h1>

{!! Form::open(['action' => ['App\Http\Controllers\PostsController@update',$posts->id],'method' =>'POST' , 'enctype' => 'multipart/form-data']) !!}

<div class="form-group">
    {{Form::label('title','Title')}}
    {{Form::text('title', $posts->title ,['class' =>'form-control','placeholder' => 'Title'])}}

</div>
<div class="form-group">
    {{Form::label('body','Body')}}
    {{Form::textarea('body',$posts->body,['id' => 'article-ckeditor','class' =>'form-control','placeholder' => 'Body text'])}}

</div>
<div class="form-group">
    {{Form::file('cover_image')}}
    
</div>
{{Form::hidden('_method','PUT')}}
{{Form::Submit('Submit',['class'=>'btn btn-info'])}}
    
{!! Form::close() !!}




    

    
@endsection
    