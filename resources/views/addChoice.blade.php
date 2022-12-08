@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
    <h1 class="p-2" style=" color: #301b3f">Choisir le Nombre de Places </h1>
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
            <form class="form" method="POST" action="{{ route('choice.save') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row form-inline  ">
                    <label>Nombre des Personnes</label>
                    <input type="number" name="choice_numberOfPersons" placeholder="Destination Du choice..." class="form-control offset-2 col-lg" required>
                </div>


                <div class="form-group row form-inline">
                    <label class="mr-3">tour</label>
                    <select name="tour_id" class="form-control select2-multiple">
                        <option value="">Choisir Un tour</option>
                        <option value="{{$tour->id}}">
                            {{$tour->tour_name}}
                        </option>
                    </select>
                </div>


                <div class="d-flex justify-content-center mb-2 offset-2">

                    <button type="submit" class="btn btn  " id="bto">
                        Enregistrer
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection