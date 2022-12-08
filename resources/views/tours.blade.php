@extends('home')
@section('content')


@if($errors->any())
<div class="alert alert-danger col-8 offset-2" >
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
<div>
<section class="d-flex justify-content-center">
    <!-- One -->
    <div class="container col-6 ">
        @foreach($tours as $tour)
        <div>
            <div class="jumbotron d-flex justify-content-center ">
                <div class="box bg-dark" style="margin-bottom:50px; margin-top:200px;" style="border: solid 2px #301b3f; border-radius: 50px;">
                    <br>
                    <div class="image fit">
                        <img width="200px" height="200px"  style="  border: 1px solid #0C0C0C; border-radius:25%" src="{{ asset('/uploads/tours/' . $tour->tour_image) }}" alt="not found" />
                    </div>
                    <div class="content " style="margin-left:60px;">
                        <header class="align-center">
                            <p style="color: #989898; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">{{ $tour->tour_name }}</p>
                        </header>
                        <h5 class="align-center" style="color: #989898; font-variant: small-caps; font-style: oblique; font-weight: 300; font-family:serif;">{{ $tour->tour_price }} Dhs</h5>
                        <footer class="align-center">
                            <a href="http://127.0.0.1:8000/tour/detail/{{ $tour->id }}" class="price-btn" >Réserver</a>
                        </footer>
                    </div>
                </div>
                </br>
            </div>
        </div>
        @endforeach

    </div>
</section>
</div>
@endsection