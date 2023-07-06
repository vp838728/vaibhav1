@extends('website.layout.main')
@section('midsection')
<!-- //banner -->
<!-- contact -->

<div class="mail">
    </br>
    </br>
    <div class="container">
        <h2 class="tittle-w3">LOG <span>In</span></h2>

        <div class="clearfix"></div>
    </div>

    <div class="container col-md-12 ">
        @if (Session('fail'))
        <div class="alert alert-danger">
            <ul>
                <li>{{Session('fail') }}</li>
            </ul>
        </div>
        @endif
        <div class="container col-md-12 ">
            <form action="{{url('/loginauth')}}" method="post">

                <div class="form-group">
                    @csrf

                    <label>USER NAME</label>
                    <input type="text" name="username" class="form-control"value="{{old('username')}}" placeholder="enter your name">
                </div>
                @error('username')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    <LABEL>PASSWORD</LABEL>
                    <input type="password" name="pass" class="form-control" placeholder="enter your name">
                </div>
                @error('pass')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
                @enderror

                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-primary">
                </div>

            </form>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="contact-btm-w3ls">
        <h3 class="tittle-w3"><span>Get in touch </span>with us</h3>
        <ul>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>

        <div class="clearfix"></div>
    </div>
    <!-- //contact -->
    @endsection