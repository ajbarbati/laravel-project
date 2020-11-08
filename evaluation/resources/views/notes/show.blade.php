@extends('layouts.app')

@section('content')
    <h1>{{$notes->title}}</h1>
    <br><br>
    <div>
        {!!$notes->body!!}
    </div>
    <hr>
    <small>Written on {{$notes->created_at}}</small>
    <hr>
            <a href="/notes/{{$notes->id}}/edit" class="btn btn-primary">Edit</a>
{{-- 
            {!!Form::open(['action' => ['NotesController@destroy', $notes->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!} --}}

@endsection