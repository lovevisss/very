<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		{{Html::style('css/main.css')}}
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.css">
		@yield('style')
	</head>

		<body>
			<div class="content">
                @include('includes.header')
                <div class="title m-b-md">
                    @yield('content')
                </div>

            </div>
		</body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</html>