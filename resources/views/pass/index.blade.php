@extends('layouts.layout')
@section('content')
<div class="row">
	<span class="">Pass</span><br/>
</div>
<div class="row">
	<table class="table table-striped">
		<tr>
			<th>Id</th>
			<th>Description</th>
			<th>Type</th>
		</tr>
		<?php foreach ($pass as $p) { ?>
		<tr>
		<td><?php echo $p->id ?></td>
		<td><?php echo $p->description ?></td>
		<td><?php echo $p->type ?></td>
		</tr>
		<?php } ?>
    </table>
</div>
@endsection