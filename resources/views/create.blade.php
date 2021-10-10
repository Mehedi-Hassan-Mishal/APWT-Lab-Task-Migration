<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Create</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 
        <!-- Styles -->
        <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    </head>
    <body>

    



        <div class="container-fluid">
            <form method="post" action="{{route('products.store')}}" style="max-width: 500px;
  margin: auto;">
            @csrf
            <h1>Add A New Product</h1><br>

            @if(session('product-added'))
                        <div class="alert alert-success w-100 text-center" role="alert">
                            <span class="fw-bold"> {{ session('product-added') }}</span>
                        </div>
                        @endif
    
            <label>Product Name:</label><br>
            <input type="text" class="form-control"  placeholder="Enter product name" name="p_name">
            @error('p_name')
            <span class="text-danger">{{$message}}</span>
            @enderror

          <br>
            <label>Product Code:</label><br>
            <input type="text" class="form-control" placeholder="Enter code" name="p_code">
            @error('p_code')
            <span class="text-danger">{{$message}}</span>
            @enderror
           
            <br>
            <label>Product description:</label><br>
            <input type="text" class="form-control" placeholder="Enter description" name="p_desc">
            @error('p_desc')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <br>
            <label>Product category:</label><br>
            <input type="text" class="form-control" placeholder="Enter category" name="p_category">
            @error('p_category')
            <span class="text-danger">{{$message}}</span>
            @enderror
 
            <br>
            <label>Product price:</label><br>
            <input type="text" class="form-control" placeholder="Enter price" name="p_price">
            @error('p_price')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <br>
            <label>Product quality:</label><br>
            <input type="text" class="form-control" placeholder="Enter quality" name="p_quantity">
            @error('p_quantity')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <br>
            <label>Product stock date:</label><br>
            <input type="text" class="form-control" placeholder="Enter stock date" name="p_stock_date">
            @error('p_stock_date')
            <span class="text-danger">{{$message}}</span>
            @enderror


            <br>
            <label>Product rating:</label><br>
            <input type="text" class="form-control" placeholder="Enter rating" name="p_rating">
            @error('p_rating')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <br>
            <label>Product purchased date:</label><br>
            <input type="text" class="form-control" placeholder="Enter purchase date" name="p_purchased">
            @error('p_purchased')
            <span class="text-danger">{{$message}}</span>
            @enderror

            <br>
            <a style="font-size: 20px;" href="{{route('products.index')}}" class="btn btn-primary btn-sm px-3">Back</a> &nbsp &nbsp
            <input type="submit" class="btn btn-success" value="Add Product"><br><br>
</div>
</form>
        
    </div>
    </body>
</html>
