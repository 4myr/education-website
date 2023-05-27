<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl" >
	<!--begin::Head-->
	<head><base href="../../../"/>
		<title>{{ env('APP_NAME') }} | ورود اساتید</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="{{ env('APP_NAME') }} " />
		<meta property="og:site_name" content="{{ env('APP_NAME') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset("/metronic/assets/plugins/global/plugins.bundle.rtl.css") }} " rel="stylesheet" type="text/css" />
		<link href="{{ asset("/metronic/assets/css/style.bundle.rtl.css") }}" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getآیتم("data-theme") !== null ) { themeMode = localStorage.getآیتم("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root" id="kt_app_root">
			<style>body { background-image: url('{{ asset("/metronic/assets/media/auth/bg4.jpg") }}'); } [data-theme="dark"] body { background-image: url('{{ asset("/metronic/assets/media/auth/bg4-dark
			.jpg") }}');
			}</style>
			<!--end::Page bg image-->
			<!--begin::احراز هویت - ورود -->
			<div class="d-flex flex-column flex-column-fluid flex-lg-row">
				<!--begin::کناری-->
				<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
					<!--begin::کناری-->
					<div class="d-flex flex-center flex-lg-start flex-column">
						<!--begin::Logo-->
						<a href="../../demo28/dist/index.html" class="mb-7">
							<img alt="Logo" src="{{ asset("/metronic/assets/media/logos/custom-3.svg") }}" />
						</a>
						<!--end::Logo-->
						<!--begin::Title-->
						<h2 class="text-white fw-normal m-0">ابزارهایی را که برای کسب و کار شما طراحی شده اند به ارمغان بیاورید</h2>
						<!--end::Title-->
					</div>
					<!--begin::کناری-->
				</div>
				<!--begin::کناری-->
				<!--begin::Body-->
				<div class="d-flex flex-center w-lg-50 p-10">
					<!--begin::کارت-->
					<div class="card rounded-3 w-md-550px">
						<!--begin::کارت body-->
						<div class="card-body p-10 p-lg-20">
							<!--begin::Form-->
                            @yield('form')
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>var hostUrl = "{{ asset("/metronic/assets/") }}";</script>
		<script src="{{ asset("/metronic/assets/plugins/global/plugins.bundle.js") }}"></script>
		<script src="{{ asset("/metronic/assets/js/scripts.bundle.js") }}"></script>
		<script src="{{ asset("/metronic/assets/js/custom/sign-in.js") }}"></script>
	</body>
</html>
