<table>
    <tr>
      <th>  عنوان البلاغ  </th>
      <th>  عنوان فرعي  </th>
      <th> المحتوى </th>
      <th> الملف </th>
      
    </tr>
    
    @foreach($orders as $order) 
      <tr>
          <td> {{ $order->title }}</td>
          <td> {{ $order->sub_title }}</td>
          <td> {{ $order->content }}</td>
          <td> {{ $order->file_url }}</td>
  
        @foreach( $employees as $emp)
           <td value="{{$emp->id}}">{{ $emp->name }} </td>
        @endforeach

        @foreach( $ordertypes as $orderT)
        <td value="{{$orderT->id}}">{{ $orderT->name }} </td>
     @endforeach
      
       <td><a href="">  <button type="button" class="dele fa fa-trash ">SHOW </button> </a></td>
       <td><a href="">  <button type="button" class="dele fa fa-trash ">UPDATE </button></a> </td>
       <td><a href="">  <button type="button" class="dele fa fa-trash ">DELETE</button> </a></td>
      
      </tr>
  
    @endforeach
  </table>
  