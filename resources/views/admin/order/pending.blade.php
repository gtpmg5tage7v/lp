@include('admin.layouts.header')
<div class="container">
    <div class="row">
        

        <table class="table table-striped">
            <thead>
      <tr>
        <th class="wd-15p">日付</th>
        <th class="wd-15p">名前</th>
        <th class="wd-20p">支払い方法</th>
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
      @foreach($order as $row)
      <tr>
        <td>{{ $row->created_at}}</td>
        <td>{{ $row->name}}</td>
        @if($row->payment == "oncash")
            <th> <p>銀行振込</p></th> 
        @elseif($row->payment == "ondelivery")
            <th> <p>代金引換</p></th> 
        @else
        <td>{{ $row->payment}} </td>
        @endif
       <td>{{ $row->advertisingcode }}</td>
         {{-- <td>{{ $row->subtotal }} </td>
        <td>{{ $row->shipping }} </td>
        <td>{{ $row->total }} </td>
        <td>{{ $row->date }}  </td>--}}

        <td>
   @if($row->status == 0)
  <span class="badge badge-warning">注文受付</span>
  @elseif($row->status == 1)
  <span class="badge badge-info">支払い確認</span>
  @elseif($row->status == 2)
  <span class="badge badge-warning">発送準備</span>
  @elseif($row->status == 3)
  <span class="badge badge-success">完了</span>
  @else
  <span class="badge badge-danger">キャンセル</span>

@endif   

     </td>

        <td>
          <a href="{{ URL::to('admin/view/order/'.$row->id) }} " class="btn btn-sm btn-info">View</a>
          
        </td>
         
      </tr>
      @endforeach
       
    </tbody>
  </table>
  
</div>
</div>


@include('admin.layouts.footer')