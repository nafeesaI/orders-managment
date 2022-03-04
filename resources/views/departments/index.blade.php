@foreach($departments as $dept)
  <h3> {{$dept->name}} </h3>
        @foreach ( $managments as $mana)
         <h6> {{ $mana->name}} </h6>
        @endforeach
  <h3> {{$dept->managment_id}} </h3>
@endforeach