 @extends('layouts.app')
  
@section('title', 'Edit etudiants')
  
@section('contents')
    <h1 class="mb-0">Edit etudiants</h1>
    <hr />
    <form action="{{ url('updatecandidature',$etudiants->id) }}" method="POST" enctype="multipart/form-data" id="add-form">
    @csrf
        @method('PUT')
        
@if(session('status'))
 <div class="alert alert-succes">
    {{session('status')}}
 </div>
@endif



<ul>
@foreach($errors->all() as $error)

<li class="alert alert-danger">
{{$error}}
</li>
@endforeach

   
</ul>
        <div class="form-group">
                        <label for="NometPrenoms">Nom et Prénoms</label>
                        <input value="{{$etudiants->NometPrenoms}}" name="NometPrenoms" required placeholder="Entrez votre nom et prénoms" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="Email">Email</label>
                        <input value="{{$etudiants->Email}}" name="Email" required placeholder="Entrez votre email" type="email" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="NumeroDeTelephone">Numéro de téléphone</label>
                        <input value="{{$etudiants->NumeroDeTelephone}}" type="tel" name="NumeroDeTelephone" required placeholder="Entrez votre numéro de téléphone" class="form-control">
                    </div>  

                    <div class="form-group">
                        <label for="filiere">Filière</label>
                        <select class="form-control" id="filiere" name="filiere" required>
                <option value="">Choisir une filière</option>
                <option value="Informatique" {{ $etudiants->filiere == 'Informatique' ? 'selected' : '' }}>Informatique</option>
                <option value="Gestion" {{ $etudiants->filiere == 'Gestion' ? 'selected' : '' }}>Gestion</option>
                <option value="Marketing" {{ $etudiants->filiere == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                <!-- Ajoutez d'autres options de filière ici -->
            </select>
                    </div>

                    <div class="form-group">
                        <label for="fichier">Votre CV (PDF, DOC, DOCX)</label>
                    
                        <input type="file"  value="{{$etudiants->fichier}}"  name="fichier"  id="fichier" accept=".pdf,.doc,.docx" class="form-control-file" required>
                        @if($etudiants->fichier)
            <div class="form-group">
                <label for="fichier-existant">Fichier existant :</label>
                <embed width="70px" height="70px" src="{{ asset('storage/files/' . $etudiants->fichier) }}" type="application/pdf" width="100%" height="500px" />
                <p>  <a href="{{ asset('storage/files/' . $etudiants->fichier) }}" target="_blank">Télécharger</a></p>
                </div>
        @endif
                    
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Enregistrer</button>
                    </div>
                    @if(Session::has('status'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('status') }}
        </div>
    @endif
    </form>
@endsection