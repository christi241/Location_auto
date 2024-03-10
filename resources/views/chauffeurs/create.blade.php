@extends('partials.layout')
@section('content')
<div class="container">
    <h2 class="text-center mb-4">Ajout d'un chauffeur</h2>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('chauffeurs.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" class="form-control" name="nom" required>
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom :</label>
                            <input type="text" class="form-control" name="prenom" required>
                        </div>
                        <div class="form-group">
                            <label for="experience">Expérience :</label>
                            <input type="text" class="form-control" name="experience" required>
                        </div>
                        <div class="form-group">
                            <label for="numero_permis">Numéro de permis :</label>
                            <input type="text" class="form-control" name="numero_permis" required>
                        </div>
                        <div class="form-group">
                            <label for="date_d_emitiont">Date d'émission :</label>
                            <input type="date" class="form-control" name="date_d_emitiont" required>
                        </div>
                        <div class="form-group">
                            <label for="Expiration_categorie">Expiration de la catégorie :</label>
                            <input type="date" class="form-control" name="Expiration_categorie" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </form>
                </div>
            </div>
</div>



@endsection


