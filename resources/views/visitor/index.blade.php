@extends('layouts.layout')
@section('content')
<div class="row">
	<span class="">Visitors</span><br/>
</div>
<div class="row">
	<table class="table table-striped">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Address</th>
			<th>D.O.B</th>
			<th>Phone</th>
			<th>Gender</th>
			<th>Email</th>
			<th>Phone</th>
			<th>Office</th>
			<th>Position</th>
			<th>Created_at</th>
			<th>Updated_at</th>
		</tr>
		<?php foreach ($visitors as $visitor) { ?>
		<tr>
		<td><?php echo $visitor->id ?></td>
		<td><?php echo $visitor->name ?></td>
		<td><?php echo $visitor->address ?></td>
		<td><?php echo $visitor->dob ?></td>
		<td><?php echo $visitor->phone ?></td>
		<td><?php echo $visitor->gender ?></td>
		<td><?php echo $visitor->email ?></td>
		<td><?php echo $visitor->phone ?></td>
		<td><?php echo $visitor->office ?></td>
		<td><?php echo $visitor->position ?></td>
		<td><?php echo $visitor->created_at ?></td>
		<td><?php echo $visitor->updated_at ?></td>
		
		</tr>
		<?php } ?>
    </table>
</div>
@endsection