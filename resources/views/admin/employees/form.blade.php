@extends('layouts.layout')
@section('content')

<form action="/admin/employees/save" method="POST">
    @csrf
    <table>
    <tr>
    <td>s.no:<input type="text" name="id"></td> <br>
    <td>name:<input type="text" name="name"></td> <br>
    <td>phone:<input type="number" name="phone"></td> <br>
    <td>department:<input type="text" name="department"></td> <br>
    <td>position:<input type="text" name="position"></td> <br>
    <input type="submit" value="submit">
    </tr>
    </table>
    </form>
    @endsection