@extends('admin.layouts.app')
@section('headsection')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('admin-content')
<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title"><b>Product</b></h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="box-body">
            <!-- Message box -->
            @include('admin.layouts.partial.message')
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orderProducts as $orderProduct)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $orderProduct->product_name }}</td>
                            <td>{{ $orderProduct->product_quantity }}</td>
                            <td>{{ $orderProduct->product_price }}</td>
                            <td>{{ $orderProduct->product_quantity * $orderProduct->product_price }}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td></td>
                        <td class="text-center">Total</td>
                        <td>{{ Cart::count() }}</td>
                        <td></td>
                        <td>{{ Cart::total() }}</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
@endsection
@section('script')
    <script src="{{ asset('admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    {{-- Pagination --}}
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            });
        });
    </script>
@endsection