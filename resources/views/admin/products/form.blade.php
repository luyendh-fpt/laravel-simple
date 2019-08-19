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
    <h1>Product Form</h1>
    <form action="/admin/products" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            Name <input type="text" name="name">
        </div>
        <div>
            Price <input type="number" name="price">
        </div>
        <div>
            Image <input type="file" name="image">
        </div>
        <div>
            <input type="submit" value="Save">
        </div>
    </form>
</body>
</html>