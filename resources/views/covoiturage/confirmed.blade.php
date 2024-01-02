@extends('layout.app')
@section('content')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="{{ asset('assets/js/Polyline.encoded.js') }}"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<div class="main-content">
   <!-- End:: row-4 --> <!-- Start:: row-5 --> 
   <div class="grid grid-cols-12 gap-6">
      <div class="col-span-12">
         <div class="box mt-12 mx-auto w-1/2">
            <div class="box-header justify-between">
               <div class="box-title">Votre reservation a été confirmé</div>
            </div>
            <div class="box-body block items-center space-y-3 mx-auto">
                <div>
                    <img class="w-40" src="{{ asset('assets/img/green_check_animated_once.gif') }}">
                </div>
            </div>
            <div class="mx-auto text-center font-semibold w-1/2">
                <p>Félicitation votre réservation a été confirmer<br>
                Vous allez recevoir prochainement une confirmation de votre réservation par <b>mail</b>.
                <br>
                On vous souhaitons un bon voyage à votre destination.</p>
            </div>
            <div class="p-4 mx-auto">
                <a href="{{ route('covoiturage.reservations_show') }}">
                    <button type="button" class="ti-btn ti-btn-success-full" style="background-color:#1bd623">
                        Revenir à mon tableau de reservation
                    </button>
                </a>    
            </div>
         </div>
      </div>
   </div>
   <!--  -->
</div>
@stop