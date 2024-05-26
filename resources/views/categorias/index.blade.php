@extends('layouts.app')

@section('content')
    <div class="col-xl-12 col-lg-8">
        <div>
            <div class="card">
                <div class="card-header border-0">
                    <div class="row g-4">
                        <div class="col-sm-auto">
                            <div>
                                <!-- MODAL -->
                                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalgrid"><i class="ri-add-line align-bottom me-1"></i> Añadir Categoria </button>
                                <div class="modal fade" id="exampleModalgrid" tabindex="-1" aria-labelledby="exampleModalgridLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title fw-bold" id="exampleModalgridLabel">Grid Modals</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('categorias.store') }} " method="POST" enctype="multipart/form-data">
                                                @csrf
                                                    <div class="row g-3">
                                                        <div class="col-xxl-12">
                                                            <div>
                                                                <label for="firstName" class="form-label">Nombre Categoria</label>
                                                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese Categoria">
                                                            </div>
                                                            <div>
                                                                <label for="firstName" class="form-label">Description</label>
                                                                <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Ingrese Descripcion">
                                                            </div>
                                                            <div>
                                                                <label for="firstName" class="form-label">Imagen</label>
                                                                <input type="file" class="form-control" name="imagen" id="imagen">
                                                            </div>
                                                        </div><!--end col-->
                                                        <div class="col-lg-12">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" class="btn btn-success">Submit</button>
                                                            </div>
                                                        </div><!--end col-->
                                                    </div><!--end row-->
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- MODAL-END -->
                            </div>
                        </div>
                        <div class="col-sm">
                            <div class="d-flex justify-content-sm-end">
                                <div class="search-box ms-2">
                                    <input type="text" class="form-control" id="searchProductList" placeholder="Search Products...">
                                    <i class="ri-search-line search-icon"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div id="customerList">
                                    <div class="table-responsive table-card mt-3 mb-1">
                                        <table class="table align-middle table-nowrap" id="customerTable">
                                            <thead class="table-light">
                                                <tr>
                                                    <th class="sort" data-sort="customer_name">#</th>
                                                    <th class="sort" data-sort="customer_name">Nombre</th>
                                                    <th class="sort" data-sort="email">Descripcion</th>
                                                    <th class="sort" data-sort="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="list form-check-all">
                                                @foreach( $category as $cat)
                                                    <tr>
                                                        <td class="id" style="display:none;"><a href="javascript:void(0);"
                                                                class="fw-medium link-primary">#VZ2101</a></td>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>
                                                            <div>
                                                            <img class="image avatar-xs rounded-circle" alt="{{ $cat->nombre }}" src="{{ asset('images/' . $cat->imagen) }}">
                                                            </div>
                                                        </td>
                                                        <td>{{ $cat->nombre}}</td>
                                                        <td>{{ $cat->descripcion}}</td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <div class="edit">
                                                                    <button class="btn btn-sm btn-success edit-item-btn"
                                                                        data-bs-toggle="modal" data-bs-target="#showModal">Edit</button>
                                                                </div>
                                                                <div class="remove">
                                                                    <button class="btn btn-sm btn-danger remove-item-btn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#deleteRecordModal">Remove</button>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                        <div class="noresult" style="display: none">
                                            <div class="text-center">
                                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                                    colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                                </lord-icon>
                                                <h5 class="mt-2">Sorry! No Result Found</h5>
                                                <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                                    orders for you search.</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-end">
                                        <div class="pagination-wrap hstack gap-2">
                                            <a class="page-item pagination-prev disabled" href="#">
                                                Previous
                                            </a>
                                            <ul class="pagination listjs-pagination mb-0"></ul>
                                            <a class="page-item pagination-next" href="#">
                                                Next
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <!-- end card -->
        </div>
    </div>
@endsection
