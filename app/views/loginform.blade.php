@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
    <h1>Welcome</h1>
    <p>Please log in.</p>
    {{ Form::open(array('url' => 'login')) }}
    <div>
        {{ Form::label('key', 'Key: ') }}
        {{ Form::text('key', '') }}
    </div>
    <div>
        {{ Form::label('pin', 'PIN: ') }}
        {{ Form::password('pin') }}
    </div>
    <div>
        {{ Form::submit('Log In') }}
    </div>
    {{ Form::close() }}
@stop

