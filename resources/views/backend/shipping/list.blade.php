
<x-backend>
  <div class="content" style="margin-left: 200px;">
    <div class="page-inner">
      <div class="page-header">
        <h4 class="page-title">Shipping</h4>
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
      <div class="row row-md-4" style="margin-left: 0px;">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="d-flex align-items-center">
                <h4 class="card-title" style="margin-left: 30px;"> List </h4>

                <a class="btn btn-primary btn-round ms-auto" href="{{ route('shipping.create') }}">
                  <i class='bx bx-plus' ></i>
                  Add New
                </a>
              </div>
            </div>
            <div class="card-body">
              @if(session('successMsg') != NULL )
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                  <strong> ✅ SUCCESS!</strong>
                  {{ session('successMsg') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
 
              <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Fee</th>
                      <th style="width: 300px">Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Fee</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @php $i = 1; @endphp
                    @foreach($shippings as $shipping)
                      @php
                        $id = $shipping->id;
                        $fee = $shipping->fee;
                      @endphp

                      <tr>
                        <td> {{ $i++ }} </td>
                        <td> {{ $fee }} </td>
                        <td>
                        <a href="{{ route('shipping.edit',$id) }}" class="btn btn-warning">
                            <span class="btn-label">
                              <i class="icofont-ui-settings"></i>
                            </span>
                            Edit
                          </a>

                          <form class="d-inline-block" action="{{ route('shipping.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure want to delet?')">
                            @csrf
                           @method('DELETE')
                            <button class="btn btn-outline-danger">
                              <span class="btn-label">
                                <i class="icofont-trash"></i>
                              </span>
                              Remove
                            </button>
                          </form>

                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 

</x-backend> 