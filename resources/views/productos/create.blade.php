@extends('layouts.app')

@section('content')

    <form action="{{ route('productos.store') }} " method="POST" enctype="multipart/form-data">
    @csrf
        <div class="card">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                        <div class="row">
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="stocks-input">Nombre del Producto</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese nombre del producto..." required="">
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Precio</label>
                                    <div class="input-group has-validation mb-3">
                                        <span class="input-group-text" id="product-price-addon">$</span>
                                        <input type="number" class="form-control" name="precio" id="precio" placeholder="0 Bs" aria-label="Price" aria-describedby="product-price-addon" required="">
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="product-price-input">Stock</label>
                                    <div class="input-group has-validation mb-3">
                                        <span class="input-group-text" id="product-price-addon">$</span>
                                        <input type="number" class="form-control" name="stock" id="stock" placeholder="Ingrese cantidad" aria-label="Price" aria-describedby="product-price-addon" required="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label" for="orders-input">Imagen</label>
                                    <input type="file" class="form-control" name="imagen" id="imagen" placeholder="Imagen" required="">
                                </div>
                            </div>

                            <!-- <div class="row g-3">
                                <div class="col-lg-6">
                                    <div class="input-group">
                                        <label class="input-group-text" for="category_id">Seleccione una categoría:</label>
                                        <select class="form-select" id="category_id" name="category_id">
                                            @if ($categorias->isEmpty())
                                                <option>No hay categorías</option>
                                            @else
                                                @foreach ($categorias as $category)
                                                    <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="input-group">
                                        <label class="input-group-text" for="category_id">Seleccione una proveedor:</label>
                                        <select class="form-select" id="category_id" name="category_id">
                                            @if ($categorias->isEmpty())
                                                <option>No hay categorías</option>
                                            @else
                                                @foreach ($categorias as $category)
                                                    <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                            </div> -->

                            <div class="row g-3">
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <label class="input-group-text" for="category_id">Seleccione una categoría:</label>
                                        <select class="form-select" id="category_id" name="category_id">
                                            @if ($categorias->isEmpty())
                                                <option>No hay categorías</option>
                                            @else
                                                @foreach ($categorias as $category)
                                                    <option value="{{ $category->id }}">{{ $category->nombre }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="input-group">
                                        <label class="input-group-text" for="provider_id">Seleccione un proveedor:</label>
                                        <select class="form-select" id="provider_id" name="provider_id">
                                            @if ($proveedores->isEmpty())
                                                <option>No hay proveedores</option>
                                            @else
                                                @foreach ($proveedores as $provider)
                                                    <option value="{{ $provider->id }}">{{ $provider->nombre }}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-9">
                                    <!-- <label class="form-label" for="meta-description-input">Descriptción</label> -->
                                    <textarea class="form-control" name="descripcion" id="descripcion" placeholder="Ingresar descripcion" rows="1"></textarea>
                                </div>
                            </div>


                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end tab-pane -->
                </div>
                <!-- end tab content -->
            </div>
            <!-- end card body -->
            <div class="text-end mb-3">
                <button type="submit" class="btn btn-success w-sm">Añadri Producto</button>
            </div>
        </div>
    </form>
@endsection
