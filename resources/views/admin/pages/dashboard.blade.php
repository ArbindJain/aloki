@extends('admin.layouts.app')
@section('admin-content')
<!-- Page header -->
<section class="content-header">
    <h1>Dashboard<small>Control panel</small></h1>
</section>
<!-- Main content -->
<section class="content">
    <!-- Small boxes -->
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <!-- Post box -->
            <div class="small-box bg-aqua">
                <div class="inner">
                    <h3>{{ count($products) }}</h3>
                    <p>Total Products</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="{{ route('product.index') }}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>
@endsection
