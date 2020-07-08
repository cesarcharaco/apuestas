<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
</head>
<body>
	<header class="clearfix">
		@include('layouts.header')
	</header><!-- /header -->

		@yield('container')
        
        @include('layouts.footer')
        
        
</body>
</html>