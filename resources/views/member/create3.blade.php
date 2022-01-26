<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<!-- ナビ -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">a03</a>
</nav>

<!-- FV -->
<div class="container-fluid">
  <h1 class="text-center">a03</h1>
  <img src="{{ asset('img/a03.png') }}" class="img-fluid" alt="">
  </div>

  <!-- CTA -->

  <!-- sec01 -->
  <!-- sec02 -->
  <!-- CTA -->

  <!-- sec03 -->
  <!-- sec04 -->
  <!-- CTA -->

  <!-- sec05 -->
  <!-- sec06 -->
  <!-- sec07 -->
  <!-- CTA -->
<div class="container">
  <div class="row">
    <div class="col">



    <form action="{{ route('payment.process') }}" id="contact_form" method="post">
  @csrf
  <!-- valueに広告コードを入れる　-->
  <input type="hidden" name="advertisingcode" value="a03">

  <div class="form-group">
    <label for="exampleInputEmail1">名前</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name"  required="">
  </div>

      <div class="form-group">
      <label for="exampleInputEmail1">電話番号</label>
      <input type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="telephone"  required="">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">メールアドレス</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"  required="">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">郵便番号</label>
        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="zip"  required="" onKeyUp="AjaxZip3.zip2addr('zip', '', 'address1', 'address1');">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">住所</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address1"  required="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">住所２</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address2"  required="">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">マンション名など</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="address3">
      </div>

      
      <!-- -->
  <p>            
    <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
      発送先の住所が異なる場合はこちら
    </button>
  </p>
  <div class="collapse" id="collapseExample">
    <div class="card card-body">
      <div class="form-group">
<label for="exampleInputEmail1">発送先のお名前</label>
<input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Full Name " name="name2">
 </div>


 <div class="form-group">
<label for="exampleInputEmail1">電話番号</label>
<input type="tel" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Phone " name="telephone2">
 </div>



 <div class="form-group">
<label for="exampleInputEmail1">郵便番号</label>
<input type="number" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your Address" name="zip2" onKeyUp="AjaxZip3.zip2addr('zip2', '', 'address4', 'address4');">
 </div>



 <div class="form-group">
<label for="exampleInputEmail1">発送先の住所</label>
<input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your City" name="address4">
 </div>

 <div class="form-group">
  <label for="exampleInputEmail1">住所２</label>
  <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your City" name="address5">
   </div>

   <div class="form-group">
    <label for="exampleInputEmail1">マンション名など</label>
    <input type="text" class="form-control"  aria-describedby="emailHelp" placeholder="Enter Your City" name="address6">
     </div>

 </div>
 </div>

{{--   <div class="form-group">
    <ul class="logos_list">
        <li><input type="radio" name="payment" value="stripe">stripe</li>

         <li><input type="radio" name="payment" value="paypal">paypal</li>

          <li><input type="radio" name="payment" value="oncash">銀行振込</li>
        
    </ul>
    
</div> --}}
<div class="form-group pt-5">
        <div class="d-inline p-2 bg-dark text-white w-auto p-3"><input type="radio" name="payment" value="stripe">　クレジットカード</div>
        {{-- <div class="d-inline p-2 bg-dark text-white w-auto p-3"><input type="radio" name="payment" value="paypal">paypal</div> --}}
        <div class="d-inline p-2 bg-dark text-white w-auto p-3"><input type="radio" name="payment" value="oncash">　銀行振込　</div>
        <div class="d-inline p-2 bg-dark text-white w-auto p-3"><input type="radio" name="payment" value="ondelivery">　代金引換　</div>
</div>




{{--<div class="contact_form_button text-center">
      <button type="submit" class="btn btn-info">申込みをする</button>
    </div> --}}

          <div class="contact_form_button text-center pt-5">
          <button type="submit" class="btn btn-warning btn-lg  rounded-pill w-75 p-3">〇〇〇〇円で申込みをする</button>
          <input type="hidden" name="price" value="9999">
        </div>

</form>

</div><!-- col -->
</div><!-- row -->
</div><!-- container -->


<script src="https://ajaxzip3.github.io/ajaxzip3.js" charset="UTF-8"></script>

<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->