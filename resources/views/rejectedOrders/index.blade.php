<table>
    <tr>
      <th> عنوان الطلب المرفوض  </th>
      <th>  الطلب المرفوض </th>
      <th>  المحتوى  </th>
      <th>  الملف  </th>
      <th>  السبب </th>
    </tr>
    
    @foreach($rejected as $rej)
        
      <tr>
  
        @foreach( $orders as $order)
           <td value="{{$order->id}}">{{ $order->title }} </td>
           <td value="{{$order->id}}"> {{ $order->sub_ttile}} </td>
           <td value="{{$order->id}}"> {{ $order->content}} </td>
           <td value="{{$order->id}}"> {{ $order->file_url}} </td>
           <td> {{ $rej->reason}}
        @endforeach
      
       <td><a href="">  <button type="button" class="dele fa fa-trash ">SHOW </button> </a></td>
       <td><a href="">  <button type="button" class="dele fa fa-trash ">UPDATE </button></a> </td>
       <td><a href=""><button type="button" class="dele fa fa-trash "> DELETE</button> </a></td>
      
      </tr>
  
    @endforeach
  </table>
  