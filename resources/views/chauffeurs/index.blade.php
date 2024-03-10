@extends('partials.layout')
@section('content')

<div class="container">
    <h2 class="text-center mb-4 text-primary">Liste des chauffeurs</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <a href="{{ route('chauffeurs.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ajouter un chauffeur</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Expérience</th>
                                <th>Numéro de permis</th>
                                <th>Date d'émission</th>
                                <th>Expiration de la catégorie</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chauffeurs as $chauffeur)
                            <tr>
                                <td>{{ $chauffeur->nom }}</td>
                                <td>{{ $chauffeur->experience }}</td>
                                <td>{{ $chauffeur->num_permis }}</td>
                                <td>{{ $chauffeur->date_emission }}</td>
                                <td>{{ $chauffeur->expiration_categorie }}</td>
                                <td class="text-center">
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('chauffeurs.edit', $chauffeur->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Modifier</a>
                                        <form action="{{ route('chauffeurs.destroy', $chauffeur->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce chauffeur ?')"><i class="fas fa-trash"></i> Supprimer</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection




