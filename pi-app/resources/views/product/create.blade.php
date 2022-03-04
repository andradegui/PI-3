<form action= "{{route('product.store')}}" method="POST">
    @csrf
    Nome do produto: <input type="text" name="name">
    Descrição: <input type="text" name="description">
    Preço: <input type="number" step="0.1" name="price">
    Estoque: <input type="number" name="stock">
    <button type="submit">Enviar</button>

</form>
