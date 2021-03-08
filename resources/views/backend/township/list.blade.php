<x-backend>
<div class="main-panel" style="margin-left: 200px;">
 <div class="content">
    <div class="page-inner">
     <div class="page-header">
        <h4 class="page-title"> Township</h4>
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
            <a href="#" class="text-decoration-none">Township</a>
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
      <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
            <h4 class="card-title"> List </h4>
            <a class="btn btn-primary btn-round ms-auto" href="{{route('township.create')}}">
            <i class='bx bx-plus' ></i>
            Add New
            </a>
            </div>
        </div>
        <div class="card-body">
                @if(session('successMsg')!=NULL)
                <div class="alert alert-success alert-dismissable fade show">
                <strong>SUCCESS!</strong>
                {{session('successMsg')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="table-responsive">
                <table id="add-row" class="display table table-striped table-hover" >
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th style="width: 10%">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                   <th>#</th>
                   <th>Name</th>
                   <th>Action</th>
                </tr>
                </tfoot>
        <tbody>
                 @php $i=1; @endphp 
                 @foreach($townships as $township)
                 @php
                 $id=$township->id;
                 $name=$township->name;
                 @endphp
          <tr>
                  <td>{{$i++}}</td>
                  <td>{{$name}}</td>
                  <td>
                  <a href="{{route('township.edit',$id)}}" class="btn btn-warning">
                  <span><i class="icofont-ui-settings">
                  </i></span>   
                  Edit
                  </a>
                   <form class="d-inline-block" action="{{route('township.destroy',$id)}}" method="POST" onsubmit="return confrim('Are you sure want to delete?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger">
                        <span>
                            <i class="iconfont-trash"></i>
                        </span>
                        Remove
                    </button>
                   </form>
                  </td>
                 <!--  <td>
                 <a href="" class="btn btn-outline-danger">
                 <span><i class="icofont-trash"></i></span>
                  Remove</a></td> -->
          </tr>
          @endforeach()
        </tbody>
        </table>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
 </div>  
</div>
</x-backend>
