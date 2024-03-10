@extends('partials.layout')
@section('content')



<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Formulaire d'ajout de véhicule</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('vehicules.store') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="date_achat">Date d'achat</label>
                        <input type="date" class="form-control" id="date_achat" name="date_achat" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="km_default">Kilométrage par défaut</label>
                        <input type="number" class="form-control" id="km_default" name="km_default" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="matricule">Matricule</label>
                        <input type="text" class="form-control" id="matricule" name="matricule" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="chauffeur_id">Chauffeur</label>
                        <select class="form-control" id="chauffeur_id" name="chauffeur_id" required>
                            <option value="Sélectionner un chauffeur"></option>
                            @foreach($chauffeurs as $chauffeur)
                                <option value="{{ $chauffeur->id }}">{{ $chauffeur->nom }} {{ $chauffeur->prenom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="statut">Statut</label>
                        <input type="text" class="form-control" id="statut" name="statut" required>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Ajouter véhicule</button>
            </form>
        </div>
    </div>
</div>






@endsection
