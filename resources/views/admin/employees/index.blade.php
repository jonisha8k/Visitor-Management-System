@extends('layouts.layout')
@section('content')

        <a href="/admin/employees/form" class="btn btn-success">Add Employee</a><br/><br/>
    
    <table class="table table-striped">
        <thead>
            <tr>
            <th>S.NO.</th>
            <td>Name</td>
            <td>Phone</td>
            <td>Department</td>
            <td>Position</td>
            </tr>
        </thead>
        <tbody>
        <?php  $i=1 ?>
        <?php foreach($employees as $e) { ?>
            <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $e->name; ?></td>
            <td><?php echo $e->phone ?></td>
            <td><?php echo $e->department ?></td>
            <td><?php echo $e->position ?></td>
            <td>
            <a href="/admin/employees/delete/<?php echo $e->id ?>"class="btn btn-success"> Delete</a>&nbsp;
            <a href="/admin/employees/edit/<?php echo $e->id ?>"class="btn btn-success"> Edit</a>&nbsp;
            
            </tr>

        <?php }?>
        </tbody>
        </table>
@endsection