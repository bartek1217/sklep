<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Bartosz Piątkowski">

    <title>Sklep</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- CSS style -->
    <link href="/css/style.css" rel="stylesheet">

</head>

<body>

    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">Sklep</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Zobacz zamówienia</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Koszyk: 0,00 zł</button>
                </form>
            </div>
        </nav>
    </header>

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
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
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
            </tbody>
        </table>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Wykonał Bartosz Piątkowski.</span>
        </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-slim.min.js"><\/script>')
    </script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>