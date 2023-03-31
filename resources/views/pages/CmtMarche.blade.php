@extends('layouts.app1')
@section('contenu')
<section id="home" class="hero">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="home-slider owl-carousel">
                <div class="slider-item" style="background-image: url(taxiImg/homebg.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
                        
                            
                            <div class="container">
                                <div class="flexs">
                                    <div class="shrink-0 flex items-center">
                                            <img class="rounded-circle" src="{{asset('back/img/user.jpg')}}" alt=""
                                                        style="width: 100px; height: 100px;">
                                    </div>
                                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                                        <a class="navbar-brand" href="#">Goride</a>
                                    </div>
                                </div>
                                
                                <div class="collapse navbar-collapse" id="ftco-nav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a href="#homepropos" class="nav-link">Apropos</a></li>
                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Passager</a>
                                            <div class="dropdown-menu bg-transparent border-0">
                                            <a href="#homefoctionnement" class="dropdown-item">Comment ca marche</a>
                                            <a href="" class="dropdown-item">Nos prix & Engagement</a>
                                            </div>
                                        </div>
                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Chauffeur</a>
                                            <div class="dropdown-menu bg-transparent border-0">
                                            <a href="#homefoctionnement" class="dropdown-item">Comment ca marche</a>
                                            </div>
                                        </div>

                                        <div class="nav-item dropdown">
                                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Inscription</a>
                                            <div class="dropdown-menu bg-transparent border-0">
                                            <a href="{{URL::to('register')}}" class="dropdown-item"> Compte Client</a>
                                            <a href="{{URL::to('register')}}" class="dropdown-item"> Compte Chauffeur</a>
                                            </div>
                                        </div>
                                        <li class="nav-item active"><a href="{{URL::to('login')}}" class="nav-link">Se connecter</a></li>
                                    </ul>
                                </div>
                            </div>
                        </nav>
                        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                        
                            <div class="col-md-12 ftco-animate text-left">

                                    <h1 class="">Bienvenue chez GoRide</h1>
                                    <h2 class="subheading mb-4">Le vtc local qui vous accompagne en toute sécurité dans tous vos trajets.</h2>
                                    
                                <div class="">
                                    <img class="float-left" src="{{asset('taxiImg/playstore.jpg')}}" alt="" style="width: 100px; height: 40px;">
                                    <img class="" src="{{asset('taxiImg/apstore.jpg')}}" alt="" style="width: 100px; height: 40px;">
                                </div>
                               
                            </div>
                            

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<section id="homefoctionnement" class="hero">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="">
            <div class="overlay"></div>
                <div class="flex">
                    <header>
                            <h2 class="text-lg font-medium  text-">
                                {{ __('Comment ça marche ?') }}
                            </h2>
                    </header>
                </div>
                <div class="row ftco-animate">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div>
                                    <Img class="float-center user-img mb-5" src="{{asset('taxiImg/taxibolo14.png')}}" alt="" style="width: 393px; height: 227px;">
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Votre chauffeur Faster, vous récupère et vous 
                                        dépose en toute sécurité à la destination indiquée. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div >
                                    <Img class="float-center user-img mb-5" src="{{asset('taxiImg/etoil.jpg')}}" alt="" style="width: 200px; height: 230px;">
                                </div>
                                <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Recevez votre facture et noter votre trajet ainsi que votre chauffeur. </p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimony-wrap p-4 pb-5">
                                <div  >
                                    <img class="float-center user-img mb-5" src="{{asset('taxiImg/taxibolo13.png')}}" alt="" style="width: 405px; height: 249px;">
                                </div>
                                <div class="text text-center">
                                <p class="mb-5 pl-4 line">Activez l’application Faster. Saisissez votre destination via géolocalisation puis 
                                        validez le montant estimé de votre trajet. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</section>

<section id="homepropos" class="hero">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="">
                <div class="overlay"></div>
                <div class="row ftco-animate">
                <div class="col-md-12">
                        <div class="flex">
                            <header>
                                    <h2 class="text-lg font-medium text-gray-900 text-red">
                                        {{ __('A propos de Faster.') }}
                                    </h2>
                            </header>
                        </div>
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div>
                                        <div>
                                            <Img class="float-right mb-5" src="{{asset('taxiImg/taxibolo5.png')}}" alt="" style="width: 500px; height: 350px;">
                                                
                                        </div>
                                                    
                                        <div class="flex">
                                            <strong><h2 class="mb-4">Le meilleur choix de transport pour une agréable journée. </h2></strong>
                                                <p class="mb-5 pl-4 line">Faster est le service VTC à la demande qui vous accompagnera en toute sécurité dans 
                                                tous vos déplacements locaux. Via l’application FASTER vous pourrez commander votre chauffeur et vous déplacer vers la destination de votre choix en indiquant 
                                                simplement la géolocalisation de votre destination finale.  </p> 
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div> 
                    </div>       
                </div>
            </div>
        </div>
    </div>
</div>

</section>

<section id="passager" class="hero">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="home-slider owl-carousel">
                <div class="slider-item" style="background-image: url(taxiImg/taxibolo5.png);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="">
                            <div class="overlay"></div>
                            <div class="row ftco-animate">
                                <div class="col-md-12">
                                        <div class="flex">
                                            <header>
                                                    <h2 class="text-lg font-medium text-gray-900 text-red">
                                                        {{ __('A propos de Faster.') }}
                                                    </h2>
                                            </header>
                                        </div>
                                            <div class="item">
                                                <div class="testimony-wrap p-4 pb-5">
                                                    <div>
                                                        <div>
                                                            <Img class="float-right mb-5" src="{{asset('taxiImg/taxibolo5.png')}}" alt="" style="width: 500px; height: 350px;">
                                                                
                                                        </div>
                                                                    
                                                        <div class="flex">
                                                            <strong><h2 class="mb-4">FASTER prend soin de ses passagers</h2></strong>
                                                                <p class="mb-5 pl-4 line">Faster est le service VTC à la demande qui vous accompagnera en toute sécurité dans tous vos déplacements locaux.   </p> 
                                                                <p><a href="{{URL::to('register')}}" class="dropdown-item btn btn-primary"> Compte Chauffeur</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                <div class="overlay"></div>
                    <div class="flex">
                        <header>
                                <h2 class="text-lg font-medium  text-">
                                    {{ __('Comment ça marche ?') }}
                                </h2>
                        </header>
                    </div>
                    <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div>
                                        <Img class="float-center user-img mb-5" src="{{asset('taxiImg/taxibolo14.png')}}" alt="" style="width: 393px; height: 227px;">
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-5 pl-4 line">Votre chauffeur Faster, vous récupère et vous 
                                            dépose en toute sécurité à la destination indiquée. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div >
                                        <Img class="float-center user-img mb-5" src="{{asset('taxiImg/etoil.jpg')}}" alt="" style="width: 200px; height: 230px;">
                                    </div>
                                    <div class="text text-center">
                                        <p class="mb-5 pl-4 line">Recevez votre facture et noter votre trajet ainsi que votre chauffeur. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                    <div  >
                                        <img class="float-center user-img mb-5" src="{{asset('taxiImg/taxibolo13.png')}}" alt="" style="width: 405px; height: 249px;">
                                    </div>
                                    <div class="text text-center">
                                    <p class="mb-5 pl-4 line">Activez l’application Faster. Saisissez votre destination via géolocalisation puis 
                                            validez le montant estimé de votre trajet. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
    </div>
</div>
</section>


<section id="passager" class="hero">
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
        <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
            <div class="home-slider owl-carousel">
                <div class="slider-item" style="background-image: url(taxiImg/taxibolo5.png);">
                                        <div class="flex">
                                            <header>
                                                    <h2 class="text-lg font-medium text-gray-900 text-red">
                                                        {{ __('A propos de Faster.') }}
                                                    </h2>
                                            </header>
                                        </div>
                                            <div class="item">
                                                <div class="testimony-wrap p-4 pb-5">
                                                    <div>
                                                                    
                                                        <div class="flex">
                                                            <strong><h2 class="mb-4">FASTER prend soin de ses passagers</h2></strong>
                                                                <p class="mb-5 pl-4 line">Faster est le service VTC à la demande qui vous accompagnera en toute sécurité dans tous vos déplacements locaux.   </p> 
                                                                <p><a href="{{URL::to('register')}}" class="dropdown-item btn btn-primary">Devenir Chauffeur</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div> 
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection