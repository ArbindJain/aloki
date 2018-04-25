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
						<h3 class="box-title"><b>Create Product</b></h3>
						<div class="box-tools pull-right">
			                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
			                    <i class="fa fa-minus"></i>
			                </button>
			            </div>
					</div>
					<div class="box-body">
						<!-- form start -->
						<form role="form" action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
							{{ csrf_field() }}
							<div class="box-body">
								<!-- Error box -->
								@include('admin.layouts.partial.error')
								<!-- Name -->
								<div class="form-group">
									<label for="name">Product Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Title">
								</div>
								<!-- Description -->
								<div class="form-group">
									<label for="description">Description</label>
									<input type="text" class="form-control" name="description" id="description" placeholder="Description">
								</div>
								<div class="row">
									<!-- price -->
									<div class="form-group col-md-4">
										<label for="price">Price</label>
										<input type="number" step="0.01" class="form-control" name="price" id="price" placeholder="Price">
									</div>
									<!-- Old price -->
									<div class="form-group col-md-4">
										<label for="old_price">Old Price</label>
										<input type="number" step="0.01" class="form-control" name="old_price" id="old_price" placeholder="Old Price">
									</div>
									<!-- Quantity Multiplier -->
									<div class="form-group col-md-4">
										<label for="quantity_multiplier">Quantity in Multiple</label>
										<input type="number" class="form-control" name="quantity_multiplier" id="quantity_multiplier" value="5" placeholder="Quantity in Multiple">
									</div>
								</div>
								<!-- Image Upload -->
								<div class="form-group">
									<label for="image">Image</label>
									<input type="file" name="image" id="image">
								</div>
								<!-- Submit -->
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
	<!-- iCheck -->
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