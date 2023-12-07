@extends('layout.app')

@section('content')
<h1>Bonjour {{ auth()->user()->prenom }}</h1>

<script>$('#sidebar-accueil').addClass('active');</script>
@stop