<x-backend>
  <div class="content" style="margin-left: 200px;">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Category </h4>
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
            <a href="#" class="text-decoration-none">Category </a>
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
                    <a class="btn btn-outline-primary btn-round ms-auto"  href="{{ route('category.index') }}">
                      <i class="icofont-rounded-double-left"></i>
                      Go Back
                    </a>
                  </div>
                </div>
                <form action="{{ route('category.update',$category->id) }}" method="POST">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                  <div class="form-group row">
                  <label for="name_id" class="col-sm-2 col-form-label"> Name </label>
                  <div class="col-sm-10">
                  <input type="text" class="form-control @error('name')is-invalid @enderror" id="name_id" name="name"  value="{{$category->name}}">
                  @if($errors->first('name'))
                    <p class="text-danger">{{$errors->first('name')}}</p>
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