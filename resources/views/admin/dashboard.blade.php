@extends('admin.layout')
@section('content')
<h1>Usuario autenticado: {{ auth()->user()->name}}</h1>
@stop