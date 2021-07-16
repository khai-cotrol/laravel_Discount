<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/Discount" method="post">
    @csrf
    <p>
       Products <input type="text" name="product" >
    </p>
    <p>
        Discount <input type="number" name="discount" placeholder="discount">*
    </p>
    <p>
    Price <input type="number" name="price" placeholder="price">*0,01
    </p>
    <button type="submit" > submit</button>
</form>
</body>
</html>
