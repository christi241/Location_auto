@extends('partialsClient.layout')

@section('content')
    <div class="content">
        <div class="py-4 px-3 px-md-4">
            <div class="mb-3 mb-md-4 d-flex justify-content-between">
                <div class="h3 mb-0">Nos véhicules</div>
            </div>
            <div class="row">
                @foreach($vehicules as $vehicule)
                    <div class="col-md-6 col-xl-4 mb-3 mb-md-4">
                        <!-- Card -->
                        <div class="card h-70">
                            <div class="card-header d-flex">
                                <h5 class="h6 font-weight-semi-bold text-uppercase mb-0">{{$vehicule->matricule}}</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="media align-items-center px-3 px-md-4 mb-3 mb-md-4">
                                    <div class="media-body">
                                        <h4 class="h3 lh-1 mb-2">Statut: {{$vehicule->statut}}</h4>
                                        <p class="small text-muted mb-0">Date d'achat: {{$vehicule->date_achat}}</p>
                                        <p class="small text-muted mb-0">Kilométrage: {{$vehicule->km_default}}</p>
                                    </div>
                                </div>
                                <div class="card-img">
                                    <img class="img-fluid" src="{{ asset('photos/1710022920.jpg') }}" alt="Image du véhicule">
                                </div>
                                <a type="submit" class="btn btn-toolbar" href="#">Voir détails</a>
                            </div>
                        </div>
                        <!-- End Card -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
