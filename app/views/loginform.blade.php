@extends('layouts.master')

@section('title')
@parent
:: Home
@stop

@section('content')
    <h1>Welcome</h1>
    <p>please log in.</p>
    @if (Session::has('bad_key'))
    <div class="error">
        Your key is incorrect.
    </div>
    @endif
    @if (Session::has('bad_pin'))
    <div class="error">
        Your pin is incorrect.
    </div>
    @endif
    {{ Form::open(array('url' => 'login')) }}
    {{ $errors->first('key', '<span class="error">:message</span><br />') }}
    {{ Form::label('key', 'Key: ') }}
    {{ Form::text('key', Input::old('key')) }}
    <br />
    {{ $errors->first('pin', '<span class="error">:message</span><br />') }}
    {{ Form::label('pin', 'PIN: ') }}
    {{ Form::password('pin') }}
    <br />
    {{ Form::submit('Log In') }}
    {{ Form::close() }}
@stop

