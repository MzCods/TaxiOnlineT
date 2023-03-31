@extends('layouts.app')
<x-app-layout>
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
                            {{ __('Les trajet Disponible ') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Bienvenue  , Voici tous les trajet disponible a cet jours ") }}
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
                                                            <a href="{{ route('taketaxi',['id'=>$course->id]) }}" class="btn btn-primary">Commander</a>
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
@endsection('contenu')
</x-app-layout>