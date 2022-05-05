@extends('layouts.app')

@section('content')

<form class="container" action= "{{route('product.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    Nome prod: <input type="text" name="name">
    Descrição: <input type="text" name="description">
    Preço: <input type="number" step="0.1" name="price">
    Estoque: <input type="number" name="stock">
    Selecione uma cat:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}">{{ $category->name}}</option>
        @endforeach
    </select>

    <p class="mt-2">
         <select multiple name="tags[]">
        @foreach($tags as $tag)
        <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
    </select>
    imagem: <input type="file" name="image">
    <button class="btn btn-info" type="submit">Enviar</button>
    </p>



</form>

@endsection
