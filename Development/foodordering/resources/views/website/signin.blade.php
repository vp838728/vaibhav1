@extends('website.layout.main')
@section('midsection')
@include('sweetalert::alert')
<!-- //banner -->
<!-- contact -->

<div class="mail">
    </br>
    </br>
    <div class="container">
        <h2 class="tittle-w3">Sign  <span>In</span></h2>

        <div class="clearfix"></div>
    </div>

    <!-- 
    <div class="col-md-12 container mail-grid1-form">
        <h3 class="tittle-w3"><span>Send a </span>Message</h3>
        <form action="#" method="post">
            <input type="text" name="Name" placeholder="Name" required="" />
            <input type="email" name="Email" placeholder="Email" required="" />
            <textarea name="Message" placeholder="Type Your Text Here...." required=""></textarea>
            <input type="submit" value="Submit">
        </form>
    </div> -->
    <div class="container col-md-12 ">
        @if (Session::has('SUCESSS'))
        <div class="alert alert-success">

            <span>{{ Session::get('SUCESSS') }}</span>

        </div>
        @elseif(Session::has('fail'))
        <div class="alert alert-danger">

            <span>{{Session::get('fail') }}</sapn>

        </div>
        @endif
        <form action="{{url('/signin')}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label>USER NAME</label>
                <input type="text" name="username" value="{{old('username')}}" class="form-control" placeholder="enter your name">
            </div>
            @error('username')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>FIRST NAME</label>
                <input type="text" name="name" class="form-control"value="{{old('name')}}" placeholder="enter your name">
            </div>

            @error('name')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <LABEL>PASSWORD</LABEL>
                <input type="password" name="pass" class="form-control" value="{{old('pass')}}"placeholder="enter your name">
            </div>

            @error('pass')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-control">
                <LABEL>gen:</LABEL>
                <input type="radio" name="gen" value="male" @if(old('gen') == 'male') checked @endif>male
                <input type="radio" name="gen" value="female"@if(old('gen') == 'female') checked @endif>female
            </div>

            @error('gen')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <LABEL>lag</LABEL>

                <div class="form-control">
                    <input type="checkbox" name="lag[]" id="hindi" value="gujarti"@if(in_array('gujarti', old('lag', []))) checked @endif>
                    <label>Gujarti</label>
                    <input type="checkbox" name="lag[]" id="english" value="english"@if(in_array('english', old('lag', []))) checked @endif>
                    <label>english</label>
                    <input type="checkbox" name="lag[]" value="hindi"@if(in_array('hindi', old('lag', []))) checked @endif>
                    <label>hindi</label>

                </div>
            </div>
            
            @error('lag')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>file:</label>
                <input type="file" name="file" class="form-control">
            </div>
            
            @error('file')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label>EMAIL</LABEL>
                <input type="email" name="Email"value="{{old('Email')}}" class="form-control" placeholder="enter your name">
            </div>
            
            @error('Email')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                <LABEL>CPASSWORD</LABEL>
                <input type="password" name="cpass"value="{{old('cpass')}}" class="form-control" placeholder="enter your name">
            </div>
            
            @error('cpass')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror

            <div class="form-group">
                <select name="cid" class="form-control">

                    <option>SELECT YOUR COUNTRY</OPTION>
                    @if(!empty($countrie))
                    @foreach($countrie as $data)
                    <option value="{{$data->id}}">{{$data->name}}</OPTION>
                    @endforeach
                    @endif
            </div>
            
            @error('cid')
            <div class="alert alert-danger">{{$message}}</div>
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