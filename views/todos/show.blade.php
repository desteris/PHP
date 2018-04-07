@extends('layouts.app')

@section('content')
    <a href="/" class="btn btn-primary">Go Back</a>
    <h1>{{$todo->title}} </h1>
    <span class="label label-danger">{{$todo->due}}</span>
    <hr>
    <p>{{$todo->body}} </p>
    <br><br>
    <a href="/todo/{{$todo->id}}/edit " class="btn btn-primary form-control mb-3">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger form-control mb-5']) }}
        {{ Form::hidden('_method', 'DELETE') }}
    {!! Form::close() !!}
@endsection