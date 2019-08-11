@extends('layouts.app')
<style>
.cent_div{
     color:#37568f;
}
.req-div{
    background:#37568f;
}
.title{
    color: #37568f;
    padding:5px 5px;
}
</style>

@section('content')
<div class="row">
    <div class="container col-md-4 col-md-offset-4 req-div">
        <div class="title">
        <h1>Generate Pass</h1>
        </div>
        <form action="/passes/save" method="post">
        @csrf
            <div class="form-group">
                <label for="purpose">Pass Id</label>
                <select name="employee_id" class="form-control">
            
                <?php foreach($employees as $emp) { ?>
                    <option value="<?php echo $emp->id; ?>"><?php echo $emp->name; ?></option>
                <?php } ?>
                </select>
            </div>

            
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea  class="form-control" name="description" placeholder="Description"  rows="4" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" name="type" placeholder="Type">
            </div>
            <div id="container"></div>
            <button type="submit" class="btn btn-primary">Request</button>
    </form>
    </div>
</div>
@endsection


