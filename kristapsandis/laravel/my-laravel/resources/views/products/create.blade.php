<h1>Add a product</h1>
<form action="/product" method="post">
    @csrf
    <input type="text" name="name" placeholder="Product name">
    <input type="number" name="quantity" placeholder="Product quantity">
    <input type="submit" name="Create">
</form>