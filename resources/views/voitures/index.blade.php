@extends('partials.layout')
@section('content')




<div class="container">

    <h2 class="text-center mb-4 text-primary">Affichage des véhicules</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <a href="{{ route('vehicules.create') }}" class="btn btn-primary btn-sm"><b>+</b> Ajouter un véhicule</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Date d'achat</th>
                                <th>Kilométrage par défaut</th>
                                <th>Matricule</th>
                                <th>Chauffeur</th>
                                <th>Statut</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vehicules as $vehicule)
                            <tr>
                                <td>{{ $vehicule->date_achat }}</td>
                                <td>{{ $vehicule->km_default }}</td>
                                <td>{{ $vehicule->matricule }}</td>
                                <td>{{ $vehicule->chauffeur_id }}</td>
                                <td>{{ $vehicule->statut }}</td>
                                <td class="text-center">
                                    <a class="btn btn-info btn-xs" href="{{ route('vehicules.edit', $vehicule->id) }}">
                                        <span class="glyphicon glyphicon-edit"></span> Modifier
                                    </a>
                                    <form action="{{ route('vehicules.destroy', $vehicule->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Voulez-vous vraiment supprimer le véhicule?')">
                                            <span class="glyphicon glyphicon-remove"></span> Supprimer
                                        </button>
                                    </form>
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
