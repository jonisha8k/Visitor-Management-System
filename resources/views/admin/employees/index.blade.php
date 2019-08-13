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
            </tr>
        <?php }?>
        </tbody>
        </table>
@endsection