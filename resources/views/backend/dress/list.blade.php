<x-backend>
    <div class="main-panel" style="margin-left: 200px;">
        <div class="content">
            <div class="page-inner">
                <div class="page-header">
                    <h4 class="page-title"> Dress</h4>
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
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex align-items-center">
                                    <h4 class="card-title"> List </h4>
                                    <a class="btn btn-primary btn-round ms-auto" href="{{ route('dress.create') }}">
                                        <i class='bx bx-plus' ></i>
                                        Add New
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover" >
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Category's Name</th>
                                            <th>Photo</th>
                                            <th>Pice</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Category's Name</th>
                                            <th>Photo</th>
                                            <th>Pice</th>
                                            <th>Action</th>
                                        </tr>
                                        </tfoot>
                                        <tbody>
                                        @php $i = 1; @endphp
                                        @foreach($dresses as $dress)
                                            @php
                                                $id = $dress->id;
                                            @endphp
                                            {{--  @php
                                               $id = $dress->id;
                                               $name = $dress->name;
                                               $photo = $dress->photo;
                                               $price = $dress->price;
                                             @endphp --}}
                                            <tr>
                                                <td> {{ $i++ }} </td>
                                                <td> {{ $dress->name }} </td>
                                                <td>
                                                    {{ $dress->category->name }}
                                                </td>
                                                <td> {{ $dress->photo }} </td>
                                                <td> {{ $dress->price }} </td>
                                                <td>

                                                    <a href="{{ route('dress.edit',$id) }}" class="btn btn-warning">
                            <span class="btn-label">
                              <i class="icofont-ui-settings"></i>
                            </span>
                                                        Edit
                                                    </a>

                                                    <form class="d-inline-block" action="{{ route('dress.destroy',$id) }}" method="POST" onsubmit="return confirm('Are you sure want to delet?')">
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

    </div>
</x-backend>
