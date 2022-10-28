<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Upload image</title>
</head>
<body>

<form action="{{ route('image.upload') }}" method="POST" enctype="multipart/form-data">
@csrf
    <input type="file" name="image">
    <button class="" type="submit">Загрузить</button>

</form>

@if(session()->has('imagePath'))
    <img class="img-fluid" src="{{ asset('/storage/' . session('imagePath')) }}" alt="">
@endif

</body>
</html>
