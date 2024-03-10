@extends('partials.layout')
@section('content')


<div class="container">
    <form action="{{route('chauffeurs.update',$chauffeurs->id)}}"  method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
   <div class="form-row">
     <div class="col-md-4 mb-3">
       <label for="validationServer013">Nom</label>
       <input type="text" class="form-control "
         name="nom" value="{{$chauffeurs->nom}}" required>
     </div>
     <div class="col-md-4 mb-3">
        <label for="validationServer013">Prenom</label>
        <input type="text" class="form-control "
          name="prenom" value="{{$chauffeurs->prenom}}" required>
      </div>
      <div class="col-md-4 mb-3">
        <label for="validationServer013">Experience</label>
        <input type="text" class="form-control "
          name="experience" value="{{$chauffeurs->experience}}" required>
      </div>
   </div>
   <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationServer013">numero permis</label>
      <input type="text" class="form-control "
        name="numero_permis" value="{{$chauffeurs->num_permis}}" required>
    </div>
    <div class="col-md-4 mb-3">
       <label for="validationServer013">date d'emitiont</label>
       <input type="date" class="form-control "
         name="date_d_emition" value="{{$chauffeurs->date_emission}}" required>
     </div>
     <div class="col-md-4 mb-3">
       <label for="validationServer013">Expiration_categorie</label>
       <input type="date" class="form-control "
         name="Expiration_categorie" value="{{$chauffeurs->expiration_categorie}}" required>
     </div>
  </div>
</div>
</div>

   <button class="btn btn-primary" name="submit" type="submit">Submit form</button>
 </form>
</div>






@endsection
