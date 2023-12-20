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
               <div class="box-title">Votre visite a été confirmé</div>
            </div>
            <div class="box-body block items-center space-y-3 mx-auto">
                <div>
                    <img class="w-40" src="{{ asset('assets/img/green_check_animated_once.gif') }}">
                </div>
            </div>
            <div class="mx-auto text-center font-semibold w-1/2">
                <p>Félicitations, votre visite a été confirmée.<br>
                Votre responsable et vous recevrez prochainement une confirmation par <b>email</b>.
                <br>
                Nous vous souhaitons une agréable visite.</p>
            </div>
            <div class="p-4 mt-2">
                <div class="grid grid-cols-2 space-x-3 text-center">
                    <div>
                        <a href="{{ route('visite.generer_ordre_mission', ['id_visite' => $id_visite]) }}"><button class="ti-btn ti-btn-primary-full ti-btn-wave w-4/5 float-right" type="button"><i class="las la-download"></i> Ordre de mission</button></a>
                    </div>
                    <div>
                        <button class="ti-btn ti-btn-primary-full ti-btn-wave w-4/5 float-left" type="button"><i class="las la-external-link-square-alt"></i> Accéder à ma visite</button>
                    </div>
                </div>
            </div>
         </div>
      </div>
   </div>
   <!--  -->
</div>
@stop