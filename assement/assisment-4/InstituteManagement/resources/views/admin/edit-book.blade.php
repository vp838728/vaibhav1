@extends('admin.layout.main')

@section('midsection')

		
		
        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
            <div class="container-fluid">
				    
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Add Library Assets</h4>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Library</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0);">Add Library</a></li>
                        </ol>
                    </div>
                </div>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="card">
							<div class="card-header">
								<h4 class="card-title">Add Book Assets</h4>
							</div>
							<div class="card-body">
								<form action="{{url('/update-book/'.$data->id)}}" method="post" enctype="multipart/form-data">
								@csrf

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Title</label>
												<input type="text" name="title" value="{{$data->title}}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Subject</label>
												<select class="form-control"name="subject">
													<option value="Subject"@if($data->subject=="Subject") selected @endif>Subject</option>
													<option value="html"@if($data->subject=="html") selected @endif>HTML</option>
													<option value="css"@if($data->subject=="css") selected @endif>CSS</option>
													
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group"name="title">
												<label class="form-label">Auther Name</label>
												<input type="text" name="AutherName"value="{{$data->AutherName}}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publisher</label>
												<input type="text"name="Publisher"value="{{$data->Publisher}}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<select class="form-control"name="Department">
													<option value="Department">Department</option>
													<option value="Computer"@if($data->Department=="Computer") selected @endif>Computer</option>
													<option value="DataEntry"@if($data->Department=="DataEntry") selected @endif>Data Entry</option>
													<option value="Management"@if($data->Department=="Management") selected @endif>Management</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Asset type</label>
												<select class="form-control"name="Assettype">
													<option value="Assettype"@if($data->Department=="Assettype") selected @endif>Asset type</option>
													<option value="Computer"@if($data->Department=="Computer") selected @endif>Book</option>
													<option value="Management"@if($data->Department=="Management") selected @endif>Comics</option>
												</select>
											</div>
										</div>
										
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Price</label>
												<input type="text"name="Price"value="{{$data->Price}}" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">file</label>
												<td><img class="rounded-circle" width="120px" src="{{url('admin/upload/book/'.$data->file)}}" width="100px" height="100px" alt=""></td>

												<input type="file"name="file" class="form-control">
											</div>
										</div>
										
									
									
										<div class="col-lg-12 col-md-12 col-sm-12">
											<input type="submit"  name="submit"class="btn btn-primary">
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