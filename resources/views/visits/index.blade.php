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
        <?php foreach($visits as $v) { ?>
            <tr>
            <th scope="row"></th>
            <td><?php echo $v->purpose; ?></td>
            <td><?php echo $v->description ?></td>
            <td><?php echo $v->duration ?></td>
            </tr>
        <?php }?>
        </tbody>
        </table>
</div>
</div>

@endsection