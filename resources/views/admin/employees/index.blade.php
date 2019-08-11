@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="container col-md-8 col-md-offset-8">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Department</th>
            <th scope="col">Position</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($employees as $e) { ?>
            <tr>
            <th scope="row"></th>
            <td><?php echo $e->name; ?></td>
            <td><?php echo $e->phone ?></td>
            <td><?php echo $e->department ?></td>
            <td><?php echo $e->position ?></td>
            </tr>
        <?php }?>
        </tbody>
        </table>
</div>
</div>

@endsection