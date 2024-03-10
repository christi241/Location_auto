@extends('partials.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4">Mise à jour du véhicule</h2>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('vehicules.update', $vehicule->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="date_achat">Date d'achat :</label>
                            <input type="date" class="form-control" name="date_achat" value="{{ $vehicule->date_achat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="km_default">Kilométrage par défaut :</label>
                            <input type="number" class="form-control" name="km_default" value="{{ $vehicule->km_default }}" required>
                        </div>
                        <div class="form-group">
                            <label for="matricule">Matricule :</label>
                            <input type="text" class="form-control" name="matricule" value="{{ $vehicule->matricule }}" required>
                        </div>
                        <div class="form-group">
                            <label for="chauffeur_id">Chauffeur :</label>
                            <select class="form-control" name="chauffeur_id" required>
                                <option value="">Sélectionner un chauffeur</option>
                                @foreach ($chauffeurs as $chauffeur)
                                    <option value="{{ $chauffeur->id }}" {{ $vehicule->chauffeur_id == $chauffeur->id ? 'selected' : '' }}>
                                        {{ $chauffeur->prenom }} {{ $chauffeur->nom }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="statut">Statut :</label>
                            <input type="text" class="form-control" name="statut" value="{{ $vehicule->statut }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection
