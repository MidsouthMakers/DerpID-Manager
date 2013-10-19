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
    {{ Form::label('key', 'Key: ') }}
    {{ Form::text('key', '') }}
    <br />
    {{ Form::label('pin', 'PIN: ') }}
    {{ Form::password('pin') }}
    <br />
    {{ Form::submit('Log In') }}
    {{ Form::close() }}
</div>
@include('footer')
</body>
</html>
