@extends('home')
@section('backend_content')
<div>
    <form action="{{route('product.update',$product->id)}}" method="POST" style="padding: 75px;">
        @csrf
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{$product->name}}">
        <label for="number">Phone Number</label>
        <input id="number" type="text" class="form-control" name="phone_number" value="{{$product->phone_number}}">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{$product->email}}">
        <label for="date">Date Of Birth</label>
        <input id="date" type="date" class="form-control" name="date_of_birth" value="{{$product->date_of_birth}}">
        <label for="integer">Age</label>
        <input id="integer" type="number" class="form-control" name="age" value="{{$product->age}}">
        <button class="btn btn-primary" type="submit" style="margin-top: 20px">create</button>
    
    </form>
</div>
@endsection