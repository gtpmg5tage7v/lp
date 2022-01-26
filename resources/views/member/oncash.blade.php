<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<h1>最終確認画面</h1>




  <div class="container">
    <div class="row">
      <div class="col">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">お届け先</span>
          
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">お名前</h6>
            </div>
            <span class="text-muted">{{ $data['name'] }}様</span>
          </li>

          <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
              <h6 class="my-0">電話番号</h6>
              </div>
            <span>{{ $data['telephone'] }}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">メールアドレス</h6>
            </div>
            <span class="text-muted">{{ $data['email'] }}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
              <h6 class="my-0">郵便番号</h6>
              </div>
            <span>〒{{ $data['zip'] }}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">お届先住所</h6>
            </div>
            <span class="text-muted">{{ $data['address1'] }}{{ $data['address2'] }}{{ $data['address3'] }}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
              <h6 class="my-0">お支払い方法</h6>
              </div>
              @if($data['payment'] == "oncash")
            <span class="text-muted">銀行振込</span>
            @elseif($data['payment'] == "ondelivery")
            <span class="text-muted">代金引換</span>
            @else
            <span class="text-muted">クレジットカード</span>
            @endif
          </li>
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">お支払い金額</h6>
            </div>
            <span class="text-muted">{{ number_format($data['price']) }}円</span>
          </li>

          
        </ul>
      </div>
      </div>
    </div>


    <!-- -->
    @if($data['name2'] == NULL)
    @else
    <div class="container">
    <div class="row">
      <div class="col">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">商品のお届け先</span>
          
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">お名前</h6>
            </div>
            <span class="text-muted">{{ $data['name2'] }}様</span>
          </li>

          <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
              <h6 class="my-0">電話番号</h6>
              </div>
            <span>{{ $data['telephone2'] }}</span>
          </li>
          

          <li class="list-group-item d-flex justify-content-between bg-light">
            <div>
              <h6 class="my-0">郵便番号</h6>
              </div>
            <span>〒{{ $data['zip2'] }}</span>
          </li>

          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">お届先住所</h6>
            </div>
            <span class="text-muted">{{ $data['address4'] }}{{ $data['address5'] }}{{ $data['address6'] }}</span>
          </li>
        </ul>
      </div>
      </div>
    </div>
    @endif





                        

            <form action="{{ route('oncash.charge') }}" method="post" id="payment-form">
              @csrf
              
                <input type="hidden" name="name" value="{{ $data['name'] }} ">
                <input type="hidden" name="telephone" value="{{ $data['telephone'] }} ">
                <input type="hidden" name="email" value="{{ $data['email'] }} ">
                <input type="hidden" name="zip" value="{{ $data['zip'] }} ">
                <input type="hidden" name="address1" value="{{ $data['address1'] }} ">
                <input type="hidden" name="address2" value="{{ $data['address2'] }} ">
                <input type="hidden" name="address3" value="{{ $data['address3'] }} ">
                <input type="hidden" name="payment" value="{{ $data['payment'] }}">
                <input type="hidden" name="name2" value="{{ $data['name2'] }} ">
                <input type="hidden" name="telephone2" value="{{ $data['telephone2'] }} ">
                <input type="hidden" name="zip2" value="{{ $data['zip2'] }} ">
                <input type="hidden" name="address4" value="{{ $data['address4'] }} ">
                <input type="hidden" name="address5" value="{{ $data['address5'] }} ">
                <input type="hidden" name="address6" value="{{ $data['address6'] }} ">
                <input type="hidden" name="price" value="{{ $data['price'] }} ">
                <input type="hidden" name="advertisingcode" value="{{ $data['advertisingcode'] }} ">
<div class="container">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-outline-secondary btn-lg  rounded-pill w-75 p-3">購入する</button>
       {{-- <button class="btn btn-outline-secondary btn-lg">申し込む</button> --}}
    </div>   
  </div>
</div>
              
            </form>
         

                   







       


  








