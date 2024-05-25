@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#addproduct-general-info" role="tab" aria-selected="true">
                        General Info
                    </a>
                </li>
            </ul>
        </div>
        <!-- end card header -->
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="addproduct-general-info" role="tabpanel">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="stocks-input">Nombre del Producto</label>
                                <input type="text" class="form-control" id="stocks-input" placeholder="Ingrese nombre del producto..." required="">
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="product-price-input">Precio</label>
                                <div class="input-group has-validation mb-3">
                                    <span class="input-group-text" id="product-price-addon">$</span>
                                    <input type="number" class="form-control" id="product-price-input" placeholder="0 Bs" aria-label="Price" aria-describedby="product-price-addon" required="">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="product-price-input">Stock</label>
                                <div class="input-group has-validation mb-3">
                                    <span class="input-group-text" id="product-price-addon">$</span>
                                    <input type="number" class="form-control" id="product-price-input" placeholder="Ingrese cantidad" aria-label="Price" aria-describedby="product-price-addon" required="">
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="mb-3">
                                <label class="form-label" for="orders-input">Categoria</label>
                                <input type="text" class="form-control" id="orders-input" placeholder="Orders" required="">
                            </div>
                            <div class="col-md-6">
                            <!-- <div class="mb-3">
                                <label for="ForminputState" class="form-label">Categoria</label>
                                <div class="choices" data-type="select-one" tabindex="0" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select id="ForminputState" class="form-select choices__input" data-choices="" data-choices-sorting="true" hidden="" tabindex="-1" data-choice="active"><option value="Choose..." data-custom-properties="[object Object]">Choose...</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choose..." data-custom-properties="[object Object]" aria-selected="true">Choose...</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><input type="text" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="null" placeholder=""><div class="choices__list" role="listbox"><div id="choices--ForminputState-item-choice-1" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="..." data-select-text="Press to select" data-choice-selectable="" aria-selected="true">...</div><div id="choices--ForminputState-item-choice-2" class="choices__item choices__item--choice is-selected choices__item--selectable" role="option" data-choice="" data-id="2" data-value="Choose..." data-select-text="Press to select" data-choice-selectable="">Choose...</div></div></div></div>
                            </div> -->
                        </div>
                        </div>
                        <div>
                            <label class="form-label" for="meta-description-input">Descriptción</label>
                            <textarea class="form-control" id="meta-description-input" placeholder="Enter meta description" rows="3"></textarea>
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
            <button type="submit" class="btn btn-success w-sm">Submit</button>
        </div>
    </div>
@endsection
