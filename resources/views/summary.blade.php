@extends("header")
<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Podsumowanie:</h1>
    <div class="row">
        <h2 class="mt-5">Adres wysyłki:</h2>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <th scope="row">Imię</th>
                    <td>{{ cache('basket_address')['name'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Nazwisko</th>
                    <td>{{ cache('basket_address')['surname'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Ulica</th>
                    <td>{{ cache('basket_address')['street'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Miejscowość</th>
                    <td>{{ cache('basket_address')['city'] }}</td>
                </tr>
                <tr>
                    <th scope="row">Kod pocztowy</th>
                    <td>{{ cache('basket_address')['zip'] }}</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="row">
        <h2 class="mt-5">Produkty:</h2>
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
        <form action="/basket/save" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <button type="submit" class="btn btn-primary">Zamawiam</button>
        </form>
    </div>
</main>
@extends("footer")