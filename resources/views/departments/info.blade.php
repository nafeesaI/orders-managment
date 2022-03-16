@foreach ($departments as $dd)
  <h3> {{$dd->name}} </h3>
        @foreach ( $managments as $mana)
         <h6> {{ $mana->name}} </h6>
        @endforeach
@endforeach