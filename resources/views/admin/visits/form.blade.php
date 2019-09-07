@extends('layouts.layout')
@section('content')

<form action="/admin/visits/save" method="POST">
    @csrf
    <table>
    <tr>
    <td>s.no:<input type="text" name="id"></td> <br>
    </tr>
    <tr>
    <td>name:<input type="text" name="name"></td> <br>
    </tr>
    <tr>
    <td>purpose:<input type="text" name="purpose"></td> <br>
    </tr>
    <tr>
    <td>description:<input type="text" name="description"></td> <br>
    </tr>
    <tr>
    <td>duration:<input type="text" name="duration"></td> <br>
    </tr>
    <tr>
    <input type="submit" value="submit">
    </tr>
    </table>
    </form>
    @endsection