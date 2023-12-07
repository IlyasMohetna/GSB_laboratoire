@extends('layout.app')

@section('content')
<div class="container">
    <form action="import" method="post" enctype="multipart/form-data">
        @csrf
        <span>Import de ville/region/departement</span>
        <input type="file" name="file">
        <input type="submit" name="submit" value="Charger">
    </form>
</div>
@stop