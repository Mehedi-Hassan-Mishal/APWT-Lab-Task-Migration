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
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

    
   


        <div class="container-fluid">
            <form method="post" action="{{route('products.update',$product->id)}}" style="max-width: 500px;
  margin: auto;">
            @csrf
           @method('PUT')

            <h1>Add A New Product</h1><br><br>

    

            <input type="text"  placeholder="Enter product name" value="{{ $product->p_name}}" class="form-control" name="p_name"><br>
            <input type="text" placeholder="Enter code" value="{{ $product->p_code}}" class="form-control"  name="p_code"><br>
            <input type="text" placeholder="Enter description" value="{{ $product->p_desc}}" class="form-control" name="p_desc"><br>
            <input type="text" placeholder="Enter category" value="{{ $product->p_category}}" class="form-control" name="p_category"><br>
            <input type="text" placeholder="Enter price" value="{{ $product->p_price}}" class="form-control" name="p_price"><br>
            <input type="text" placeholder="Enter quality" value="{{ $product->p_quantity}}" class="form-control" name="p_quantity"><br>
            <input type="text" placeholder="Enter stock date" value="{{ $product->p_stock_date}}" class="form-control" name="p_stock_date"><br>
            <input type="text" placeholder="Enter rating" value="{{ $product->p_rating}}" class="form-control" name="p_rating"><br>
            <input type="text" placeholder="Enter purchase date" value="{{ $product->p_purchased}}"class="form-control" name="p_purchased"><br>

            <input type="submit" class="btn btn-primary"  value="Update Product">
</div>
</form>
        
        </div>
    </body>
</html>
