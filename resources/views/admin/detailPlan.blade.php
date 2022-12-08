@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
    <h1 class="p-2" style=" color: #301b3f">Jours Du Plan {{ $plan->plan_name }}</h1>
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

<div class="container">
    <section id="one" class="wrapper style2">
        <div class="inner">
            <div class="grid-style">
                @foreach($jours as $jour)
                <div>
                    <div class="box">
                        <br>
                        <div style=" margin-top:30px; text-align: center;" class="image fit">
                            <img width="350px" height="350px" alt="not found" style="border: 1px solid #e7d9ea; border-radius:50px" src="{{ asset('/uploads/jours/' . $jour->jour_image) }}" alt="" />
                        </div>
                        <div class="content" style=" margin-top:10px; text-align: center;">
                            <header class="align-center" style="font-size:1em; color: #301b3f; font-variant: small-caps; font-style: oblique; font-weight: 500; font-family:cursive; ">
                                <h3 style="font-size:1.5em; color: #301b3f;">{{ $jour->jour_destinationPlace }}</h3>
                            </header>
                            <footer class="align-center">
                                <button type="submit" class="btn btn " style="background: #1e6f5c; margin-top:20px; border-radius:10px;"><a href="http://127.0.0.1:8000/jour/edit/{{ $jour->id  }}" class="btn btn-sm"><i class="fas fa-edit"></i></a> </button>
                                <button type="submit" class="btn btn " style="background: #046582; margin-top:20px; border-radius:10px;"><a href="http://127.0.0.1:8000/jour/delete/{{ $jour->id }}" class="btn btn-sm"><i class="far fa-trash-alt"></i></a></button>
                                <button type="submit" class="btn btn " style="background-color: #800080; margin-top:20px; border-radius:10px;"><a href="http://127.0.0.1:8000/jour/{{ $jour->id }}/detail" class="btn btn-sm">Voir Plus</a></button>

                            </footer>
                        </div>
                    </div>
                    </br>
                </div>
                @endforeach
            </div>
            </br>
            </br>
            <div class="d-flex justify-content-center mb-2 offset-1">
                <button type="submit" class="btn btn  " id="bto" style="margin-right: 150px; margin-top:20px; border-radius:10px;">
                    <a href="http://127.0.0.1:8000/addjour/{{ $plan->id }}">Ajouter Un Autre Jour</a>
                </button>
                <button class="btn btn  " id="bto" style="margin-right: 100px; margin-top:20px; border-radius:10px;">
                    <a href="http://127.0.0.1:8000/addtour/{{ $plan->id }}">Terminer</a>
                </button>
            </div>
        </div>
    </section>
    </br>
    </br>
    </br>
    </br>
</div>

@endsection