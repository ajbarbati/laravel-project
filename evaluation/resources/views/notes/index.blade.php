@extends('layouts.app')

@section('content')
    <h1>notes</h1>
    @if(count($notes) > 0)
        @foreach($notes as $note)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3>{{$note->title}}</h3>
                        <small>Written on {{$note->created_at}}</small>
                        <p>{{$note->body}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No notes found</p>
    @endif
@endsection