@extends('layouts.app')

@section('content')
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
        <?php $i = 1; ?>
        <?php foreach($visits as $v) { ?>
            <tr>
            <th scope="row"><?php echo $i; $i++ ?></th>
            <td><?php echo $v->purpose; ?></td>
            <td><?php echo $v->description ?></td>
            <td><?php echo $v->duration ?></td>
            </tr>
            <a href="/admin/employees/delete/<?php echo $e->id ?> Delete</a>&nbsp;
        <?php }?>
        </tbody>
        </table>
</div>
</div>

@endsection