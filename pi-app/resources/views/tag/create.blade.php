@extends('layouts.app')

@section('content')

<form action= "{{route('tag.store')}}" method="POST">
    @csrf
    Nome da Tag: <input type="text" name="name">
    <button type="submit">Enviar</button>

</form>

@endsection
