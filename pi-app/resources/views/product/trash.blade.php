@extends('layouts.app')

@section('content')

<table border = '1'>
@foreach($products as $product)
<tr>
<td>{{$product->id}}</td>
<td><img src="{{asset($product->image)}}" style="width:35px;"></td>
<td>{{$product->name}}</td>
<td>{{$product->Category->id}}</td>
<td>{{$product->Category->name}}</td>
<td>{{$product->description}}</td>
<td>{{$product->price}}</td>
<td>{{$product->stock}}</td>
<td><a href="{{route('product.restore', $product->id)}}">Restaurar</a></td>


</tr>
@endforeach
</table>
@endsection
