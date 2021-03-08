{{-- <x-backend>
<div class="content container" >
  <div class="page-inner">
	<div class="page-header">
		<h4 class="page-title"> Create New Dress </h4>
		<ul class="breadcrumbs">
			<li class="nav-home">
			<a href="#" class="text-decoration-none">
			<i class='bx bx-home-alt' ></i>
			</a>
			</li>
			<li class="separator">
			<i class="icofont-rounded-right"></i>
			</li>
			<li class="nav-item">
			<a href="#" class="text-decoration-none">Dress</a>
			</li>
			<li class="separator">
			<i class="icofont-rounded-right"></i>
			</li>
			<li class="nav-item">
			<a href="#" class="text-decoration-none"> List </a>
			</li>
		</ul>	
	</div>
	<div class="row">
		<div class="col-md-12">
		 <form action="{{route('dress.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
			<div class="card">
				<div class="card-header">
					<div class="d-flex align-items-center">
						<h4 class="card-title">New Dress Form </h4>
						<a class="btn btn-outline-primary btn-round ms-auto" href="{{ route('dress.index') }}">
						<i class="icofont-rounded-double-left"></i>
						Go Back
						</a>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12 col-lg-12">
                            <div class="row form-group">
                            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 form-group">
							<label for="name"> Name</label>
							<input type="text" class="form-control" id="name" placeholder="Enter Dress's Name " name="name">
                            </div>
						    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 form-group">
							<label for="title">  Title </label>
							<input type="text" class="form-control" id="title" placeholder="Enter Dress's Title " name="title">
						    </div>
                            </div>
							<div class="form-group">
								<label for="photo">Dress's Photo </label>
								<input type="file" name="photo" class="form-control" id="photo">
						    </div>
							<div class="form-group">
								<label for="page"> Book's Pages </label>
								<input type="text" name="page" class="form-control">
								</div>
							<div class="form-group">
								<label for="name"> Publisher's Year </label>
								<input type="text" name="publisheryear" class="form-control" id="publisheryear">
							</div>
                            <div class="form-group">
								<label> Language</label>
								<select class="form-control" name="languagesid">
								<option value="0"> Choose Book's Language </option>
								@foreach($languages as $language)
								<option value="{{$language->id}}">{{$language->name}}</option>
								@endforeach
								</select>
                            </div>
							<div class="form-group">
								<label> Category's Name </label>
								<select class="form-control select2" name="authorsid">
								<option value="0"> Choose Category's Name </option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
								</select>
                            </div>

							<div class="form-group">
								<label> Category's Name</label>
								<select class="form-control" name="categoryid">							<option value="0"> Choose Category's  Name </option>
								@foreach($dresses as $dress)
								<option value=" {{ $dress->$id }}">{{$dress->category->name}}</option>
								@endforeach
								</select>

							</div>

						    <div class="form-group">
								<div class="tab-content mt-2 mb-3" id="pills-tabContent">
								<div class="tab-pane fade show active" id="pills-price" role="tabpanel" aria-labelledby="pills-price-tab">
								<div class="row form-group">
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<label for="price"> Price </label>
								<input type="number" name="price" class="form-control" placeholder="Enter Book's Price" id="price">
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
								<label for="discount"> Discount </label>
								<input type="number" name="discount" class="form-control" placeholder="Enter Book's Discount" id="discount">
								</div>
								</div>
								</div>
								</div>
							</div>
                            <div class="form-group">
								<label for="summernote"> Dress's Description </label>
								<textarea class="form-control" id="summernote" name="description" rows="5"></textarea>
					        </div>
						</div>
					</div>
				</div>
			    <div class="card-action">
					<button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Save
					</button>
					<button type="reset" class="btn btn-danger">
					<i class="fas fa-times"></i>Cancel
					</button>
				</div>
			</div>
			</form>
		</div>
	</div>
  </div>
</div>
</x-backend> --}}
<x-backend>
	<div class="content" style="margin-left: 200px;">
		<div class="page-inner">
			<div class="page-header">
				<h4 class="page-title"> Create New Book </h4>
				<ul class="breadcrumbs">
					<li class="nav-home">
						<a href="#" class="text-decoration-none">
							<i class='bx bx-home-alt' ></i>
						</a>
					</li>
					<li class="separator">
						<i class="icofont-rounded-right"></i>
					</li>
					<li class="nav-item">
						<a href="#" class="text-decoration-none">Book</a>
					</li>
					<li class="separator">
						<i class="icofont-rounded-right"></i>
					</li>
					<li class="nav-item">
						<a href="#" class="text-decoration-none"> List </a>
					</li>
				</ul>	
			</div>
			<div class="row">
				<div class="col-md-12">

					<form action="{{ route('dress.store') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="card">
							<div class="card-header">
								<div class="d-flex align-items-center">
									<h4 class="card-title">New Dress Form </h4>
									<a class="btn btn-outline-primary btn-round ms-auto" href="{{ route('dress.index') }}">
										<i class="icofont-rounded-double-left"></i>
										Go Back
									</a>
								</div>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<div class="form-group">
											<label for="name"> Name </label>
											<input type="text" class="form-control" id="name" placeholder="Enter Dress's Name " name="name">
										</div>
										<div class="row form-group">
											<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 form-group">
											<label for="title"> Title </label>

											<input type="text" class="form-control" id="title" placeholder="Enter Book's Title " name="title" >
											</div>
											{{-- mmtitle --}}
										</div>
										<div class="row form-group">
											{{-- annotation --}}
											{{-- publisher year --}}
										</div>
										<div class="form-group">
											<label for="name"> Dress's Photo</label>
											<input type="file" name="photo" class="form-control">
										</div>
										<div class="form-group">
											<label>Category's Name </label>
											<select class="form-control select2" name="categoryid">
												<option value="0"> Choose Dress's Category </option>
												@foreach($categories as $category)
												<option value="{{ $category->id }}"> {{ $category->name }} </option>
												@endforeach
											</select>

										</div>
										{{-- authors --}}
										{{-- <div class="form-group">
											<label> Genre's Name </label>
											<select class="form-control select2" name="genresid[]" multiple="">
												<option value="0"> Choose Genre </option>
												@foreach($genres as $genre)
													<option value="{{ $genre->id }}"> {{ $genre->name }} </option>
												@endforeach
											</select>
										</div> --}}
										<div class="form-group">
										<div class="tab-content mt-2 mb-3" id="pills-tabContent">
											<div class="tab-pane fade show active" id="pills-price" role="tabpanel" aria-labelledby="pills-price-tab">
											<div class="row form-group">
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
											<label for="price"> Price </label>
											<input type="number" name="price" class="form-control" placeholder="Enter Book's Price" id="price">
											</div>
											<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
											<label for="discount"> Discount </label>
											<input type="number" name="discount" class="form-control" placeholder="Enter Book's Discount" id="discount">
											</div>
                                            </div>
										    </div>
										</div>
										</div>
										<div class="form-group">
									    <label for="summernote"> Description </label>
									    <textarea class="form-control" id="summernote" name="description" rows="5"></textarea>	
										</div>
									
									</div>									
								</div>
							</div>
							<div class="card-action">
								<button type="submit" class="btn btn-primary"> 
									<i class="fas fa-save"></i> Save
								</button>
								<button type="reset" class="btn btn-danger">
									<i class="fas fa-times"></i>Cancel
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</x-backend>