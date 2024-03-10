@extends('partials.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Modifier la location</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('Locations.update', $Location)}}"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="client_id">Client :</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}" {{ $location->client == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vehicule_id">Véhicule :</label>
                            <select name="vehicule_id" id="vehicule_id" class="form-control">
                                @foreach($vehicules as $vehicule)
                                    <option value="{{ $vehicule->id }}" {{ $location->vehicule_id == $vehicule->id ? 'selected' : '' }}>{{ $vehicule->matricule }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lieu_depart">Lieu de départ :</label>
                            <input type="text" class="form-control" id="lieu_depart" name="lieu_depart" value="{{ $location->lieu_depart }}" required>
                        </div>
                        <div class="form-group">
                            <label for="lieu_arrive">Lieu d'arrivée :</label>
                            <input type="text" class="form-control" id="lieu_arrive" name="lieu_arrive" value="{{ $location->lieu_arrive }}" required>
                        </div>
                        <div class="form-group">
                            <label for="date_debut">Date de début :</label>
                            <input type="date" class="form-control" id="date_debut" name="date_debut" value="{{ $location->date_debut }}" required>
                        </div>
                        <div class="form-group">
                            <label for="date_fin">Date de fin :</label>
                            <input type="date" class="form-control" id="date_fin" name="date_fin" value="{{ $location->date_fin }}" required>
                        </div>
                        <div class="form-group">
                            <label for="amount">Montant :</label>
                            <input type="number" class="form-control" id="amount" name="amount" value="{{ $location->amount }}" required>
                        </div>
                        <div class="form-group">
                            <label for="status">Statut :</label>
                            <input type="text" class="form-control" id="status" name="status" value="{{ $location->status }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier la location</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
