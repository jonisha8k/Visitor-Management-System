@extends('layouts.layout')
@section('content')

<form action="/admin/employees/save" method="POST">
    @csrf
    <table>
    <tr>
    <td>s.no:<input type="text" name="id"></td> <br>
    </tr>
    <tr>
    <td>name:<input type="text" name="name"></td> <br>
    </tr>
    <tr>
    <td>phone:<input type="number" name="phone"></td> <br>
    </tr>
    <tr>
    <td>department:<input type="text" name="department"></td> <br>
    </tr>
    <tr>
    <td>position:<input type="text" name="position"></td> <br>
    </tr>
    <tr>
    <input type="submit" value="submit">
    </tr>
    </table>
    </form>
    @endsection