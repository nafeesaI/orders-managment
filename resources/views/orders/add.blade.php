<div>
    <form action="/Orders/save" method="post">
        @csrf
        
        <select name="emp_id" >
        @foreach ( $employees as $emp)
            <option value="{{ $emp->id}}"> {{ $emp->f_name}} </option>
        @endforeach
        </select>

        <select name="orders_type_id" >
            @foreach ( $ordertypes as $orderT)
                <option value="{{ $orderT->id}}"> {{ $orderT->name}} </option>
            @endforeach
        </select>

        <input type="text" name="title">
        <input type="text" name="sub_ttile">
        <input type="text" name="content">
        <input type="text" name="file_url">

        <input type="submit" value="save" />
    </form>
</div>