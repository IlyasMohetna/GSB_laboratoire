<div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
   <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
      <div class="simplebar-height-auto-observer-wrapper">
         <div class="simplebar-height-auto-observer"></div>
      </div>
      <div class="simplebar-mask">
         <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
            <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
               <div class="simplebar-content" style="padding: 8px 0px 80px;">
                  <!-- Start::nav --> 
                  <nav class="main-menu-container nav nav-pills flex-column sub-open open">
                     <div class="slide-left" id="slide-left">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                        </svg>
                     </div>
                     <ul class="main-menu">
                        <li class="slide">
                           <a href="{{ route('accueil.show') }}" id="sidebar-accueil" class="side-menu__item"> 
                              <i class="bx bx-home side-menu__icon"></i> 
                              <span class="side-menu__label">
                                 Accueil
                              </span> 
                           </a> 
                        </li>

                        @role('responsable')
                        <li class="slide">
                           <a href="{{ route('frais.visiteurs_show') }}" class="side-menu__item"> 
                              <i class="bx bx-stats side-menu__icon"></i> 
                              <span class="side-menu__label">
                                 Mon équipe
                              </span> 
                           </a> 
                        </li>
                        @endrole
                        
                        <li class="slide has-sub open">
                           <a href="javascript:void(0);" class="side-menu__item"> 
                              <i class="bx bx-car side-menu__icon"></i> 
                              <span class="side-menu__label">
                                 Covoiturage
                              </span> 
                              <i class="fe fe-chevron-right side-menu__angle"></i> 
                           </a> 
                           <ul class="slide-menu child1">
                              <li><a href="{{ route('covoiturage.annonce_search_show') }}" id="sidebar-covoiturer" class="side-menu__item">Covoiturer</a></li>
                              <li><a href="{{ route('covoiturage.annonces_show') }}" id="sidebar-annonces" class="side-menu__item">Mes annonces</a></li>
                              <li><a href="{{ route('covoiturage.reservations_show') }}" id="sidebar-reservations" class="side-menu__item">Mes réservations</a> </li>
                              <li><a href="{{ route('covoiturage.annonce_create_show') }}" id="sidebar-annonce-create" class="side-menu__item">Déposer une annonce</a> </li>
                              <li><a href="{{ route('covoiturage.parc_show') }}" id="sidebar-parc" class="side-menu__item">Parc automobile</a> </li>
                           </ul>
                        </li>

                        @role('visiteur')
                        <li class="slide has-sub open">
                           <a href="javascript:void(0);" class="side-menu__item"> 
                              <i class="bx bx-capsule side-menu__icon"></i>
                              <span class="side-menu__label">
                                 Gestion de visite
                              </span> 
                              <i class="fe fe-chevron-right side-menu__angle"></i> 
                           </a> 
                           <ul class="slide-menu child1">
                              <li class="slide side-menu__label1"><a href="javascript:void(0)">Gestion de visite</a></li>
                              <li class="slide"><a href="{{ route('visite.visites_show') }}" id="sidebar-visites" class="side-menu__item">Mes visites</a></li>
                              <li class="slide"> <a href="{{ route('visite.create_visite') }}" id="sidebar-visite-create" class="side-menu__item" >Créer une visite</a> </li>
                              <li class="slide"> <a href="{{ route('visite.medicaments_show') }}" id="sidebar-medicaments" class="side-menu__item" >Les médicaments</a> </li>
                              <li class="slide"> <a href="{{ route('visite.praticiens_show') }}" id="sidebar-praticiens" class="side-menu__item">Les praticiens</a> </li>
                           </ul>
                        </li>
                        @endrole

                        @role(['comptable','visiteur'])
                        <li class="slide has-sub open">
                           <a href="javascript:void(0);" class="side-menu__item"> 
                              <i class="bx bx-money side-menu__icon"></i> 
                              <span class="side-menu__label">
                                 Gestion de frais
                              </span> 
                              <i class="fe fe-chevron-right side-menu__angle"></i> 
                           </a> 
                           <ul class="slide-menu child1">
                              @role(['comptable'])
                              <li class="slide"> <a href="{{ route('frais.visiteurs_show') }}" class="side-menu__item">Gestion des frais</a> </li>
                              @endrole
                              @role('visiteur')
                              <li class="slide"> <a href="{{ route('frais.frais_list_show_tout_frais') }}" id="sidebar-mesfrais" class="side-menu__item">Mes frais</a> </li>
                              <li class="slide"> <a href="{{ route('frais.recap_show') }}" id="sidebar-frais-recap_annuel" class="side-menu__item">Mon récap annuel</a> </li>
                              <li class="slide"> <a href="{{ route('frais.frais_list_show', ['year' => now()->year, 'month' => now()->month]) }}" id="sidebar-frais-recap_mensuel" class="side-menu__item">Mon récap mensuel</a> </li>
                              @endrole
                           </ul>
                        </li>
                        @endrole
                        

                        <li class="slide has-sub open">
                           <a href="javascript:void(0);" class="side-menu__item"> 
                              <i class="bx bx-buildings side-menu__icon"></i> 
                              <span class="side-menu__label">
                                 Reservation de salles
                              </span> 
                              <i class="fe fe-chevron-right side-menu__angle"></i> 
                           </a> 
                           <ul class="slide-menu child1">
                              <li class="slide"> <a href="{{ route('salle.search_show') }}" id="sidebar-recherche-salle" class="side-menu__item">Recherche de salle</a> </li>
                              <li class="slide"> <a href="{{ route('salle.reservation_show') }}" id="sidebar-salles-reservations" class="side-menu__item">Mes réservations</a> </li>
                              <li class="slide"> <a href="{{ route('salle.planning_show') }}" id="sidebar-planning-salle" class="side-menu__item">Planning des salles</a> </li>
                           </ul>
                        </li>

                        @role('admin')
                        <li class="slide has-sub open">
                           <a href="javascript:void(0);" class="side-menu__item"> 
                              <i class="bx bx-money side-menu__icon"></i> 
                              <span class="side-menu__label">
                                 Paramétrage
                              </span> 
                              <i class="fe fe-chevron-right side-menu__angle"></i> 
                           </a> 
                           <ul class="slide-menu child1">
                              <li class="slide"> <a href="{{ route('parametrage.vehicule_service_show') }}" id="sidebar-parametrage-vehicule-service" class="side-menu__item">Véhicule de services</a> </li>
                              <li class="slide"> <a href="{{ route('parametrage.users_show') }}" id="sidebar-parametrage-utilisateurs" class="side-menu__item">Utilisateurs</a> </li>
                              <li class="slide"> <a href="{{ route('parametrage.vehicule_service_show') }}" id="sidebar-parametrage-vehicule-service" class="side-menu__item">Structure</a> </li>
                           </ul>
                        </li>
                        @endrole
                     </ul>
                     <div class="slide-right" id="slide-right">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                           <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                        </svg>
                     </div>
                  </nav>
                  <script>
                     ($('.side-menu__item.active')).parent().parent().prev('a').addClass('active');
                  </script>
               </div>
            </div>
         </div>
      </div>
      <div class="simplebar-placeholder" style="width: auto; height: 997px;"></div>
   </div>
   <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
      <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
   </div>
   <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
      <div class="simplebar-scrollbar" style="height: 547px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
   </div>
</div>