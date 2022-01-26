<!doctype html>
<html lang="ja">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>管理画面</title>
  </head>
  <body>
    <!-- navbar ========================================================================================================================== -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="{{ url('admin/home') }}">トップページ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.neworder') }}">新規注文</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.accept.payment') }}">支払い</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.cancel.order') }}">キャンセル</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.process.payment') }}">発送準備</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.success.payment') }}">完了</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ route('admin.search') }}">検索</a>
            </li>
          </ul>
            <div class="float-right">
              <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
          
        </div>
      </nav>
    

