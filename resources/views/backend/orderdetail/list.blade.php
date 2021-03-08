<x-backend>
  <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title"> Category</h4>
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
                                <a href="#" class="text-decoration-none">Category</a>
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

                                        <a class="btn btn-primary btn-round ms-auto" href="">
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
                                            <tbody></tbody>
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