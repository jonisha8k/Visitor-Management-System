@extends('layouts.layout')

@section('content')
<?php 
use App\Employee;
use App\Pass;
use App\Visit;
?>
<div class="row">
    <div class="container col-md-8 col-md-offset-8">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Purpose</th>
            <th scope="col">Description</th>
            <th scope="col">Duration</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($visits as $v) { ?>
            <tr>
            <th scope="row"></th>
            <td><?php echo $v->purpose; ?></td>
            <td><?php echo $v->description ?></td>
            <td><?php echo $v->duration ?></td>
            <td><?php echo Employee::find($v->employee_id)->name;?></td>
            <td><?php echo $v->visitor->name ?></td>
            
            <td><a href="/admin/visits/accept/<?php echo $v->id ?>" class="btn btn-success">Accept</a></td>
            <td><a href="/admin/visits/delete/<?php echo $v->id ?>" class="btn btn-success">Decline</a></td>
            <td><a href="/admin/visits/decline/<?php echo $v->id ?>" class="btn btn-success">Decline</a></td>

            </tr>
        <?php }?>
        </tbody>
        </table>
</div>
</div>

@endsection