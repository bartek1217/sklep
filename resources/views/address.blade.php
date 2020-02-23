@extends("header")
<!-- Begin page content -->
<main role="main" class="container">
    <h1 class="mt-5">Podaj dane do wysyłki:</h1>
    <div class="row">
        <form action="/basket/summary" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
            <div class="form-group">
                <label for="name">Imię: </label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label for="surname">Nazwisko: </label>
                <input type="text" class="form-control" name="surname" id="surname">
            </div>
            <div class="form-group">
                <label for="street">Ulica: </label>
                <input type="text" class="form-control" name="street" id="street">
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="city">Miejsowość: </label>
                    <input type="text" class="form-control" name="city" id="city">
                </div>
                <div class="form-group col-md-4">
                    <label for="zip">Kod pocztowy: </label>
                    <input type="text" class="form-control" name="zip" id="zip">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Dalej</button>
        </form>
    </div>
</main>
@extends("footer")