@extends('layout.app')

@section('content')
<div class="main-content">
   <!-- Page Header --> 
   <div class="block justify-between page-header md:flex">
      <div>
         <h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Accueil</h3>
      </div>
   </div>
   <!-- Page Header Close --> <!-- Start::row-1 --> 
   <div class="about-container" style="background-color:transparent">
      <div class="aboutus-banner">
         <div class="aboutus-banner-content container">
            <div class="grid grid-cols-12 sm:gap-x-6">
               <div class="xxl:col-span-6 xl:col-span-6 col-span-12">
                  <div class="p-4 text-start mb-6">
                     <h6 class="font-semibold text-white pb-6"> <span class="about-heading-white text-[1rem]">Accueil</span> </h6>
                     <h3 class="font-semibold mb-2 text-[1.75rem]">Bonjour <span class="text-success">{{ auth()->user()->prenom }}</span></h3>
                     <p class="mb-6 font-normal opacity-[0.7] text-[1rem]">Bienvenu dans votre espace intranet</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--End::row-1 --> 
</div>
<script>$('#sidebar-accueil').addClass('active');</script>
@stop