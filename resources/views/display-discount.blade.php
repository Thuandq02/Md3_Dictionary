<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculate</title>
</head>
<body>
<h1>Product Discount Calculate</h1>
<form action="/show" method="POST">
    @csrf
    <p><b>Product Description : </b><input type="text" name="Product Description" ></p>
    <p><b>List Price : </b><input type="text" name="List Price" ></p>
    <p><b>Discount Percent : </b><input type="text" name="Discount Percent" ></p>
    <p><button type="submit">Calculate Discount</button></p>
</form>
</body>
</html>
