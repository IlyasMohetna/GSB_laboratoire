<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light" data-toggled="close" loader="disable" data-lt-installed="true">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>GSB - Intranet</title>
		<script src="https://cdn.tailwindcss.com"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
		<link id="style" href="{{ asset('assets/libs/simplebar/simplebar.min.css') }}" rel="stylesheet">
		<meta http-equiv="imagetoolbar" content="no">
	</head>
	<body class="" data-new-gr-c-s-check-loaded="14.1143.0" data-gr-ext-installed="" cz-shortcut-listen="true">
		<!-- ========== END Switcher  ========== --> <!-- Loader --> 
		<div id="loader" class="!hidden"> <img src="../assets/images/media/loader.svg" alt=""> </div>
		<!-- Loader --> 
		<div class="container">
			<div class="flex justify-center authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
				<div class="grid grid-cols-12">
					<div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
					<div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
						<div class="my-[2.5rem] flex justify-center">
							<a href="index.html">
							<img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="desktop-logo w-9/12 justify-center mx-auto">
							<img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="desktop-dark">
							</a>
						</div>
						<div class="box">
							<div class="box-body !p-[3rem]">
								<p class="h5 font-semibold mb-2 text-center">Se connecterr</p>
								<form action="/login" method="POST">
									@csrf
									<div class="grid grid-cols-12 gap-y-4">
                                        @if(null !== Session::get('error'))
                                            <div class="col-span-12">
                                                <span class="text-danger">Mot de passe ou nom d'utilisateur incorrecte !</span>
                                            </div>    
                                        @endif
										<div class="xl:col-span-12 col-span-12">
											<label for="signin-username" class="form-label text-default">
											    Identifiant
											</label> 
											<input type="text" class="form-control form-control-lg w-full !rounded-md" name="utilisateur" id="new-username" placeholder="Identifiant" autocomplete="new-username" >
										</div>
										<div class="xl:col-span-12 col-span-12 mb-2">
											<div class="input-group">
												<input type="password" class="form-control form-control-lg !rounded-s-md" name="password" id="new-password" placeholder="Mot de passe" autocomplete="new-password">
												<button aria-label="button" class="ti-btn ti-btn-light !rounded-s-none !mb-0" type="button" onclick="createpassword('signin-password',this)" id="button-addon2">
												<i class="align-middle ri-eye-off-line"></i>
												</button> 
											</div>
											<div class="mt-2">
												<div class="form-check !ps-0 text-black">
													<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
													<label class="form-check-label text-[#8c9097] font-normal" for="defaultCheck1"> En se rappelle de vous ? </label>
												</div>
											</div>
										</div>
										<div class="xl:col-span-12 col-span-12 grid mt-2">
											<button type="submit" class="ti-btn ti-btn-primary !bg-primary !text-white !font-medium">
												Connexion
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="block" style="background-color:yellow;padding:4%;font-weight:bold">
							<a href="{{ route('documentation') }}" target="_blank">Lien : Documentation de la base de donnée</a><br>
							<a href="/request-docs" target="_blank">Lien : Documentation technique des classes</a><br>
							<a href="/uml" target="_blank">Lien : Diagramme UML des classes</a>
						</div>
					</div>
					<div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
				</div>
			</div>
		</div>
        <script>
            $(document).ready(function(){
                $('#button-addon2').on('click', function(){
                    $input = $('#new-password');
                    $button = $(this);
                    var type = $input.prop('type');
                    if(type == 'password'){
                        $input.prop('type', 'text');
                        $button.html('<i class="align-middle ri-eye-line"></i>');
                    }else{
                        $input.prop('type', 'password');
                        $button.html('<i class="align-middle ri-eye-off-line"></i>');
                    }
                })
            });
        </script>
		<script src="../assets/js/auth-custom.js"></script>
	</body>
</html>