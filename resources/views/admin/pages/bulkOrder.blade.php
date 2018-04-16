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
            <h3 class="box-title"><b>Bulk Order Inquiry</b></h3>
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
                        <th>TLF</th>
                        <th>Fax</th>
                        <th>Inquiry for</th>
                        <th>Message</th>
                        <th>Sent on</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bulkOrders as $bulkOrder)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $bulkOrder->name }}</td>
                            <td>{{ $bulkOrder->email }}</td>
                            <td>{{ $bulkOrder->phone }}</td>
                            <td>
                                {{ $bulkOrder->address }}, 
                                {{ $bulkOrder->land }}<br />
                                {{ $bulkOrder->poststed }},
                                {{ $bulkOrder->post_number }}
                            </td>
                            <td>{{ $bulkOrder->tlf }}</td>
                            <td>{{ $bulkOrder->fax }}</td>
                            <td>{{ $bulkOrder->order_for }}</td>
                            <td title="{{ $bulkOrder->additional_inquiry }}">{{ str_limit($bulkOrder->additional_inquiry, $limit=50, $end="...") }}</td>
                            <td>{{ $bulkOrder->created_at }}</td>
                            <td>
                                <form id="delete-form-{{ $bulkOrder->id }}" method="POST" action="{{ route('bulkOrder.destroy', $bulkOrder->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route('bulkOrder.destroy', $bulkOrder->id) }}" onclick="
                                    if (confirm('Are you really want to Delete This bulkOrder?')) {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $bulkOrder->id }}').submit();
                                    } else {
                                        event.preventDefault();
                                    }"><span class="fa fa-trash"></span>
                                </a>
                            </td>
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
                'autoWidth'   : false,
                "scrollX"     : true
            });
        });
    </script>
@endsection