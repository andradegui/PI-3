<form action= "{{route('category.edit', $category->id)}}" method="POST">
    @csrf
    @method("PUT")
    Nome da categoria: <input type="text" name="name" value="{{$category->name}}">
    <button type="submit">Enviar</button>

</form>
