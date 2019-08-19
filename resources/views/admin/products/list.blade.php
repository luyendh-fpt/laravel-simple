<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">

    <title>Document</title>
</head>
<body>
<h1>List product</h1>
<ul>
    @foreach($list as $item)
        <li><img src="http://res.cloudinary.com/xuanhung2401/image/upload/w_150/{{$item->image}}" alt="{{$item->name}}"> {{$item->name}}</li>
    @endforeach
</ul>
{{$list->links()}}
</body>
</html>