@extends('admin.layout.main')

@section('midsection')
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
			
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Edit Professor</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="edit-professor.html">Professors</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Professor</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-xl-12 col-xxl-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
								<h5 class="card-title">Basic Info</h5>
							</div>
							<div class="card-body">
							<form action="{{url('/update-professors/'.$data->id)}}" method="post" enctype="multipart/form-data">
							
							<div class="row">
									
									<div class="col-lg-6 col-md-6 col-sm-12">
									
										<div class="form-group">
										@csrf
											<label class="form-label">First Name</label>
											<input type="text" name="fname"  value="{{$data->fname}}"class="form-control">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Last Name</label>
											<input type="text" name="lname"  value="{{$data->lname}}"class="form-control">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Email Here</label>
											<input type="text" name="email" value="{{$data->email}}"class="form-control">
										</div>
									</div>
									
									
									
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Mobile Number</label>
											<input type="text" name="mobile" value="{{$data->mobile}}" class="form-control">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Gender</label>
											<select class="form-control" name="gen">
												<option value="Gender">Gender</option>
												<option value="Male"@if($data->gen=="Male") selected @endif>Male</option>
												<option value="Female"@if($data->gen=="Female") selected @endif>Female</option>
											</select>
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Designation</label>
											<input type="text" name="Designation" value="{{$data->Designation}}"class="form-control">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Department</label>
											<select class="form-control" name="Department">
												<option value="Department">Department</option>
												<option value="It"@if($data->Department=="It") selected @endif>It</option>
												<option value="Computer"@if($data->Department=="Computer") selected @endif>Computer</option>
												
											</select>
										</div>
									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Education</label>
											<input type="text" name="Education" value="{{$data->Education}}" class="form-control">
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<div class="form-group fallback w-100">
										<td><img class="rounded-circle" width="35" src="{{url('admin/upload/customer/'.$data->file)}}" width="100px" height="100px" alt=""></td>

											<input type="file"  name="file"class="dropify" data-default-file="">
										</div>
									</div>
									<div class="col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="btn btn-primary">Submit</button>
										<button type="submit" class="btn btn-light">Cencel</button>
									</div>
								</div>
							</form>
                            </div>
                        </div>
                    </div>
				</div>
				
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->


      @endsection