<div>
    <form action="/OrderTypes/update/{{$ordert->id}}" method="post">
        @csrf
         <input type="text" name="name" value="{{$ordert->name}}" >
         <input type="submit" value="save" />

    </form>

</div>