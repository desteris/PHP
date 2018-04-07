@extends('layouts.app')

@section('content')
<a href="/todo/{{$todo->id}}" class="btn btn-primary">Go Back</a>
    <h3>Edit Todo</h3>

    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'POST']) !!}
        {{ Form::bsText('title', $todo->title) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary form-control mb-5']) }}
    {!! Form::close() !!}
@endsection