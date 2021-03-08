
{{-- <x-backend>
  <div class="content" style="margin-left: 200px;">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Shipping </h4>
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
            <a href="#" class="text-decoration-none">Shipping </a>
          </li>
          <li class="separator">
            <i class="icofont-rounded-right"></i>
          </li>
          <li class="nav-item">
            <a href="#" class="text-decoration-none"> List </a>
          </li>
        </ul>
      </div>
      <div class="row row-md-4" style="margin-top: 18px;margin-left: 18px;">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title"> Create New </h4>
                    <a class="btn btn-outline-primary btn-round ms-auto"  href="{{ route('shipping.index') }}">
                      <i class="icofont-rounded-double-left"></i>
                      Go Back
                    </a>
                  </div>
                </div>
                <form action="{{ route('shipping.store') }}" method="POST">
                  @csrf
                <div class="card-body">
                  <div class="form-group row">
                  <label for="fee_id" class="col-sm-2 col-form-label"> Fee</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control @error('fee')is-invalid @enderror" id="fee_id" name="fee"  value="{{$shipping->fee}}">
                  @if($errors->first('fee'))
                    <p class="text-danger">{{$errors->first('fee')}}</p>
                  @endif
                  </div>
                  </div>
                  {{-- <div class="form-group row">
                     <label for="photo_id" class="col-sm-2 col-form-label"> Photo </label>
                      <div class="col-sm-10">
                      <input type="file" id="photo_id" name="photo">
                      </div>
                  </div> --}}                   
                </div>
                <div class="card-action">
                  <button type="submit" class="btn btn-primary"> <i class="icofont-save"></i> Save </button>
                  <button type="reset" class="btn btn-outline-secondary"> <i class="icofont-close"></i> </i> Cancel </button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
{{-- </x-backend>  --}} 
<x-backend>
  <div class="content" style="margin-left: 200px;">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Shipping </h4>
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
            <a href="#" class="text-decoration-none">Shipping </a>
          </li>
          <li class="separator">
            <i class="icofont-rounded-right"></i>
          </li>
          <li class="nav-item">
            <a href="#" class="text-decoration-none"> List </a>
          </li>
        </ul>
      </div>
      <div class="row row-md-4" style="margin-top: 18px;margin-left: 18px;">
        <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title"> Update Existing Data </h4>
                    <a class="btn btn-outline-primary btn-round ms-auto"  href="{{ route('shipping.index') }}">
                      <i class="icofont-rounded-double-left"></i>
                      Go Back
                    </a>
                  </div>
                </div>
                <form action="{{route('shipping.store')}}" method="POST">
                  @csrf
          
                <div class="card-body">
                  <div class="form-group row">
                  <label for="fee_id" class="col-sm-2 col-form-label"> Fee</label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control @error('fee')is-invalid @enderror" id="fee_id" name="fee"  value="{{old('fee')}}">
                  @if($errors->first('fee'))
                    <p class="text-danger">{{$errors->first('fee')}}</p>
                    @endif
                  </div>
                  </div>
                                  
                </div>
                <div class="card-action">
                  <button type="submit" class="btn btn-primary"> <i class="icofont-save"></i> Save </button>
                  <button type="reset" class="btn btn-outline-secondary"> <i class="icofont-close"></i> </i> Cancel </button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div> 
</x-backend> 