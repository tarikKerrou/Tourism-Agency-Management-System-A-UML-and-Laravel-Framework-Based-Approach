@extends('backend')
@section('content')


@if($errors->any())
<div class="alert alert-danger col-8 offset-2">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</br>
</br>
</br>
<div class="d-flex justify-content-center">


    <div class="col-md-5">
        <img class="img-fit" src="{{ asset('/uploads/tours/' . $tour->tour_image) }}" alt="" width="450px" height="450px" style="border: 1px solid ; border-radius:25%; ">
    </div>

    <div class="col-md-4">
        <h1 style="color: #301b3f; font-variant: small-caps; font-style: oblique; font-weight: 500;">{{ $tour->tour_name }}</h1>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Etat                                : {{ $tour->tour_state }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Point Du Départ                     : {{ $tour->tour_villeDepart }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Destination                         : {{ $tour->tour_destination }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Date Du Départ                      : {{ $tour->tour_dateDepart }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Date Du Retour                      : {{ $tour->tour_dateArrivee }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Nombre Actuel des Participants      : {{ $tour->tour_numberOfParticipants }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Nom Du Guide                        : {{ $guide->guide_name}}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Nom Du Plan                         : {{ $plan->plan_name}}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Nombre Maximal des Participants     : {{ $tour->tour_groupSize }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Nom De L'Hotel                      : {{ $tour->hotel_name }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Adresse De L'Hotel                  : {{ $tour->hotel_address }}</h5>
        <h5 class="my-3" style="color: #301b3f; font-weight: 350; ">Type Du Transport                   : {{ $tour->transport_type }}</h5>
        <h4 class="my-3" style="color: #301b3f; font-weight: 350; ">Prix                                : {{ $tour->tour_price }} Dh</h5>
    </div>

</div>
</br>
</br>
<div class="d-flex justify-content-center">
    <button type="submit" class="btn bt-btn offset mt-6 " id="btoo">
        <a href="http://127.0.0.1:8000/tour/detail/{{ $tour->id }}" class="btn btn-sm">Réserver</a>
    </button>
</div>

@endsection