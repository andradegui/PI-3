<form action= "{{route('product.edit', $product->id)}}" method="POST">
    @csrf
    @method("PUT")
    Nome do produto: <input type="text" name="name" value="{{$product->name}}">
    Descrição: <input type="text" name="description" value="{{$product->description}}">
    Preço: <input type="number" step="0.1" name="price" value="{{$product->price}}">
    Estoque: <input type="number" name="stock" value="{{$product->stock}}">
    <button type="submit">Enviar</button>

</form>
