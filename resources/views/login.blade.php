<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" class="light" data-header-styles="light" data-menu-styles="light" data-toggled="close" loader="disable" data-lt-installed="true">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>YNEX - Tailwind Admin Template</title>
      <script src="https://cdn.tailwindcss.com"></script>
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
                        <p class="h5 font-semibold mb-2 text-center">Se connecter</p>
                        <form action="/login" method="POST"> 
                            @csrf
                        <div class="grid grid-cols-12 gap-y-4">
                            <div class="xl:col-span-12 col-span-12">
                                <label for="signin-username" class="form-label text-default">
                                    Identifiant
                                </label> 
                                <input type="text" class="form-control form-control-lg w-full !rounded-md" name="utilisateur" id="new-username" placeholder="Identifiant" autocomplete="new-username" >
                            </div>
                            <div class="xl:col-span-12 col-span-12 mb-2">
                                <label for="signin-password" class="form-label text-default block">
                                    Mot de passe
                                    <a href="#" class="ltr:float-right rtl:float-left text-danger">Mot de passe oublié ?</a>
                                </label> 
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
               </div>
               <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            </div>
         </div>
      </div>
      <script src="../assets/js/auth-custom.js"></script>
   </body>
</html>