@extends('partials.layout')
@section('content')
<div class="container">
    <h2 class="text-center mb-4">Liste de toutes les locations</h2>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <div class="text-right">
                        <a href="{{ route('locations.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Faire une location</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Véhicule</th>
                                    <th>Lieu de départ</th>
                                    <th>Lieu d'arrivée</th>
                                    <th>Date</th>
                                    <th>Heure de début</th>
                                    <th>Heure de fin</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($locations as $location)
                                <tr>
                                    <td>{{ $location->client }}</td>
                                    <td>{{ $location->vehicule->matricule }}</td>
                                    <td>{{ $location->lieu_depart }}</td>
                                    <td>{{ $location->lieu_arrive }}</td>
                                    <td>{{ $location->date }}</td>
                                    <td>{{ $location->heure_debut }}</td>
                                    <td>{{ $location->heure_fin }}</td>
                                    <td>{{ $location->montant }}</td>
                                    <td>{{ $location->statut }}</td>
                                    <td>
                                        <a href="{{ route('locations.edit', $location->id) }}" class="btn btn-primary btn-sm">Modifier</a>
                                        <form action="{{ route('locations.destroy', $location->id) }}" method="POST" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette location?')">Supprimer</button>
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
</div>


@endsection
