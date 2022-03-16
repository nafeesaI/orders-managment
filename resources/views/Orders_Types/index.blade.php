<table class="table table-hover">

  <tr>
      <th>  نوع الطلب </th>
  </tr>
    
  @foreach($orderType as $orderT)
        
    <tr>

      <td>{{ $orderT->name }} </td>

      <td><a href="/departments/info/{id}">  <button type="button" class="dele fa fa-trash ">SHOW </button> </a></td>
      <td><a href="/departments/edit/{id}">  <button type="button" class="dele fa fa-trash ">UPDATE </button></a> </td>
      <td><a href="/deapatments/delete/{id}"><button type="button" class="dele fa fa-trash "> DELETE</button> </a></td>
      
    </tr>
  @endforeach
</table>
  