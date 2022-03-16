<div>
    <form action="/employees/save" method="post">
        @csrf
        
        <select name="department_id" >
        @foreach ( $departments as $dept)
            <option value="{{ $dept->id}}"> {{ $dept->name}} </option>
        @endforeach
        </select>

        <input type="text" name="f_name">
        <input type="text" name="l_name">
        <input type="number" name="phone">
        <input type="text" name="address">
        <input type="file" name="profile_img">
        <input type="file" name="bio">
        <input type="submit" value="save" />
    </form>
</div>