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
            <h3 class="box-title"><b>Products</b></h3>
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
                        <th>Subject</th>
                        <th>Message</th>
                        <th>Sent on</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactUses as $contactUs)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $contactUs->name }}</td>
                            <td>{{ $contactUs->email }}</td>
                            <td>{{ $contactUs->phone }}</td>
                            <td>{{ $contactUs->subject }}</td>
                            <td>{{ $contactUs->message }}</td>
                            <td>{{ $contactUs->created_at }}</td>
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