@extends('layouts.app')

@section('content')
    <h3>Create Todo!</h3>

    {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('title') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary form-control mb-5']) }}
    {!! Form::close() !!}
@endsection