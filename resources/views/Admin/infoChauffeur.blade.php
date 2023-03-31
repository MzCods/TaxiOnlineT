@extends('layouts.app')
@section('contenu')
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
                                                    <th scope="col">Nom</th>
                                                    <th scope="col">Prenom</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Telephone</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($chaufeure as $chauf)
                                                <tr>
                                                    <td>{{ $chauf->id}}</td>
                                                    <td>{{ $chauf->nom}}</td>
                                                    <td>{{ $chauf->prenom}}</td>
                                                    <td>{{ $chauf->email}}</td>
                                                    <td>{{ $chauf->telephone}}</td>
                                                    <td>
                                                        <a href="{{ route('delect',['id'=>$chauf->id]) }}" class="btn btn-primary">Supprimer passager </a>
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

    
@endsection