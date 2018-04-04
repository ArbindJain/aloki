<div class="modal fade" id="cart-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title text-center">Your Cart</h3>
            </div>
            @if(Cart::count() > 0)
                <div class="modal-body">
                    <table class="table table-striped" id="tblGrid">
                        <thead id="tblHead">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Value</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cartProducts as $cartProduct)
                            <tr class="">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $cartProduct->name }}</td>
                                <td>{{ $cartProduct->qty }}</td>
                                <td>{{ $cartProduct->price }}</td>
                                <td>{{ $cartProduct->qty * $cartProduct->price }}</td>
                                <td class="removeItem">
                                    <input type="hidden" class="rowIdInput" name="rowId" value="{{ $cartProduct->rowId }}">
                                    <a href="{{ route('cartItemRemove', $cartProduct->rowId) }}" class="btn btn-sm btn-danger cartRemove">
                                       Remove
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-center" colspan="4">Total</td>
                                <td id="totalPayable">{{ Cart::total() }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                    <button type="button" id="check-out" class="btn btn-primary">Checkout</button>
                </div>
            @else
                <div class="modal-body">
                    <h4 class="text-center">Opps, your cart is empty</h4>
                </div>
            @endif
        </div>
    </div>
</div>