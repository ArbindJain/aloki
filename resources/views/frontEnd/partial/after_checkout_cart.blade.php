<div class="modal fade" id="cart-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title text-center">Bekrefelse - din handel er nå bekreftet</h3>
            </div>
            <div class="modal-body">
                <table class="table table-striped" id="tblGrid">
                    <thead id="tblHead">
                        <tr>
                            <th>Sr. No.</th>
                            <th>Produkt</th>
                            <th>Antall</th>
                            <th>Pris</th>
                            <th>Pris</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($productLists as $cartProduct)
                        <tr class="">
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $cartProduct->name }}</td>
                            <td>{{ $cartProduct->qty }}</td>
                            <td>{{ $cartProduct->price }}</td>
                            <td>{{ $cartProduct->qty * $cartProduct->price }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td class="text-center" colspan="4">Total sum</td>
                            <td id="totalPayable">{{ $order->order_value }}</td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary btn-lg text-center"  data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
</div>