<!DOCTYPE html>
<html>
	<head>
		@include('admin.layouts.partial.head')
	</head>
	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			@include('admin.layouts.partial.navbar')
			@include('admin.layouts.partial.sidebar')
			<div class="content-wrapper">
				@section('admin-content')
				
				@show
			</div>
			<footer class="main-footer">
				<strong>&copy; {{ date('Y') }}<a href="#"> Admin</a></strong>
			</footer>
		</div>
		@include('admin.layouts.partial.script')
	</body>
</html>