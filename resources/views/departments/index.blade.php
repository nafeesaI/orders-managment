<table>
  <tr>
    <th>  القسم </th>
    <th>  الادارة </th>
    <th> action </th>
  </tr>
  
  @foreach($departments as $dept)
      
    <tr>

      @foreach( $managments as $mana)
         <td value="{{$dept->id}}">{{ $dept->name }} </td>
         <td value="{{$mana->id}}"> {{ $mana->name}} </td>
      @endforeach
    
     <td><a href="/departments/info/{{$dept->id}}">  <button type="button" class="dele fa fa-trash ">SHOW </button> </a></td>
     <td><a href="/departments/edit/{{$dept->id}}">  <button type="button" class="dele fa fa-trash ">UPDATE </button></a> </td>
     <td><a href="/departments/delete/{{$dept->id}}"><button type="button" class="dele fa fa-trash "> DELETE</button> </a></td>
    
    </tr>

  @endforeach
</table>
