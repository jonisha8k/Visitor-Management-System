@extends('layouts.app')

@section('content')
<div class="row">
    <div class="container col-md-8 col-md-offset-8">
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Description</th>
            <th scope="col">Type</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($passes as $p) { ?>
            <tr>
            <th scope="row"></th>
            <td><?php echo $p->description ?></td>
            <td><?php echo $p->type ?></td>
            </tr>
            
        <?php }?>
        </tbody>
        </table>
</div>
</div>

@endsection