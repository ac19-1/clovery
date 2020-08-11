@extends('master')

@section('title','Login')

@section('style')
    <style>
        .content{
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #bdbdbd;
        }

        .login{
            height: 80%;
            width: 30%;
            background-color: #fff;
            border-radius: 8px;
        }
        
        .banner {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 30%;
            background-image: url("/storage/images/background.jpg");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            border-radius: inherit;
        }

        .form{
            height: 70%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            flex-direction: column;
        }

        form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            height: 40%;
        }

        form > input{
            width: 80%;
            box-sizing: border-box;
            padding: 2%;
            border-radius: 10px;
            border: 1px solid #bdbdbd;
            outline: none;
        }

        .form > .welcome{
            width: 100%;
            text-align: center;
            padding-bottom: 10%;
            box-sizing: border-box;
            font-size: larger;
        }

        #login-button{
            cursor: pointer;
            transition: 0.2s background-color, 0.2s color;
        }

        #login-button:hover{
            background-color: #5e5d5d;
            color: white;
        }

        #register-button{
            padding-top: 10%;
            color: #5e5d5d;
        }

        #register-button > a{
            text-decoration: underline;
            color: #5e5d5d;
        }
    </style>
@endsection

@section('content')
    <div class="content">
        <div class="login">
            <div class="banner"></div>
            <div class="form">
                <label class="welcome">Welcome to Clovery</label>
                <form action="" method="post">
                    {{csrf_field()}}
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Login" id="login-button">
                </form>
                <label for="" id="register-button">Don't have an account? <a href="/register">Register now</a></label>
            </div>
        </div>
    </div>
@endsection