{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="color: red">Momen</h1>
</body>
</html> --}}
@extends('home')
@section('backend_content')
<h1 style="color:green">create</h1>
<a href="{{route('product.form')}}" class="btn btn-danger">add</a>
@endsection