@extends('master')

@section('title','Products')

@section('style')
    <style>
        .content{
            width: 100%;
            min-height: 100vh;
            display: grid;
            grid-template-columns: repeat(4, 25%);
        }

        .product{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 4%;
            box-sizing: border-box;
        }

        .product-name, .product-price{
            width: 100%;
            text-align: center;
        }

        .product-name{
            font-weight: bold;
            font-size: medium;
            margin-top: 7%;
        }

        .product-price{
            font-size: small;
        }

        .product-image{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .title{
            width: 100%;
            padding: 3%;
            text-align: center;
            box-sizing: border-box;
        }
    </style>
@endsection

@section('content')
    <div class="nav">
        <div class="action">
            <a href="/home">Home</a>
            @if($auth)
                <a href="/products">Products</a>
            @endif
            @if($role == 'admin')
                <a href="/users">Manage User</a>
            @endif
        </div>
        <div class="auth">
            @if($auth)
                <a href="/logout">Logout</a>
            @else
                <a href="/login">Login</a>
            @endif
        </div>
    </div>
    <h1 class="title">Our Products</h1>
    <div class="content">
        @foreach($products as $p)
            <div class="product">
                <div class="product-image">
                    <img src="/storage/images/products/{{$p->product_image}}" alt="" width="70%">
                </div>
                <div class="product-name">{{$p->product_name}}</div>
                <div class="product-price">Rp.{{$p->product_price}}</div>
            </div>
        @endforeach
    </div>
@endsection