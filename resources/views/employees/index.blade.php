<table>
    <tr>
      <th>  الاسم الاول  </th>
      <th>  الاسم الثاني </th>
      <th> التلفون </th>
      <th> العنوان </th>
      <th> القسم  </th>
    </tr>
    
    @foreach($employees as $emp) 
      <tr>
          <td> {{ $emp->f_name }}</td>
          <td> {{ $emp->l_name }}</td>
          <td> {{ $emp->phone }}</td>
          <td> {{ $emp->address }}</td>
  
        @foreach( $departments as $dept)
           <td value="{{$emp->department_id}}">{{ $dept->name }} </td>
        @endforeach
      
       <td><a href="">  <button type="button" class="dele fa fa-trash ">SHOW </button> </a></td>
       <td><a href="">  <button type="button" class="dele fa fa-trash ">UPDATE </button></a> </td>
       <td><a href="">  <button type="button" class="dele fa fa-trash ">DELETE</button> </a></td>
      
      </tr>
  
    @endforeach
  </table>
  