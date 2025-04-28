<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
    </div>
       {{session('success')}}
    </div>
    @endif
    </div>
    <div><a href="{{route('product.create')}}">create product</a></div>

    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Qty</td>
                <td>Price</td>
                <td>Description</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->qty}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->description}}</td>
                <td>
                    <a href="{{route('product.edit',['product'=> $product])}}">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('product.destroy',['product'=>$product->id])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
                
            </tr>

            @endforeach
        </table>
    </div>
</body>
</html>