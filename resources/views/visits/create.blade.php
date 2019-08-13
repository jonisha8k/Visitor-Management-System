@extends('layouts.app')
<style>
.cent_div{
     color:#fff;
}
.req-div{
    background:#6574cd;
}
.title{
    color: #343a40;
    padding:5px 5px;
}
</style>

@section('content')
<div class="row">
    <div class="container col-md-4 col-md-offset-4 req-div">
        <div class="title">
        <h1>New Visit Request</h1>
        </div>
        <form action="/visits/save" method="post">
        @csrf
            <div class="form-group">
                <label for="purpose">Visit To</label>
                <select name="employee_id" class="form-control">
                <option value="0">Select a Person</option>
                <?php foreach($employees as $emp) { ?>
                    <option value="<?php echo $emp->id; ?>"><?php echo $emp->name; ?></option>
                <?php } ?>
                </select>
            </div>

            <div class="form-group">
                <label for="purpose">Purpose of Visit</label>
                <input type="text" class="form-control" name="purpose" aria-describedby="purpose" placeholder="Enter Purpose">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" name="description" placeholder="Description"  rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control" name="duration" placeholder="Duration">
            </div>
            <div class="form-group">
                <label for="visit_date">Visit Date</label>
                <input type="date" class="form-control datepicker" name="visit_date" placeholder="Visit Date">
            </div>
            <div id="container"></div>
            <button type="submit" class="btn btn-primary">Request</button>
    </form>
    </div>
</div>
@endsection


