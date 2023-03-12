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
<div>
    <table class="table">
        <thead>
           <tr>
            <td scope="col">ID</td>
            <td scope="col">Name</td>
            <td scope="col">Phone_number</td>
            <td scope="col">Email</td>
            <td scope="col">Date_of_Birth</td>
            <td scope="col">Age</td>
            <td scope="col">Action</td>
           </tr>
        </thead>
        <tbody>
            @foreach ($product as $key=>$data )
                
            
            <tr>
                <td scope="col">{{$key+1}}</td>
                <td scope="col">{{$data->name}}</td>
                <td scope="col">{{$data->phone_number}}</td>
                <td scope="col">{{$data->email}}</td>
                <td scope="col">{{$data->date_of_birth}}</td>
                <td scope="col">{{$data->age}}</td>
                <td scope="col">
                    <a href="{{route('product.view',$data->id)}}"class="btn btn-primary">view</a>
                    <a href="{{route('product.edit',$data->id)}}"class="btn btn-success">edit</a>
                    <a href="{{route('product.delete',$data->id)}}"class="btn btn-info">delete</a>
                </td>
                
            </tr>
            @endforeach
        </tbody>

    </table>

</div>
{{$product->links()}}
@endsection