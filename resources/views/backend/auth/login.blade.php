@extends('backend.auth.auth_master')

@section('auth_title')
Login | Admin Panel
@endsection

@section('auth-content')
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,400;0,500;0,600;0,700;1,100;1,200;1,300&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;

    }

    body {
        background: #21A7A8;
    }

    .login-page {
        height: 100vh;
        width: 100%;
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .form {
        position: relative;
        filter: drop-shadow(0 0 2px #000000);
        border-radius: 5px;
        width: 360px;
        height: 360px;
        background-color: #ffffff;
        padding: 40px;
    }

    .form img {
        position: absolute;
        height: 20px;
        top: 190px;
        right: 60px;
        cursor: pointer;
    }

    .form input {
        outline: 0;
        background: #f2f2f2;
        border-radius: 4px;
        width: 100%;
        border: 0;
        margin: 15px 0;
        padding: 15px;
        font-size: 14px;
    }

    .form input:focus {
        box-shadow: 0 0 5px 0 rgba(106, 98, 210);
    }

    span {
        color: red;
        margin: 10px 0;
        font-size: 14px;
    }

    .form button {
        outline: 0;
        background: #6a62d2;
        width: 100%;
        border: 0;
        margin-top: 10px;
        border-radius: 3px;
        padding: 15px;
        color: #FFFFFF;
        font-size: 15px;
        -webkit-transition: all 0.3 ease;
        transition: all 0.4s ease-in-out;
        cursor: pointer;
    }

    .form button:hover,
    .form button:active,
    .form button:focus {
        background: black;
        color: #fff;

    }

    .message {
        margin: 15px 0;
        text-align: center;

    }

    .form .message a {
        font-size: 14px;
        color: #6a62d2;
        text-decoration: none;
    }

    .alert-dismissible .close {
        position: absolute;
        width: 4px;
        top: -7px;
    }
</style>
<!-- login area start -->
<div class="login-page">
    <div class="form">
        <form class="login-form " method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <h2>SIGN IN </h2>
            <input type="text" required placeholder="Email" id="user" name="email" autocomplete="off" />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <input type="password" required placeholder="Password" id="pass" autocomplete="off" name="password" />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <img src="https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png" onclick="show()"
                id="showimg">
            <span id="vaild-pass"></span>
            <button type="submit">SIGN IN</button>
            @include('backend.layouts.partials.messages')
            {{-- <p class="message"><a href="#">Forgot your password?</a></p> --}}
        </form>
    </div>
</div>
<script>
    function show() {
        var x = document.getElementById("pass");
        if (x.type === "password") {
            x.type = "text";
            document.getElementById("showimg").src =
            "https://static.thenounproject.com/png/777494-200.png";
        } else {
            x.type = "password";
            document.getElementById("showimg").src =
            "https://cdn2.iconfinder.com/data/icons/basic-ui-interface-v-2/32/hide-512.png";
        }
    }
</script>
<!-- login area end -->
@endsection
