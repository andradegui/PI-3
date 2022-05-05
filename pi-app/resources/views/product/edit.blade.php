@extends('layouts.app')

@section('content')

<form action= "{{route('product.edit', $product->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    Nome do produto: <input type="text" name="name" value="{{$product->name}}">
    Descrição: <input type="text" name="description" value="{{$product->description}}">
    Preço: <input type="number" step="0.1" name="price" value="{{$product->price}}">
    Estoque: <input type="number" name="stock" value="{{$product->stock}}">
    Imagem: <input type="file" name="image">
    Selecione uma categoria:
    <select name="category_id">
        @foreach($categories as $category)
        <option value="{{$category->id}}"
            {{$product->category_id == $category->id ? 'selected' : ''}}>
            {{ $category->name}}</option>
        @endforeach
    </select>
    Selecione uma Tag:
    <select multiple name="tags[]">
        @foreach($tags as $tag)
        <option value="{{$tag->id}}"{{$product->hastag($tag->id) ? 'selected' : ""}}>
        {{$tag->name}}</option>
        @endforeach
    </select>
    <button type="submit">Enviar</button>

</form>

@endsection
