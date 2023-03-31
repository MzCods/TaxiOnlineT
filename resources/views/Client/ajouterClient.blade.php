@extends('layout.app')
@section('content')
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="mt-16">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
            <div class="scale-100 p-6 bg-white from-gray-700/50 via-transparent rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                <div>
                    <div>

                        <h1 class="mt-6 text-xl font-semibold  text-gray-900">Inscription</h1>
                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">Votre chauffeur en un clic !</p>

                    </div>
                    <div class=" mt-3 col-12 offset-md-0">
                        <form>
                            <div class="mb-3 ">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    
                </div>
                   
            </div>
        </div>
    </div>
</div>    
@endsection