@extends('layouts.app')



@section('content')
<a class="btn btn-lg btn-success float-end me-5 mb-2" href="{{route('product.create')}}">Criar Produto</a>
<div>
<table class="table table-striped text-center">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nome da Produto</th>
            <th>Id_Cat</th>
            <th>Categoria</th>
            <th>Desc</th>
            <th>tag</th>
            <th>preço</th>
            <th>qtd</th>
            <th>Editar</th>
            <th>Apagar</th>
        </tr>
    </thead>

<tbody>

@foreach($products as $product)
<tr>
<td>{{$product->id}}</td>
<td>{{$product->name}}</td>
<td>{{$product->Category->id}}</td>
<td>{{$product->Category->name}}</td>
<td>{{$product->description}}</td>
<td>@foreach($product->Tags()->get() as $tag) {{$tag->name}}
    @endforeach
</td>
<td>{{$product->price}}</td>
<td>{{$product->stock}}</td>
<td><a href="{{route('product.edit', $product->id)}}">Editar</a></td>
<td><a href="{{route('product.destroy', $product->id)}}">Apagar</a></td>

</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
