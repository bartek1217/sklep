@extends("header")

<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Lista produktów:</h1>
    <!-- Cards products -->
    <div class="row">
        @foreach ($products as $product)
        <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="card m-1">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }} </h5>
                    <p class="card-text">Cena: {{ Helper::dot2com($product->price) }} zł</p>
                    <p class="card-text">Pozostało: {{ $product->availability }} szt.</p>
                    <div class="input-group">
                        <div class="input-group-prepend-sm">
                            <button id="product_quantity_subtract_{{ $product->id }}" class="btn btn-outline-secondary" type="button" onclick="change_product_quantity_subtract('{{ $product->id }}')">-</button>
                        </div>
                        <input id="product_quantity_{{ $product->id }}" type="text" class="form-control-sm" value="1" size="1" onchange="change_product_quantity('{{ $product->id }}')">
                        <div class="input-group-append-sm">
                            <button id="product_quantity_add_{{ $product->id }}" class="btn btn-outline-secondary" type="button" onclick="change_product_quantity_add('{{ $product->id }}')">+</button>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary btn-sm m-1" onclick="add_to_basket('{{ $product->id }}')">Dodaj do koszyka</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</main>

<script src="js/products.js"></script>

@extends("footer")