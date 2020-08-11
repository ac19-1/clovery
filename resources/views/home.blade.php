@extends('master')

@section('title','Clovery')

@section('style')
    <style>
        .header{
            background-image: url("/storage/images/background.jpg");
            height: 90vh;
            width: 100%;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .recommended{
            width: 100%;
            display: grid;
            grid-template-columns: repeat(3, 33%);
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

        .product-name{
            width: 100%;
            text-align: center;
        }

        .product-name{
            font-weight: bold;
            font-size: medium;
            margin-top: 7%;
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
    <div class="header"></div>
    <h1 class="title">Top 3 Recommended Products</h1>
    <div class="recommended">
        @foreach($recommended as $r)
            <div class="product">
                <div class="product-image">
                    <img src="/storage/images/products/{{$r->product_image}}" alt="" width="60%">
                </div>
                <div class="product-name">{{$r->product_name}}</div>
            </div>
        @endforeach
    </div>
@endsection