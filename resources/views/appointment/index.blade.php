@extends('layouts.layout')
@section('content')
<div class="row">
	<span class="">Appointments</span><br/>
</div>
<div class="row">
	<table class="table table-striped">
		<tr>
			<th>Id.</th>
			<th>Visitor Name</th>
			<th>Purpose</th>
			<th>Duration</th>
			<th>Assigned Person</th>
		</tr>
		<?php foreach ($appointments as $appointment) { ?>
		<tr>
		<td><?php echo $appointment->id ?></td>
		<td><?php echo $appointment->visitor name ?></td>
		<td><?php echo $appointment->purpose ?></td>
		<td><?php echo $appointment->assigned person ?></td>
		</tr>
		<?php } ?>
    </table>
</div>
@endsection