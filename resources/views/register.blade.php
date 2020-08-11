@extends('master')

@section('title','Register')

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

        .register{
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
            height: 50%;
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
            padding-bottom: 8%;
            box-sizing: border-box;
            font-size: larger;
        }

        #register-button{
            cursor: pointer;
            transition: 0.2s background-color, 0.2s color;
        }

        #register-button:hover{
            background-color: #5e5d5d;
            color: white;
        }

        #login-button{
            padding-top: 8%;
            color: #5e5d5d;
        }

        #login-button > a{
            text-decoration: underline;
            color: #5e5d5d;
        }
    </style>
@endsection

@section('content')
    <div class="content">
        <div class="register">
            <div class="banner"></div>
            <div class="form">
                <label class="welcome">Welcome to Clovery</label>
                <form action="" method="post">
                    {{csrf_field()}}
                    <input type="text" name="name" placeholder="Full Name">
                    <input type="email" name="email" placeholder="Email Address">
                    <input type="password" name="password" placeholder="Password">
                    <input type="submit" value="Register" id="register-button">
                </form>
                <label for="" id="login-button">Already have an account? <a href="/login">Login now</a></label>
            </div>
        </div>
    </div>
@endsection