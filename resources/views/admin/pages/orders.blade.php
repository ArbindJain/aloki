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
            <h3 class="box-title"><b>Orders</b></h3>
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
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Ordered items</th>
                        <th>Ordered value</th>
                        <th>Go to order</th>
                        <th>Delete</th>
                        <th>Ordered Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($orders as $order)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $order->user_name }}</td>
                            <td>{{ $order->user_email }}</td>
                            <td>{{ $order->user_phone }}</td>
                            <td>{{ $order->user_address }}</td>
                            <td>{{ $order->order_items }}</td>
                            <td>{{ $order->order_value }}</td>
                            <td>
                                <a href="{{ route('orderProducts', $order->id) }}" class="btn btn-success btn-xs" title="">Go</a>
                            </td>
                            <td>
                                <form id="delete-form-{{ $order->id }}" method="POST" action="{{ route('deleteOrder', $order->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route('deleteOrder', $order->id) }}" onclick="
                                    if (confirm('Are you really want to delete This order?')) {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $order->id }}').submit();
                                    } else {
                                        event.preventDefault();
                                    }"><span class="fa fa-trash"></span>
                                </a>
                            </td>
                            
                            <td>{{ $order->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
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