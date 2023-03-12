@extends('home')
@section('backend_content')
<div>
   
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" value="{{$product->name}}"readonly>
        <label for="number">Phone Number</label>
        <input id="number" type="text" class="form-control" value="{{$product->phone_number}}"readonly>
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" value="{{$product->email}}" readonly>
        <label for="date">Date Of Birth</label>
        <input id="date" type="date" class="form-control" value="{{$product->date_of_birth}}" readonly>
        <label for="integer">Age</label>
        <input id="integer" type="number" class="form-control" value="{{$product->age}}" readonly>
       
    
    
</div>
@endsection