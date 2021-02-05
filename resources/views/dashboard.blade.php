@extends('adminlte::page')

@section('title', 'Info Page')

@section('content_header')
    <h1>Info Page</h1>
@stop

@section('content')
    <p>Here is the info we can provide on each employee:</p>

 <p>Title: {{ Auth::user()->name }}</p>
 <p>Location: {{ Auth::user()->email }}</p>


  <livewire:counter />




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

@stop
