@extends('master')

@section('title','Page Not Found')

@section('style')
    <style>
        .image{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        h2{
            width: 100%;
            text-align: center;
        }

        a{
            text-decoration: none;
            color: white;
            background-color: #2ab27b;
            padding: 1%;
            width: 10%;
            box-sizing: border-box;
            transition: 0.2s background-color;
            font-weight: bold;
            border-radius: 8px;
        }

        a:hover{
            background-color: #238357;
        }
    </style>
@endsection

@section('content')
    <div class="image">
        <img src="/storage/images/errors/404.jpg" alt="" height="70%">
        <h2>Oops, page not found</h2>
        <a href="/home">Back to home</a>
    </div>
@endsection