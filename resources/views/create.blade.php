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
            <form method="post" action="{{route('products.store')}}" style="max-width: 500px;
  margin: auto;">
            @csrf
            <h1>Add A New Product</h1><br>

    
            <label>Product Name:</label><br>
            <input type="text" class="form-control"  placeholder="Enter product name" name="p_name"><br>
            <label>Product Code:</label><br>
            <input type="text" class="form-control" placeholder="Enter code" name="p_code"><br>
            <label>Product description:</label><br>
            <input type="text" class="form-control" placeholder="Enter description" name="p_desc"><br>
            <label>Product category:</label><br>
            <input type="text" class="form-control" placeholder="Enter category" name="p_category"><br>
            <label>Product price:</label><br>
            <input type="text" class="form-control" placeholder="Enter price" name="p_price"><br>
            <label>Product quality:</label><br>
            <input type="text" class="form-control" placeholder="Enter quality" name="p_quantity"><br>
            <label>Product stock date:</label><br>
            <input type="text" class="form-control" placeholder="Enter stock date" name="p_stock_date"><br>
            <label>Product rating:</label><br>
            <input type="text" class="form-control" placeholder="Enter rating" name="p_rating"><br>
            <label>Product purchased date:</label><br>
            <input type="text" class="form-control" placeholder="Enter purchase date" name="p_purchased"><br><br>

            <input type="submit" class="btn btn-primary" value="Add Product">
</div>
</form>
        
        </div>
    </body>
</html>
