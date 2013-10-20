{{ Form::open(array(
'url' => 'admin/user',
'method' => 'STORE'
)) }}
{{ $errors->first('key', '<span class="error">:message</span><br />') }}
{{ Form::label('key', 'Key: ') }}
{{ Form::text('key', Input::old('key')) }}
<br />
{{ $errors->first('pin', '<span class="error">:message</span><br />') }}
{{ Form::label('pin', 'PIN: ') }}
{{ Form::password('pin') }}
<br />
{{ $errors->first('ircName', '<span class="error">:message</span><br />') }}
{{ Form::label('ircName', 'IRC Name: ') }}
{{ Form::text('ircName', Input::old('ircName')) }}
<br />
{{ $errors->first('spokenName', '<span class="error">:message</span><br />') }}
{{ Form::label('spokenName', 'Spoken Name: ') }}
{{ Form::text('spokenName', Input::old('spokenName')) }}
<br />
{{ Form::label('isAdmin', 'Admin?') }}
{{ Form::radio('isAdmin', 'true') }} Yes
{{ Form::radio('isAdmin', 'false', true) }} No
<br />
{{ Form::label('isActive', 'Active?') }}
{{ Form::radio('isActive', 'true', true) }} Yes
{{ Form::radio('isActive', 'false') }} No
<br />
{{ Form::submit('Create User') }}
{{ Form::close() }}

