@extends('layouts.layout')
@section('content')
<form action='/admin/employees/update/<?php echo $em->id?>' method="post">
@csrf

Name: <input type="text" name="Name" value="<?php echo $em->Name;?>"/>
Phone: <input type="number" name="Number" value="<?php echo $em->Phone;?>"/>
Department: <input type="text" name="Department" value="<?php echo $em->Department;?>"/>
Position: <input type="text" name="Position" value="<?php echo $em->Position;?>"/>
<input type="submit" value="update">
</form>
@endsection



