@extends('layout.app')

@section('content')
{{dd(auth()->user())}}
@stop