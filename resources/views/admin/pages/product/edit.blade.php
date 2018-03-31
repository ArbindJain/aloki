@extends('admin.layouts.app')
@section('headsection')
    <link rel="stylesheet" href="{{ asset('admin/plugins/iCheck/square/blue.css') }}">
@endsection
@section('admin-content')
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title"><b>{{ $product->name }}</b></h3>
						<div class="pull-right box-tools">
							<button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"  title="Collapse">
							<i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<div class="box-body">
						<!-- form start -->
						<form role="form" action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							{{ method_field('PATCH') }}
							<div class="box-body">
								<!-- Error box -->
								@include('admin.layouts.partial.error')
								<!-- Name -->
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" value="{{ $product->name }}" id="name" placeholder="Name">
								</div>
								<!-- Description -->
								<div class="form-group">
									<label for="description">Description</label>
									<input type="text" class="form-control" name="description" value="{{ $product->description }}" id="description" placeholder="Description">
								</div>
								<!-- price -->
								<div class="form-group">
									<label for="price">Price</label>
									<input type="number" step="0.01" class="form-control" name="price" value="{{ $product->price }}" id="price" placeholder="Price">
								</div>
								<!-- Image Upload -->
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" name="image" id="image">
								</div>
								<!-- Submit Button -->
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Submit</button>
									&nbsp;&nbsp;
									<a href="{{ route('product.index') }}" class="btn btn-warning">Back</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
@section('script')
	<script src="{{ asset('admin/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
	<script>
		$(document).ready(function(){
			$(".select2").select2();
		});
	</script>
    <script src="{{ asset('admin/plugins/iCheck/icheck.min.js') }}"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%'
            });
        });
    </script>
@endsection