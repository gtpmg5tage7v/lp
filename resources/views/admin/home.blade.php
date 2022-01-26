@include('admin.layouts.header')
    @php

        $date = date('y-m-d');
        $today = DB::table('members')->where('date',$date)->sum('price');

        $month = date('m');
        $month = DB::table('members')->where('month',$month)->sum('price');

        $year = date('Y');
        $year = DB::table('members')->where('year',$year)->sum('price');

        $delevery = DB::table('members')->where('date',$date)->where('status',3)->sum('price');

        //$return = DB::table('members')->where('return_order',2)->sum('price');
        $return = DB::table('members')->where('status',4)->sum('price');

       

    @endphp


{{-- <div class="row row-sm">
    <div class="col-sm-6 col-xl-3">
      <div class="card pd-20 bg-primary">
        <div class="d-flex justify-content-between align-items-center mg-b-10">
          <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Today's Orders</h6>
          <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
        </div><!-- card-header -->
        <div class="d-flex align-items-center justify-content-between">
          
          <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ number_format($today) }}円</h3>
        </div><!-- card-body --> --}}


        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                          今日の注文
                        </div>
                        <ul class="list-group list-group-flush">
                          <h1>{{ number_format($today) }}円</h1>
                        </ul>
                      </div>
                </div>

                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                          今月の注文
                        </div>
                        <ul class="list-group list-group-flush">
                          <h1>{{ number_format($month) }}円</h1>
                        </ul>
                      </div>
                </div>

                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                          年間の注文
                        </div>
                        <ul class="list-group list-group-flush">
                          <h1>{{ number_format($year) }}円</h1>
                        </ul>
                      </div>
                </div>

                <div class="col-6">
                    <div class="card text-center">
                        <div class="card-header">
                          今日の発送分
                        </div>
                        <ul class="list-group list-group-flush">
                          <h1>{{ number_format($delevery) }}円</h1>
                        </ul>
                      </div>
                </div>

                <div class="col-6">
                  <div class="card text-center">
                      <div class="card-header">
                        キャンセル
                      </div>
                      <ul class="list-group list-group-flush">
                        <h1>{{ number_format($return) }}円</h1>
                      </ul>
                    </div>
              </div>
            </div>
        </div>



















@include('admin.layouts.footer')