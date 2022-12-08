@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
    <h1 class="p-2" style=" color: #301b3f">Modifier Le Jour Du {{ $jour->jour_destinationPlace }}</h1>
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
            <form class="form" method="POST" action="{{ route('jour.update' , $jour->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <div class="form-group row form-inline  ">
                    <label>Destination</label>
                    <input type="text" name="jour_destinationPlace" placeholder="Destination Du Jour..." class="form-control offset-2 col-lg" value="{{ $jour->jour_destinationPlace }}" required>
                </div>

                <div class="form-group row form-inline">
                    <label>Description</label>
                    <textarea class="form-control offset-2 col-lg" placeholder="Description Du Jour..." name="jour_description" rows="5" value="{{ $jour->jour_description }}"> </textarea>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Plan</label>
                    <select name="plan_id" class="form-control select2-multiple" value="{{ $jour->plan_id }}">
                        <option value="">Choisir Un Plan</option>
                        @foreach($plan as $plan)
                        <option value="{{$plan->id}}">
                            {{$plan->plan_name}}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-4">Choisir une image...</label>
                    <input type="file" class="form-control col-lg" value="asset('uploads/jours/' .{{ $jour->jour_image }})" name="jour_image">
                    </br>
                </div>

                <div class="d-flex justify-content-center mb-2 offset-2">
                    <button type="submit" class="btn btn  " id="bto" style=" margin-top:10px; margin-right: 110px">
                    Enregistrer
                    </button>
            </form>

        </div>
    </div>

</div>

@endsection