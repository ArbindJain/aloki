<div class="modal fade" id="cart-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title text-center">Din bestillingen</h3>
            </div>
            @if(Cart::count() > 0)
                <div class="modal-body">
                    <table class="table table-striped" id="tblGrid">
                        <thead id="tblHead">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Produkt</th>
                                <th>Antall</th>
                                <th>Pris</th>
                                <th>Pris</th>
                                <th>Fjern</th>
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
                                       Fjern
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="text-center" colspan="4">Total sum</td>
                                <td id="totalPayable">{{ Cart::total() }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default " data-dismiss="modal">Bestil fler produkter</button>
                    <button type="button" id="check-out" class="btn btn-primary">Gå til kassen</button>
                </div>
            @else
                <div class="modal-body">
                    <h4 class="text-center">Handlekurven er tom</h4>
                </div>
            @endif
        </div>
    </div>
</div>