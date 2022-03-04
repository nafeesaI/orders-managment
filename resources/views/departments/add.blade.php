<div>
    <form action="/departments/save" method="post">
        @csrf
        <select name="managment_id" >
        @foreach ( $managments as $mana)
            <option value="{{ $mana->id}}"> {{ $mana->name}} </option>
        @endforeach
        </select>

        <input type="text" name="name">
        <input type="submit" value="save" />
    </form>
</div>