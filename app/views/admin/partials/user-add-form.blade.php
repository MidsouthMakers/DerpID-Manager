{{ Form::open(array('url' => 'admin/user/create')) }}
{{ Form::label('key', 'Key: ') }}
{{ Form::text('key', '') }}
<br />
{{ Form::label('pin', 'PIN: ') }}
{{ Form::password('pin') }}
<br />
{{ Form::label('ircname', 'IRC Name: ') }}
{{ Form::text('ircname', '') }}
<br />
{{ Form::label('spokenName', 'Spoken Name: ') }}
{{ Form::text('spokenName', '') }}
<br />
{{ Form::label('isAdmin', 'Admin?') }}
{{ Form::radio('isAdmin', 'yes') }} Yes
{{ Form::radio('isAdmin', 'no', true) }} No
<br />
{{ Form::label('isActive', 'Active?') }}
{{ Form::radio('isActive', 'yes', true) }} Yes
{{ Form::radio('isActive', 'no') }} No
<br />
{{ Form::submit('Create User') }}
{{ Form::close() }}

