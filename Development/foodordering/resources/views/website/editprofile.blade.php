@extends('website.layout.main')
@section('midsection')
<!-- //banner -->
<!-- contact -->

<div class="mail">
    </br>
    </br>
    <div class="container">
        <h2 class="tittle-w3">EDIT<span>PROFILE</span></h2>

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
        <form action="{{url('/updateprofile/'.$data->id)}}" method="post" enctype="multipart/form-data">
            <div class="form-group">
                @csrf
                <label>USER NAME</label>
                <input type="text" name="username" value="{{$data->username}}" class="form-control"
                    placeholder="enter your name">
            </div>
            <div class="form-group">
                <label>FIRST NAME</label>
                <input type="text" name="name" value="{{$data->name}}" class="form-control"
                    placeholder="enter your name">
            </div>

            <div class="form-control">
                <LABEL>gen:</LABEL>
                <input type="radio" name="gen" value="male" @if($data->gen == "male") {{ "checked=checked"}} @endif>male
                <input type="radio" name="gen" value="female" @if($data->gen == "female") {{ "checked=checked"}}
                @endif>female
            </div>
            <div class="form-group">
                <LABEL>lag</LABEL>
                @php
                $lag=$data->lag;
                $lag_arr=explode(",",$lag);
                @endphp


                <div class="form-control">
                    <input type="checkbox" name="lag[]" id="hindi" value="gujarti" <?php if(in_array("hindi",$lag_arr)){
                        echo "checked" ; } ?>>
                    <label>Hindi</label>
                    <input type="checkbox" name="lag[]" id="english" value="english" <?php
                        if(in_array("english",$lag_arr)){ echo "checked" ; } ?>>
                    <label>english</label>
                    <input type="checkbox" name="lag[]" value="Gujarati" <?php if(in_array("Gujarati",$lag_arr)){
                        echo "checked" ; } ?>>
                    <label>Gujarati</label>

                </div>
            </div>
            <div class="form-group">
                <label>file:</label>
                <input type="file" name="file" class="form-control">
                <img src="{{url('website/upload/customer/'.$data->file)}}" width="20px" height="20px"
                    alt="Profile Image">

            </div>
            <div class="form-group">
                <label>EMAIL</LABEL>
                <input type="email" name="Email" value="{{$data->email}}" class="form-control"
                    placeholder="enter your name">
            </div>


            <div class="form-group">
    <select name="cid" class="form-control">
        <option>SELECT YOUR COUNTRY</OPTION>
        @if(!empty($countrie))
            @foreach($countrie as $country)
                @if($country->id == $data->cid)
                    <option value="{{$country->id}}" selected>{{$country->name}}</OPTION>
                @else
                    <option value="{{$country->id}}">{{$country->name}}</OPTION>
                @endif
            @endforeach
        @endif
    </select>
</div>

            <div class="form-group">
                <input type="submit" name="save" class="btn btn-primary">
            </div>


        </fo
        rm>
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