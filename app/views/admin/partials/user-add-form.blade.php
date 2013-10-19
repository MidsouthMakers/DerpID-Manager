{{ Form::open(array(
'url' => 'admin/user',
'method' => 'STORE'
)) }}
<?php echo $errors->first('key'); ?>
{{ Form::label('key', 'Key: ') }}
{{ Form::text('key', '') }}
<br />
<?php echo $errors->first('pin'); ?>
{{ Form::label('pin', 'PIN: ') }}
{{ Form::password('pin') }}
<br />
<?php echo $errors->first('ircName'); ?>
{{ Form::label('ircName', 'IRC Name: ') }}
{{ Form::text('ircName', '') }}
<br />
<?php echo $errors->first('spokenName'); ?>
{{ Form::label('spokenName', 'Spoken Name: ') }}
{{ Form::text('spokenName', '') }}
<br />
<?php echo $errors->first('isAdmin'); ?>
{{ Form::label('isAdmin', 'Admin?') }}
{{ Form::radio('isAdmin', '1') }} Yes
{{ Form::radio('isAdmin', '0', true) }} No
<br />
<?php echo $errors->first('isActive'); ?>
{{ Form::label('isActive', 'Active?') }}
{{ Form::radio('isActive', '1', true) }} Yes
{{ Form::radio('isActive', '0') }} No
<br />
{{ Form::submit('Create User') }}
{{ Form::close() }}

