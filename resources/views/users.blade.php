@extends('master')

@section('title','Manage User')

@section('style')
    <style>
        .content{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 4%;
            flex-wrap: wrap;
        }

        .users{
            width: 100%;
            display: grid;
            grid-template-columns: repeat(4, 25%);
        }

        .user{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 4% 0%;
            box-sizing: border-box;
            font-size: medium;
        }

        .header{
            font-size: large;
            font-weight: bold;
            border-bottom: 1px solid #bdbdbd;
        }

        h1{
            width: 100%;
            text-align: center;
            padding-bottom: 5%;
            box-sizing: border-box;
        }

        .delete input{
            border: none;
            padding: 1.5% 3.5%;
            color: white;
            border-radius: 8px;
            font-size: medium;
            background-color: #ffa4a4;
            transition: 0.2s background-color;
            cursor: pointer;
        }

        .delete input:hover{
            background-color: #e79090;
        }

        form{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
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
    <div class="content">
        <h1>Clovery users</h1>
        <div class="users">
            <div class="user header">Name</div>
            <div class="user header">Email Address</div>
            <div class="user header">Role</div>
            <div class="user header">Action</div>
            @foreach($users as $u)
                <div class="user">{{$u->name}}</div>
                <div class="user">{{$u->email}}</div>
                <div class="user">{{$u->role}}</div>
                <div class="user delete">
                    <form action="/delete" method="post">
                        {{csrf_field()}}
                        <input type="hidden" value="{{$u->id}}" name="id">
                        <input type="submit" value="Delete">
                    </form>
                </div>
            @endforeach
            <div class="header"></div>
            <div class="header"></div>
            <div class="header"></div>
            <div class="header"></div>
        </div>
    </div>
@endsection