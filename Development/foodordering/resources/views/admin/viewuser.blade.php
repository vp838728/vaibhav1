@extends('admin.layout.main')
@section('midsection')
<!-- //banner -->
<!-- about-top -->
	
	<!-- //about-top -->
	<!--count-->
    <!DOCTYPE html>
<html>
<head>
  <title>Profile Card</title>
  <style>
    /* Profile card styles */
    .profile-card {
      width: 300px;
      margin: 0 auto;
      background-color: #f1f1f1;
      padding: 20px;
      border-radius: 5px;
    }

    .profile-card img {
      width: 100%;
      border-radius: 50%;
    }

    .profile-card h2 {
      text-align: center;
      margin-top: 10px;
    }

    .profile-card p {
      text-align: center;
      margin-top: 5px;
    }

    /* Media queries for different screen sizes */
    @media only screen and (min-width: 768px) {
      /* Styles for desktop */
      .profile-card {
        width: 400px;
      }
    }

    @media only screen and (max-width: 480px) {
      /* Styles for mobile */
      .profile-card {
        width: 250px;
      }
    }
  </style>
  </br>
  </br>
  </br>
  </br>
</head>
<body>
  </br>
  <div class="profile-card my-3">
    <img src="{{url('website/upload/customer/'.$data->file)}}" width="200px" height="200px" alt="Profile Image">
    <h2>{{$data->username }}</h2>
    <p>{{$data->email}}</p>
    <h2>{{$data->gen }}</h2>

  </div>
  </br>
  </br>
 

				<!--count-->
	<!--team-->
	

@endsection