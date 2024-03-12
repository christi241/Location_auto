@extends('partialsClient.layout')

@section('content')


<div class="container">
    <h2 class="text-center mb-4">Faire une nouvelle location</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('locations.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="user_id">Client :</label>
                            <select name="user_id" id="user_id" class="form-control">
                                @foreach($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="vehicule_id">Véhicule :</label>
                            <select name="vehicule_id" id="vehicule_id" class="form-control">
                                @foreach($vehicules as $vehicule)
                                    <option value="{{ $vehicule->id }}">{{ $vehicule->matricule }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="lieu_depart">Lieu de départ :</label>
                            <input type="text" class="form-control" id="lieu_depart" name="lieu_depart" required>
                        </div>
                        <div class="form-group">
                            <label for="lieu_arrive">Lieu d'arrivée :</label>
                            <input type="text" class="form-control" id="lieu_arrive" name="lieu_arrive" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Date :</label>
                            <input type="date" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="heure_debut">Heure de début :</label>
                            <input type="time" class="form-control" id="heure_debut" name="heure_debut" required>
                        </div>
                        <div class="form-group">
                            <label for="heure_fin">Heure de fin :</label>
                            <input type="time" class="form-control" id="heure_fin" name="heure_fin" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Faire la location</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
