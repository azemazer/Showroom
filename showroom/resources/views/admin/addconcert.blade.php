@extends("template") @section("title", "Concerts") @section("content")
  <div class="container-fluid">
    <form method="POST" action="{{ route('concert.store')}}">
        @csrf
      <div class="form-group">
        <label for="exampleInputName">Nom du Concert</label>
        <div class="w-25">
          <input type="name" class="form-control" id="exampleInputName" placeholder="" name="titre">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputArtist">Artiste</label>
        <div class="w-25">
          <input type="artist" class="form-control" id="exampleInputArtist" placeholder="" name="artiste">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputdescribe">Description</label>
        <div class="w-25">
          <input type="describe" class="form-control" id="exampleInputdescribe" placeholder="" name="description">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputArtist">Genre</label>
        <div class="w-25">
          <input type="artist" class="form-control" id="exampleInputgenre" placeholder="" name="genre">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputLieu">Lieu</label>
        <div class="w-25">
          <input type="lieu" class="form-control" id="exampleInputlieu" placeholder="" name="lieu">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputDate">Date</label>
        <div class="w-25">
          <input type="date" class="form-control" id="exampleInputdate" placeholder="" name="date">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputOrganize">Organisateur</label>
      <div class="w-25">
        <input type="organize" class="form-control" id="exampleInputorganize" placeholder="" name="organisateur">
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputPicture">Image</label>
        <div class="w-25">
          <input type="picture" class="form-control" id="exampleInputpicture" placeholder="" name="imgartiste">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputresa">Réservations max.</label>
        <div class="w-25">
          <input type="resa" class="form-control" id="exampleInputresa" placeholder="" name="reservationsmax">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputresaactuelle">Réservations actuelles</label>
        <div class="w-25">
          <input type="resa" class="form-control" id="exampleInputresa" placeholder="" name="reservations">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputresa">imglieu</label>
        <div class="w-25">
          <input type="resa" class="form-control" id="exampleInputimglieu" placeholder="" name="imglieu">
        </div>
      </div>
      <br>
      <div class="form-group">
        <label for="exampleInputresa">Full?</label>
        <div class="w-25">
          <input type="full" class="form-control" id="exampleInputfull" placeholder="0" name="full">
        </div>
      </div>
      <br>
      <button type="submit" class="btn btn-primary">Soumettre</button>
    </form>
  </div>
  @endsection