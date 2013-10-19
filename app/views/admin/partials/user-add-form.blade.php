{{ Form::open(array(
'url' => 'admin/user',
'method' => 'STORE'
)) }}
<?php
if($errors->first('key'))
{
    ?>
    <div class="error"><?php echo $errors->first('key'); ?></div>
<?php
}
?>
{{ Form::label('key', 'Key: ') }}
{{ Form::text('key', '') }}
<br />
<?php
if($errors->first('pin'))
{
    ?>
    <div class="error"><?php echo $errors->first('pin'); ?></div>
<?php
}
?>
{{ Form::label('pin', 'PIN: ') }}
{{ Form::password('pin') }}
<br />
<?php
if($errors->first('ircName'))
{
    ?>
    <div class="error"><?php echo $errors->first('ircName'); ?></div>
    <?php
}
?>
{{ Form::label('ircName', 'IRC Name: ') }}
{{ Form::text('ircName', '') }}
<br />
<?php
if($errors->first('spokenName'))
{
    ?>
    <div class="error"><?php echo $errors->first('spokenName'); ?></div>
<?php
}
?>
{{ Form::label('spokenName', 'Spoken Name: ') }}
{{ Form::text('spokenName', '') }}
<br />
{{ Form::label('isAdmin', 'Admin?') }}
{{ Form::radio('isAdmin', '1') }} Yes
{{ Form::radio('isAdmin', '0', true) }} No
<br />
{{ Form::label('isActive', 'Active?') }}
{{ Form::radio('isActive', '1', true) }} Yes
{{ Form::radio('isActive', '0') }} No
<br />
{{ Form::submit('Create User') }}
{{ Form::close() }}

