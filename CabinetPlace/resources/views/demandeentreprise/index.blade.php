@extends('layouts.app')

@section('title', 'Liste des Candidatures')

@section('contenu')
    <div class="container">
        <h1>Demandes Entreprise</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Date de Création</th>
                </tr>
            </thead>
            <tbody>
                @foreach($demandeentreprise as $demande)
                <tr>
                    <td>{{ $demande->id }}</td>
                    <td>{{ $demande->email }}</td>
                    <td>{{ $demande->fichier }}</td>
                    <td>{{ $demande->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

@endsection