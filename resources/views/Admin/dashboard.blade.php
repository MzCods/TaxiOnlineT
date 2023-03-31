@extends('layouts.app')
@section('contenu')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                <header>
                    <h2 class="text-lg font-medium text-gray-900">
                        {{ __('Enregistrer des trajet') }}
                    </h2>

                    <p class="mt-1 text-sm text-gray-600">
                        {{ __("Bienvenue Master ,Enregistre de nouveau trajet aujourd'/hui") }}
                    </p>
                </header>
                <form method="POST" action="{{ route('registerCourses') }}" class="mt-6 space-y-6">
                    @csrf

                    <div>
                        <x-input-label for="debut" :value="__('Debut de la Zone')" />
                        <x-text-input id="debut" class="block mt-1 w-full" type="text" name="debut" :value="old('debut')" required autofocus autocomplete="debut" />
                        <x-input-error :messages="$errors->get('debut')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="fin" :value="__('Fin de la Zone')" />
                        <x-text-input id="fin" class="block mt-1 w-full" type="text" name="fin" :value="old('fin')" required autofocus autocomplete="fin" />
                        <x-input-error :messages="$errors->get('fin')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="prix" :value="__('Montant')" />
                        <x-text-input id="prix" class="block mt-1 w-full" type="number" name="prix" :value="old('prix')" required autocomplete="prix" />
                        <x-input-error :messages="$errors->get('prix')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </div>

                </form>
                </section>

                


            </div>
        </div>
    </div>
    
        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <section>
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Tous les trajet ') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Bienvenue Master , Voici tous les trajet enregistrer a cet jours ") }}
                        </p>
                    </header>
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-12">
                                <div class="bg-secondary  h-100 p-4">
                                    <h6 class="mb-4">Trajet</h6>
                                    <div class="form-group">
                                        @if (session()->has('success'))
                                            <div class="alert alert-success">{{ session()->get('success') }}</div>
                                        @endif
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Zonne de Depart</th>
                                                    <th scope="col">Zonne d'arriver</th>
                                                    <th scope="col">Montant</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach($courses as $course)
                                                    <tr>
                                                        <td>{{ $course->id}}</td>
                                                        <td>{{ $course->departZone}}</td>
                                                        <td>{{ $course->arriverZone}}</td>
                                                        <td>{{ $course->prix}}</td>
                                                        
                                                        <td>
                                                            <a href="{{ route('delectCourse',['id'=>$course->id]) }}" class="btn btn-primary">Supprimer passager </a>
                                                        </td>
                                                            
                                                @endforeach 

                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="sidebar pe-4 pb-3">
            <nav class="navbar  navbar-light float-right">
                <a href="#" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>GoRide</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{asset('back/img/user.jpg')}}" alt=""
                        style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0"></h6>
                    <span>Admin</span>
                </div>
                </div>
                <div class="navbar-nav w-100">
                <a href="{{URL::to('admin.home')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-keyboard me-2"></i>Vos Utilisateur</a>
                    <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{URL::to('infoClient')}}" class="dropdown-item">Client</a>
                    <a href="{{URL::to('infoChauffeur')}}" class="dropdown-item">Chauffeur</a>
                    </div>
                </div>
                </div>
            </nav>
    </div>

@endsection('contenu')
