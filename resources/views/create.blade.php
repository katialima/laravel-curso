@extends('master')

@section('content')    

    <h2>Adiciona música</h2>

    {!! Form::open(['route' => 'songs.store']) !!}

     @include('form')   

    {!! Form::close() !!}
     



@stop