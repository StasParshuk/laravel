{{--<tr>--}}
{{--    <td>--}}
{{--        <img src="{{ $row->model->thumbnailUrl }}" height="100" alt="">--}}
{{--    </td>--}}
{{--    <td>--}}
{{--            <a href="{{ route('shop.one', $row->id) }}"><strong>{{ $row->name }}</strong></a>--}}
{{--    </td>--}}
{{--    <td>--}}
{{--        <form action="{{ route('cart.count.update', $row->id) }}" method="POST">--}}
{{--            @csrf--}}
{{--            <input type="hidden" value="{{ $row->rowId }}" name="rowId">--}}
{{--            <input type="number"--}}
{{--                   min="1"--}}
{{--                   value="{{ $row->qty }}"--}}
{{--                   max="{{ $row->model->in_stock }}"--}}
{{--                   name="product_count"--}}
{{--            >--}}
{{--            <input type="submit" class="btn btn-outline-success" value="Update count">--}}
{{--        </form>--}}
{{--    </td>--}}
{{--    <td>{{ $row->price }}$</td>--}}
{{--    <td>{{ $row->subtotal }}$</td>--}}
{{--    <td>--}}
{{--        <form action="{{ route('cart.remove') }}" method="POST">--}}
{{--            @csrf--}}
{{--            @method('DELETE')--}}
{{--            <input type="hidden" value="{{ $row->rowId }}" name="rowId">--}}
{{--            <div class="remove"> <input type="submit"  value="{{ __('Delete') }}" class="flaticon-cross"> </div>--}}
{{--        </form>--}}
{{--    </td>--}}
{{--</tr>--}}





<tbody>
<tr>
    <td>
        <div class="thumb-box"> <a href="{{ route('shop.one', $row->id) }}" class="thumb">
                <img src="{{ $row->model->thumbnailUrl  }} " alt="">
            </a> <a href="{{ route('shop.one', $row->id) }}" class="title">
                <h5> {{ $row->name }} </h5>
            </a> </div>
    </td>
    <td>{{ $row->price }}$</td>
    <td class="qty">
{{--        <div class="qtySelector text-center">--}}
{{--            <span class="decreaseQty"><i class="flaticon-minus"></i></span>--}}


            <form action="{{ route('cart.count.update', $row->id) }}" method="POST">
                @csrf

            <input type="hidden" value="{{ $row->rowId }}" name="rowId">
            <input type="number" name="product_count" class="qtyValue" value="{{ $row->qty }}" max="{{ $row->model->in_stock }}">
            <input type="submit" class="btn btn-outline-success" value="Update count">
{{--            <span class="increaseQty"> <i class="flaticon-plus"></i> </span>--}}
            </form>
{{--        </div>--}}
    </td>
    <td class="sub-total">{{ $row->subtotal }}$</td>
    <td>
        <form action="{{ route('cart.remove') }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="hidden" value="{{ $row->rowId }}" name="rowId">
            <div class="remove"> <input type="submit"  value="{{ __('Delete') }}" class="flaticon-cross"> </div>
        </form>
    </td>
</tr>
</tbody>
