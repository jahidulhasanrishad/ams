<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- font awesome css -->
    <script src="https://kit.fontawesome.com/a89bedaa59.js" crossorigin="anonymous"></script>
    <!-- sweet alear -->
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
     

    <title>@yield('backtitle')</title>
    
    <style>
    .navbar-light .navbar-nav .nav-link, .navbar-light .navbar-nav .show>.nav-link {
    color: #fff!important;}
    .navbar-light .navbar-brand {
    color: #fff!important;
}
}
    </style>
  </head>
  <body>
    
  <div class="container-fluid my-5">
    <div class="row">
      <div class="col-3">
        <div class="card">
          <div class="card-body">
            <div class="accordion" id="sidebarAccording">
              <!-- item 1 -->
                <div class="accordion-item">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="{{ url('/') }}">Dashboard</a></li>
                    </ul>
                </div>
                <!-- item 2 -->
                <div class="accordion-item">
                  <div class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#clients" aria-expanded="true" aria-controls="clients">
                      Clients
                    </button>
                  </div>
                  <div id="clients" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#sidebarAccording">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="{{ route('newClient') }}">New Client</a></li>
                      <li class="list-group-item"><a href="{{ route('clientList') }}">Client List</a></li>
                    </ul>
                  </div>
                </div>
                <!-- item 3 -->
                <div class="accordion-item">
                  <div class="accordion-header" id="transactions">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#transaction" aria-expanded="true" aria-controls="transaction">
                      Transactions
                    </button>
                  </div>
                  <div id="transaction" class="accordion-collapse collapse" aria-labelledby="transactions" data-bs-parent="#sidebarAccording">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="{{ route('newTransaction') }}">New Transaction</a></li>
                      <li class="list-group-item"><a href="{{ route('goTrans') }}">Transaction List</a></li>
                    </ul>
                  </div>
                </div>
                <!-- item 4 -->
                <div class="accordion-item">
                  <div class="accordion-header" id="reports">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="true" aria-controls="report">
                      Reports
                    </button>
                  </div>
                  <div id="report" class="accordion-collapse collapse" aria-labelledby="reports" data-bs-parent="#sidebarAccording">
                    <ul class="list-group">
                      <li class="list-group-item"><a href="{{ route('transactionReport') }}">Transaction Reports</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="col-9">
        @yield('backcontent')
      </div>
    </div>
  </div>
  <div class= "container-fluid">
    <div class="row">
        <div class="col-12 text-center bg-dark text-white p-3">
            <p>{{ date('Y') }} Copyright &copy; AMS | All rights reserved</p>
        </div>
    </div>
  </div>
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>