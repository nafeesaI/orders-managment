<div>
    <form action="/departments/update" method="post">
        @csrf

        @foreach($departments as $dept)

        <select name="managment_id" >
        @foreach ( $mangments as $mana)
            <option value="{{ $mana->id}}"> {{ $mana->name}} </option>
        @endforeach
        </select>

        <input type="text" name="name" >
        <input type="submit" value="save" />
        @endforeach

    </form>
</div>