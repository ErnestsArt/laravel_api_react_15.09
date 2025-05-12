<h1>Products</h1>
<a href="/product/create">
    <button>Add a product</button>
</a>
<ul>
    @foreach($products as $product)
    <li>Name: {{$product->name}}</li>
    <li>Quantity: {{$product->quantity}}</li>
    <li>ID: {{$product->id}}</li>
    <br>
    @endforeach
</ul>