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
		.form-control{
			padding-left:20px !important
		}
		.div-password-strength > div{
			color:#fff !important;
		}
		#login #btn-signup{
			background: rgba(255, 255, 255, 0.23);
			filter: progid: DXImageTransform.Microsoft.gradient(startColorstr="$from", endColorstr="$to", GradientType=1);
			width: 100%;
			font-family: "Kanit";
			font-weight: 700;
			font-size: 16px;
			text-transform: uppercase;
			max-width: 370px;
			box-shadow: 0 15px 30px 0 rgba(13, 13, 13, 0.11), 0 5px 15px 0 rgba(13, 13, 13, 0.08) !important;
			color: #fff;
			border-color: #fff;
		}
		</style>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body id="login" class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">

		<!-- begin:: Page -->
		<div class="m-grid m-grid--hor m-grid--root m-page">
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-grid--tablet-and-mobile m-grid--hor-tablet-and-mobile m-login m-login--1 m-login--signin" id="m_login"
				style="background: url('{{url("/images/login-bg-full.png")}}');backround-size: cover;background-size: cover;">
				<div class="m-grid__item m-grid__item--order-tablet-and-mobile-2 m-login__aside bordered" style="margin:auto">
					<div class="m-stack m-stack--hor m-stack--desktop">
						<div class="m-stack__item m-stack__item--fluid">
							<div class="m-login__wrapper">
								<div class="m-login__logo">
									<a href="#">
                                        <img src="{{ url('images/plastiq-it-logo-white.png') }}" alt="" style="width: 250px">
									</a>
								</div>
								<div class="m-login__signup" style="display:block;">
									<div class="m-login__head">
                                        <h3 class="m-login__title" style="color:#fff">Create an Account </h3>
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
									<form class="m-login__form m-form" method="POST" action="{{ route('register') }}" >
                                        @csrf
                                        <input type="hidden" name="cashback_register" value="1"/>
                                        <input id="name" type="hidden"  name="name" value="{{ $name }}"  />
                                        <input id="fname" type="hidden"  name="last_name" value="{{ $lname }}" />
                                        <input id="email" type="hidden" class="register-email" name="email" value="{{ $email }}" />

                                        <div class="form-group m-form__group" style="color:#fff; font-size:17px">
                                            Gender : <label style="color:#fff; font-size:17px"><input type="radio" name="gender" value="male" /> Male</label> &nbsp; &nbsp;
                                            <label style="color:#fff; font-size:17px"><input type="radio" name="gender" value="female" /> Female </label>
                                        </div>

                                        <div class="form-group m-form__group" style="margin-top:10px;">
                                            <select name="age_bracket" class="form-control">
                                                <option value="">Age Bracket</option>
                                                <option value="18-24">18-24</option>
                                                <option value="25-34">25-34</option>
                                                <option value="35-44">35-44</option>
                                                <option value="45-64">45-64</option>
                                                <option value="65+">65+</option>
                                            </select>
                                        </div>

                                        <div class="form-group m-form__group">
                                            <input id="phone" type="number" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} form-control m-input" placeholder="Phone Number"  name="phone" value="{{ old('phone') }}" required>
										</div>

										<div class="form-group m-form__group">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control m-input  listen-on-keyup register-password" data-act="register_validate_password_field" name="password" placeholder="Password"  required>
										</div>
										<div class="form-group m-form__group">
                                            <input id="password-confirm" type="password" class="form-control form-control m-input " name="password_confirmation" placeholder="Confirm Password" required>
										</div>
										<div class="div-password-strength"></div>
										<div class="m-login__form-action">
											<button id="btn-signup" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air btn-register-signup " disabled>Sign Up</button>
										</div>
									</form>
								</div>

							</div>

						</div>
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
