<div>
    <form action="/departments/update/{{$dept->id}}" method="post">
        @csrf

        <select name="managment_id" >
        @foreach ( $mana as $mana)
            <option value="{{ $mana->id}}"> {{ $mana->name}} </option>
        @endforeach
        </select>

        <input type="text" name="name" value="{{$dept->name}}">
        <input type="submit" value="save" />
    </form>
</div>