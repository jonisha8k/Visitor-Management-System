@extends('layouts.layout')
@section('content')
<form action='/admin/visits/update/<?php echo $v->id?>' method="post">
@csrf

Name: <input type="text" name="Name" value="<?php echo $v->Name;?>"/>
Purpose: <input type="text" name="Name" value="<?php echo $v->Purpose;?>"/>
Description: <input type="text" name="Description" value="<?php echo $v->Description;?>"/>
Duration: <input type="text" name="Duration" value="<?php echo $v->Duration;?>"/>
<input type="submit" value="update">
</form>
@endsection



