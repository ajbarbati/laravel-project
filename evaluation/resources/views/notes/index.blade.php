@extends('layouts.app')

@section('content')
    <h1 class="mb-5">Notes</h1>
    @if(count($notes) > 0)
        @foreach($notes as $note)
            <div class="container">
                <div class="card-deck">
                    <div class="card mb-3">
                        <h3 class="card-header"><a href="/notes/{{$note->id}}">{{$note->title}}</a></h3>
                        <div class="card-body">
                            <small>Written on {{$note->created_at}}</small>
                            <p>{{$note->body}}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No notes found</p>
    @endif
@endsection