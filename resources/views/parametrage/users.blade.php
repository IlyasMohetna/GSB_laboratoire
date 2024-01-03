@extends('layout.app')
@section('content')
<div class="main-content text-defaulttextcolor text-defaultsize">
	<!-- Page Header --> 
	<div class="block justify-between page-header md:flex">
		<div>
			<h3 class="!text-defaulttextcolor dark:!text-defaulttextcolor/70 dark:text-white dark:hover:text-white text-[1.125rem] font-semibold">Les utilisateurs</h3>
		</div>
		<div class="btn-list md:mt-0 mt-2">
			<a href="{{ route('parametrage.user_create_show') }}"><button type="button" class="ti-btn bg-primary text-white btn-wave !font-medium !me-[0.375rem] !ms-0 !text-[0.85rem] !rounded-[0.35rem] !py-[0.51rem] !px-[0.86rem] shadow-none">
				<i class="las la-plus"></i>Ajouter un utilisateur
			</button></a>
		</div>
	</div>
	<!-- End::row-3--> <!-- Start::row-4 --> 
    <div class="grid grid-cols-12 md:gap-x-6">
        @foreach($users as $user)
		<div class="xl:col-span-3 col-span-12">
			<div class="box text-center">
				<div class="box-header !border-b-0 pb-0">  </div>
				<div class="box-body !pt-1">
					<span class="avatar avatar-xl avatar-rounded me-2 mb-2">
                        <div class="inline-flex items-center justify-center w-16 h-16 text-md font-bold text-white bg-indigo-500 rounded-full">
                            {{ substr($user->prenom, 0, 1).''.substr($user->nom, 0, 1)}}
                        </div>
                    </span> 
					<div class="font-semibold text-[1rem] mt-2">{{ $user->prenom.' '.$user->nom }}</div>
					<p class="text-[#8c9097] dark:text-white/50 text-[.8rem]">Fonction : <b>{{ $user->fonction->nom_fonction }}</b></p>
                    <p class="text-[#8c9097] dark:text-white/50 text-[.8rem]">Agence : <b>{{ $user->agence->nom_agence }}</b></p>
					<p class="mb-4 text-[#8c9097] dark:text-white/50 text-[.8rem]">Ville : <b class="capitalize">{{ $user->agence->ville->nom }}</b></p>
				</div>
			</div>
		</div>
        @endforeach
	</div>
</div>
<script>$('#sidebar-parametrage-utilisateurs').addClass('active');</script>
@stop