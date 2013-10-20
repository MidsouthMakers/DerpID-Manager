<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DerpID-Manager</title>
    @include('header-styles')
</head>
<body>
<div class="welcome">
    <h1>Welcome</h1>
    <p>please log in.</p>
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
</div>
@include('footer')
</body>
</html>
