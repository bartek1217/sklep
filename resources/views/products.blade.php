@extends("header")

    <!-- Begin page content -->
    <main role="main" class="container">
        <h1 class="mt-5">Lista produktów:</h1>
        <!-- Table with products -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nazwa</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Stan</th>
                    <th scope="col"> </th>
                    <th scope="col"> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $product->name }}</th>
                    <td>{{ Helper::dot2com($product->price) }}</td>
                    <td>{{ $product->availability }}</td>
                    <td>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-secondary" type="button">-</button>
                            </div>
                            <input type="text" class="form-control-sm" value="1" size="1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>
                    </td>
                    <td><button type="button" class="btn btn-primary">Dodaj do koszyka</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@extends("footer")