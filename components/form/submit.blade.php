<div>
    {{ Form::submit($value, $attributes) }}
</div>

{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
        {{ Form::bsText('title') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary form-control mb-5']) }}
{!! Form::close() !!}