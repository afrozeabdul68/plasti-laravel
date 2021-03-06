<!DOCTYPE html>


<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>{{ config('app.name', 'Laravel') }}</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

		<!--begin::Web font -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
          });
        </script>

		<!--end::Web font -->

		<!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Styles -->
        <link rel="stylesheet" href="{{url('metronic/theme/default/dist/default/assets/vendors/base/vendors.bundle.css')}}">
		<link href="{{url('metronic/theme/default/dist/default/assets')}}/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--RTL version:<link href="{{url('metronic/theme/default/dist/default/assets')}}/demo/base/style.bundle.rtl.css" rel="stylesheet" type="text/css" />-->
		<link rel="stylesheet" href="{{url(mix('css/login.css'))}}">

		<style type="text/css">
		.password-checklist .fa-check-circle {
			color: #8ddac1;
		}
		.password-checklist .list-group-item{
		font-size:13px
		}

		.password-checklist .fa-exclamation-circle {
			color: #ff9651;
		}
		.password-checklist{
		margin-bottom:10px;
		}
		</style>
		<style type="text/css">
			.logo-mobile{
				display:none
			}
			@media only screen and (max-width: 480px) {
				.m-login__content{
					display:none !important;
				}
				.m-login__aside{
					margin:auto !important;
				}

				.logo-mobile{
					display:block;
					margin:auto;
				}
				.logo-desktop{
					display:none;
				}

				#login .m-login__form .m-form__group .form-control{
					padding-left:10px;
				}

			}
			</style>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body id="login" class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
 										<img src="{{ url('images/logo-purple.png') }}" alt="" width="207px">
									</a>
								</div>
								<div class="m-login__signup" style="display:block;">
									<div class="m-login__head">
                                        <h3 class="m-login__title">Create an Account</h3>
                                        @if ($errors->has('email') || $errors->has('name') || $errors->has('password'))
                                        <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn" role="alert">
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                <span class="invalid-feedback" role="alert">
                                                    {{ $errors->first('email') }}
                                                </span>
                                                <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('name') }}
                                                </span>
                                                <span class="invalid-feedback" role="alert">
                                                {{ $errors->first('password') }}
                                                </span>
                                        </div>
                                        @endif


									</div>
									<form class="m-login__form m-form" method="POST" action="{{ route('register_step2')  . '?ref=' . $referred_by}}" >
                                        @csrf

                                        <input type="hidden" name="referred_by" value="{{ $referred_by }}">

                                        <div class="form-group m-form__group">
                                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} form-control m-input" name="name" value="{{ old('name') }}" placeholder="First Name" required autofocus>
										</div>
                                        <div class="form-group m-form__group">
                                            <input id="fname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }} form-control m-input" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
										</div>

										<div class="form-group m-form__group">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control m-input register-email" placeholder="Email Address"  name="email" value="{{ old('email') }}" required>
										</div>


										<div class="div-password-strength"></div>
										<div class="m-login__form-action">
											<button id="btn-signup" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air btn-register-signup " >Next</button>
										</div>
									</form>
								</div>

							</div>
                            <div class="m-stack__item m-stack__item--center" style="margin-top:20px;">
                                <div class="m-login__account">
                                    <span class="m-login__account-msg">
                                    Already have an account?
                                    </span>
                                    <a href="{{  route('login') }}" class="m-link m-link--focus m-login__account-link">Sign in</a>
                                </div>
                            </div>
						</div>
					</div>
				</div>
				<div class="m-grid__item m-grid__item--fluid m-grid m-grid--center m-grid--hor m-grid__item--order-tablet-and-mobile-1	m-login__content m-grid-item--center" style="background: url({{url('/images/login-bg.png')}}) no-repeat left top/cover;">
					<div class="m-grid__item">
						<h3 class="m-login__welcome">Cash back automatically.</h3>
						<p class="m-login__msg">
							It’s not points. It’s not coupons. It’s just cold, hard cash.
						</p>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="{{url('metronic/theme/default/dist/default/assets/')}}/vendors/jquery/dist/jquery.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

    <!--begin:: Global Optional Vendors -->

        <script src="{{url('metronic/theme/default/dist/default/assets/')}}/vendors/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>

		<script src="{{url('metronic/theme/default/dist/default/assets/')}}/vendors/js/framework/components/plugins/forms/jquery-validation.init.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Bundle -->
        <script src="{{url('metronic/theme/default/dist/default/assets/vendors/base/vendors.bundle.js')}}"></script>
        <script src="{{url('metronic/theme/default/dist/default/assets')}}/demo/default/base/scripts.bundle.js" type="text/javascript"></script>


		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts -->
		<script src="{{url('metronic/theme/default/dist/default/assets')}}/snippets/custom/pages/user/login.js" type="text/javascript"></script>
        <!--end::Page Scripts -->
		<script src="{{url("/js/plastiq.js")}}" type="text/javascript"></script>

		<script type="text/javascript">
		$(document).ready(function(){
			$(".m-login__form").on("submit", function(){
				$("#btn-signup").fadeTo("fast", .3).html("<i class='fa fa-spin fa-spinner'></i>")
			});
		});
		</script>

	</body>



	<!-- end::Body -->
</html>
