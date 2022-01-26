<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LP テスト</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    </head>
    <body>
<!-- ========================== header ======================================-->
        <div class="float-right">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('admin/home') }}"><button type="button" class="btn btn-primary">HOME</button></a>
                    @else
                        <a href="{{ route('login') }}"><button type="button" class="btn btn-primary">Login</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
<!-- ========================== content ======================================-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card border-primary mb-3" style="max-width: 18rem;">
                        <div class="card-header">広告　A</div>
                        <div class="card-body text-primary">
                          <h5 class="card-title">広告コード：a09</h5>
                          <a href="{{ route('member.create') }}" class="btn btn-primary">LPに行く</a>
                        </div>
                      </div>
                      <div class="card border-secondary mb-3" style="max-width: 18rem;">
                        <div class="card-header">広告　B</div>
                        <div class="card-body text-secondary">
                          <h5 class="card-title">広告コード：a01</h5>
                          <a href="{{ route('member2.create') }}" class="btn btn-secondary">LPに行く</a>
                        </div>
                      </div>
                      <div class="card border-success mb-3" style="max-width: 18rem;">
                        <div class="card-header">広告　C</div>
                        <div class="card-body text-success">
                          <h5 class="card-title">広告コード：a03</h5>
                          <a href="{{ route('member3.create') }}" class="btn btn-success">LPに行く</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
            
        




    </body>
</html>
