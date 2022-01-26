@include('admin.layouts.header')
<div class="container">
    <div class="row">
        
      <form method="GET" action="{{ route('admin.search') }}" class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" name="search" type="search" placeholder="検索" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">検索する</button>
        </form>
        <table class="table table-striped">
            <thead>
      <tr>
        <th class="wd-15p">日付</th>
        <th class="wd-15p">名前</th>
        <th class="wd-15p">電話番号</th>
        <th class="wd-15p">メールアドレス</th>
        <th class="wd-15p">郵便番号</th>
        <th class="wd-15p">住所</th>
        <th class="wd-15p">支払い方法</th>
        <th class="wd-20p">広告コード</th>
        <th class="wd-15p">ステータス</th>
        <th class="wd-15p">詳細</th>
        
        {{-- <th class="wd-20p">Shipping</th>
        <th class="wd-20p">Total</th>
        <th class="wd-20p">Date</th>
        <th class="wd-20p">Status</th>
        <th class="wd-20p">Action</th> --}}
        
      </tr>
    </thead>
    <tbody>
      @foreach($member as $member)
      <tr>
        <td>{{ $member->created_at}}</td>
        <td>{{ $member->name}}</td>
        <td>{{ $member->telephone}}</td>
        <td>{{ $member->email}}</td>
        <td>{{ $member->zip}}</td>
        <td>{{ $member->address1}}{{ $member->address2}}</td>
        

        @if($member->payment == "oncash")
            <th> <p>銀行振込</p></th> 
        @elseif($member->payment == "ondelivery")
            <th> <p>代金引換</p></th> 
        @else
        <td>{{ $member->payment}} </td>
        @endif
       <td>{{ $member->advertisingcode }}</td>
         {{-- <td>{{ $row->subtotal }} </td>
        <td>{{ $row->shipping }} </td>
        <td>{{ $row->total }} </td>
        <td>{{ $row->date }}  </td>--}}

        <td>
   @if($member->status == 0)
  <span class="badge badge-warning">注文受付</span>
  @elseif($member->status == 1)
  <span class="badge badge-info">支払い確認</span>
  @elseif($member->status == 2)
  <span class="badge badge-warning">発送準備</span>
  @elseif($member->status == 3)
  <span class="badge badge-success">完了</span>
  @else
  <span class="badge badge-danger">キャンセル</span>

@endif   

     </td>

        <td>
          <a href="{{ URL::to('admin/view/order/'.$member->id) }} " class="btn btn-sm btn-info">View</a>
          
        </td>
         
      </tr>
      @endforeach
       
    </tbody>
  </table>
  
</div>
</div>


@include('admin.layouts.footer')