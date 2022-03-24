@extends('layouts.app')

@section('content')

<table border = '1'>
@foreach($tags as $tag)
<tr>
<td>{{$tag->id}}</td>
<td>{{$tag->name}}</td>
<td><a href="{{route('tag.restore', $tag->id)}}">Restaurar</a></td>


</tr>
@endforeach
</table>

@endsection
