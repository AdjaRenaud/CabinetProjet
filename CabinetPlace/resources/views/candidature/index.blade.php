@extends('layouts.app')

@section('title', 'Liste des Candidatures')

@section('contenu')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Liste des Candidatures</h1>
        <a href="{{ url('/candidature') }}" class="btn btn-primary">Ajouter une Candidature</a>
    </div>
    <hr />
    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>#</th>
                <th>Nom et Prénoms</th>
                <th>Email</th>
                <th>Numéro de Téléphone</th>
                <th>Filière</th>
                <th>CV</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($etudiants as $etudiant)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $etudiant->NometPrenoms }}</td>
                    <td>{{ $etudiant->Email }}</td>
                    <td>{{ $etudiant->NumeroDeTelephone }}</td>
                    <td>{{ $etudiant->filiere }}</td>
                    <td>
                        <embed src="{{ asset('storage/files/'. $etudiant->fichier) }}" type="application/pdf" width="100" height="100" />
                        <!-- Affichage du PDF -->
                        <a href="{{ asset('storage/files/'. $etudiant->fichier) }}" download>Télécharger le CV</a>
                        <!-- Lien de téléchargement -->
                    </td>
                    <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href=" " type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ url('editetudiant', $etudiant->id)}}" type="button" class="btn btn-primary">Edit</a>
                                <form action="{{ url('deleteetudiant', $etudiant->id)}}"  method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="7">Aucune candidature trouvée.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
