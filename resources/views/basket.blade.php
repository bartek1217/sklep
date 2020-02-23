@extends("header")
<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Koszyk:</h1>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Produkt</th>
                    <th scope="col">Cena</th>
                    <th scope="col">Ilość</th>
                    <th scope="col">Kwota</th>
                </tr>
            </thead>
            <tbody>
                @foreach (cache('basket')['items'] as $product)
                <tr>
                    <th scope="row">{{ $product['name'] }}</th>
                    <td>{{ Helper::dot2com($product['price']) }} zł</td>
                    <td>{{ $product['quantity'] }}</td>
                    <td>{{ Helper::dot2com($product['totalPrice']) }} zł</td>
                </tr>
                @endforeach
            </tbody>
            <thead>
                <tr>
                    <th colspan="3">Łączna kwota: </th>
                    <th scope="col">{{ Helper::dot2com(cache('basket')['totalPrice'] ?? "0,00")}} zł</th>
                </tr>
            </thead>
        </table>
        <a href="basket/address" class="btn btn-primary">Przejdź do zamówienia</a>
    </div>
</main>
@extends("footer")