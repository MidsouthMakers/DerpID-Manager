<!-- app/views/form.blade.php -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DerpId-Manager</title>
    @include('header-styles')
</head>
<body>
@include('header-nav')
<div class="welcome">
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
</div>
@include('footer')
</body>
</html>

