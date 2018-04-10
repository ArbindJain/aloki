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
                        <th>Product</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Price</th>
                        <th>Old Price</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->description }}</td>
                            <td><img class="img-responsive text-center " src="{{ asset('images/products').'/'.$product->image }}" alt="{{ $product->image }}" style="width:60px; height: auto; margin:auto; border: 1px solid #DDD;"></td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->old_price }}</td>
                            <td class="text-center"><a href="{{ route('product.edit', $product->id) }}"><span class="fa fa-edit"></span></td>
                            <td class="text-center">
                                <form id="delete-form-{{ $product->id }}" method="POST" action="{{ route('product.destroy', $product->id) }}" style="display: none;">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                </form>
                                <a href="{{ route('product.destroy', $product->id) }}" onclick="
                                    if (confirm('Are you really want to Delete This product?')) {
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $product->id }}').submit();
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
                'autoWidth'   : false
            });
        });
    </script>
@endsection