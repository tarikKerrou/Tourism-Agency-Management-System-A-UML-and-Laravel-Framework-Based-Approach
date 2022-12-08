@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
    <h1 class="p-2" style=" color: #301b3f">Ajouter Une Tour</h1>
</div>

@if($errors->any())
<div class="alert alert-danger col-8 offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="d-flex justify-content-center">
    <div class="container col-6  ">
        <div class="jumbotron d-flex justify-content-center text-black" style="background: #301b3f; color: #e7d9ea">
            <form class="form" method="POST" action="{{ route('tour.save') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row form-inline  ">
                    <label>Nom </label>
                    <input type="text" name="tour_name" placeholder="Nom De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Ville Du Départ</label>
                    <input type="text" name="tour_villeDepart" placeholder="Ville Du Départ De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Ville De Déstination</label>
                    <input type="text" name="tour_destination" placeholder="Ville De Déstination De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Date Du Départ</label>
                    <input type="date" name="tour_dateDepart" placeholder="Date Du Départ De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Date D'Arrivée</label>
                    <input type="date" name="tour_dateArrivee" placeholder="Date D'Arrivée De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Taille Maximale Du Groupe</label>
                    <input type="number" name="tour_groupSize" placeholder="Taille Maximale Du Groupe De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Nom D'Hotel</label>
                    <input type="text" name="hotel_name" placeholder="Nom D'Hotel De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Adresse D'Hotel</label>
                    <input type="text" name="hotel_address" placeholder="Adresse D'Hotel De La Tour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Type Du Transport</label>
                    <select id="type" name="transport_type" class="form-control offset-2 col-lg" required>
                        <option value="Avion">Avion</option>
                        <option value="Bateau">Bateau</option>
                        <option value="TGV">TGV</option>
                        <option value="Train">Train</option>
                    </select>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Etat</label>
                    <input type="radio" id="open" name="tour_state" value="Ouverte" class="form-control offset-3 col-lg" required>
                    <label for="open">Ouverte</label>
                    <input type="radio" id="close" name="tour_state" value="Fermée" class="form-control offset-3 col-lg" required>
                    <label for="close">Fermée</label>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Prix</label>
                    <input type="number" name="tour_price" placeholder="Prix De La Tour..." class="form-control offset-2 col-lg" required>
                </div>


                <div class="form-group row form-inline">
                    <label class="mr-3">Guide</label>
                    <select name="guide_id" class="form-control select2-multiple">
                        <option value="">Choisir Un Guide</option>
                        @foreach($guides as $guide)
                        <option value="{{$guide->id}}">
                            {{$guide->guide_name}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Plan</label>
                    <select name="plan_id" class="form-control select2-multiple">
                        <option value="">Choisir Un Plan</option>
                        <option value="{{$plan->id}}">
                            {{$plan->plan_name}}
                        </option>
                    </select>
                </div>


                <div class="form-group row form-inline">
                    <label class="mr-3">Choisir Une Image</label>
                    <input type="file" class="form-control offset col-lg" style="margin-left: 2%" name="tour_image">
                </div>
                </br>

                <div class="d-flex justify-content-center mb-2 offset-2">
                    <button type="submit" class="btn btn  " id="bto" style="margin-right: 150px">Enregistrer
                    </button>
                    <button class="btn btn  " id="bto">
                        <a href="http://127.0.0.1:8000/tours">Retour</a>
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection