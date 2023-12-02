@section('product_create')
<div>
    <h1>Add product</h1>
    <form action="{{ 'store' }}" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Give a creative name to your product..." required>
        </div>
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Assign price..." required>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea type="text" name="description" id="description" placeholder="Describe product..." required rows="5"></textarea>
        </div>
        <button type="submit" submit="button">Add product</button>
    </form>
</div>

@vite('resources/scss/main.scss')