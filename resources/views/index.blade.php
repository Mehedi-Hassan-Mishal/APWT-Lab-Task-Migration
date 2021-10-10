<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <!-- Styles -->
        
    </head>
    <body>
        <div class="container-fluid">
            <div class="table">
                <br>
                
                <a class="btn btn-primary" href="{{route('products.create')}}">Add New Product</a><br><br>
          <table>
              <tr>
          <th>Id</th>
          <th>Product Name</th>
          <th>Product Code</th>
          <th>Description</th>
          <th>Category</th>
          <th>Price</th>
          <th>Quantity</th>
          <th>Stock Date</th>
          <th>Rating</th>
          <th>Purchased</th>
          <th colspan="5">Action</th>
           </tr>

           @foreach($products as $product)

           
          <tr>
   <td>{{$product->id}}</td>
    <td>{{$product->p_name}}</td>
    <td>{{$product->p_code}}</td>
    <td>{{$product->p_desc}}</td>
    <td>{{$product->p_category}}</td>
    <td>{{$product->p_price}}</td>
    <td>{{$product->p_quantity}}</td>
    <td>{{$product->p_stock_date}}</td>
    <td>{{$product->p_rating}}</td>
    <td>{{$product->p_purchased}}</td>

    <td><a href="{{route('products.edit',$product->id)}}" class="btn btn-primary">Edit</a></td>
    <td>
        <form method="post" action="{{route('products.destroy',$product->id)}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
</form>

</td>
</tr>
@endforeach

          </table>
        </div>
        </div>
    </body>
</html>
