<div>
    <form action="/rejected/save" method="post">
        @csrf

        <select name="orders_id" >
         @foreach ( $orders as $order)
            <option value="{{ $order->id}}"> {{ $order->title}} </option>
         @endforeach
        </select>

        <input type="text" name="reason">
        <input type="submit" value="save" />
    </form>
</div>