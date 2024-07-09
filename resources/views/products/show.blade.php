@extends('layouts.app')
@section('main')
<head>
    <title>Crud Operation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<h5><i class="bi bi-journal-minus"></i>&nbsp;Product Details</h5>
<nav class="my-2">
    <ol class="breadcrumb">
         <li calss="breadcrumb-item"><a href="/" style="text-decoration: none;">Home</a></li>&nbsp;/&nbsp; 
         <li calss="breadcrumb-item active">View Product</li>
    </ol>
 </nav>
 <div class="card">
    <img src="/products/{{$product->image}}" alt="{{$product->name}}" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title fw-bold">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p class="fw-semibold">M.R.P: <small class="text-danger text-decoration-line-through">{{$product->mrp}}</small></p>
        <p class="fw-semibold">Selling Price: <small class="text-success">{{$product->price}}</small></p>
    </div>
 </div>
@endsection