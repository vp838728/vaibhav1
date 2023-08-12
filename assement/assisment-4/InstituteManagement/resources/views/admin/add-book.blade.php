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
								<form action="{{url('/add-book')}}" method="post" enctype="multipart/form-data">
								@csrf

									<div class="row">
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Title</label>
												<input type="text" name="title" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Subject</label>
												<select class="form-control"name="subject">
													<option value="Subject">Subject</option>
													<option value="html">HTML</option>
													<option value="css">CSS</option>
													
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group"name="title">
												<label class="form-label">Auther Name</label>
												<input type="text" name="AutherName" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Publisher</label>
												<input type="text"name="Publisher" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Department</label>
												<select class="form-control"name="Department">
													<option value="Department">Department</option>
													<option value="Computer">Computer</option>
													<option value="DataEntry">Data Entry</option>
													<option value="Management">Management</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Asset type</label>
												<select class="form-control"name="Assettype">
													<option value="Asset type">Asset type</option>
													<option value="Computer">Book</option>
													<option value="Management">Comics</option>
												</select>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Purchase Date</label>
												<input name="datepicker" name="title"class="datepicker-default form-control" id="datepicker">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Price</label>
												<input type="text"name="Price" class="form-control">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">file</label>
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