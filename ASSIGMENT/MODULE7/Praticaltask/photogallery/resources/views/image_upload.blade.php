@extends('layout.main')
@section('mainsection')
</br>



    <form action="{{url('/image_upload')}}" method="post"enctype="multipart/form-data">
        <h1 class="text-center">PHOTO UPLOAD </H1>

            <div class="container">
                <div class="row">
                    <div class="container my-27">
                        <a href="{{url('/gallery')}}" class="btn btn-primary">View page gallery</a>
                    </div>
                </div>
        <div class="container col-md-6 my-3">
            <div class="form-groups">
            @csrf
                
                <LABEL>NAME:</LABEL>
                <input type="text" name="name" class="form-control" placeholder="enter your name">
            </div>
            @error('name')
            <div class="alert alert-danger">{{$meassage}}</div>
            @enderror

            </BR>
            <div class="form-groups">
                <label>File</label>
                <input type="file" name="file" class="form-control" placeholder="enter your name">
            </div>
            </br>
            <div class="form-groups">
                <textarea name="description" id="" cols="30" rows="8" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary my-4 py-8">
            </div>
        </div>
        </fieldset>
    </form>
    @endsection
    <!-- Remove the container if you want to extend the Footer to full width. -->