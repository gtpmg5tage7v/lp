@include('admin.layouts.header')

<div class="container">
    <div class="row">
        <div class="col">
        <div class="card">
            <div class="card-header">
                <div class="float-left"><strong>注文内容<strong></div>
                <div class="float-right">広告コード:{{ $member->advertisingcode }}</div>
            </div>
     <div class="card-body">
         <table class="table">

            <tr>
                <th> 支払い方法: </th>
                @if($member->payment == "oncash")
                <th> <p>銀行振込</p></th> 
                @elseif($member->payment == "ondelivery")
                <th> <p>代金引換</p></th> 
            @else
                <th> {{ $member->payment }} </th>		
            </tr>
            @endif


            <tr>
                <th> Status: </th>
                <th>
                @if($member->status == 0)
                <span class="badge badge-warning">Pending</span>
                @elseif($member->status == 1)
                <span class="badge badge-info">Payment Accept</span>
               @elseif($member->status == 2)
               <span class="badge badge-warning">Progress</span>
               @elseif($member->status == 3)
               <span class="badge badge-success">Delevered</span>
               @else
               <span class="badge badge-danger">Cancle</span>
   
                @endif  
   
                 </th>	
   
            <tr>
                <th> 名前: </th>
                <th> {{ $member->name }} </th>		
            </tr>

            <tr>
                <th> 電話番号: </th>
                <th> {{ $member->telephone }} </th>		
            </tr>

            <tr>
                <th> メールアドレス: </th>
                <th> {{ $member->email }} </th>		
            </tr>

            <tr>
                <th> 郵便番号: </th>
                <th> {{ $member->zip }} </th>		
            </tr>


            <tr>
                <th> 住所: </th>
                <th> {{ $member->address1}}{{ $member->address2}}{{ $member->address3}} </th>		
            </tr>


            



            @if($member->name2 == NULL)
            @else
            
            <div class="alert alert-danger" role="alert">
                発送先が異なります。
              </div>
            <tr>
                <th> 発送先の名前: </th>
                <th> {{ $member->name2 }} </th>		
            </tr>
            @endif

            @if($member->telephone2 == NULL)
            @else
            <tr>
                <th> 発送先の電話番号: </th>
                <th> {{ $member->telephone2 }} </th>		
            </tr>
            @endif

            @if($member->zip2 == NULL)
            @else
            <tr>
                <th> 発送先の郵便番号: </th>
                <th> {{ $member->zip2 }} </th>		
            </tr>
            @endif

            @if($member->address4 == NULL)
            @else
            <tr>
                <th> 発送先の住所: </th>
                <th> {{ $member->address4}}{{ $member->address5}}{{ $member->address6}} </th>		
            </tr>
            @endif


            
            
        </table>



                </div>
            </div><!-- card-->
            @if($member->status == 0)
            <a href="{{ url('admin/payment/accept/'.$member->id) }}" class="btn btn-info">支払い確認</a>
            <a href="{{ url('admin/payment/cancel/'.$member->id) }}" class="btn btn-danger">キャンセル</a>
            @elseif($member->status == 1)
            <a href="{{ url('admin/delevery/process/'.$member->id) }}" class="btn btn-info">発送準備</a>
            @elseif($member->status == 2)
            <a href="{{ url('admin/delevery/done/'.$member->id) }}" class="btn btn-success">完了</a>
            @elseif($member->status == 4)
            <div class="alert alert-danger" role="alert">
                この注文は無効になりました。
              </div>
            @else
            <div class="alert alert-primary" role="alert">
                この商品はすべて完了済みです。
              </div>
            @endif
        </div><!-- col-->
    </div><!-- row-->
</div><!-- container-->

@include('admin.layouts.footer')