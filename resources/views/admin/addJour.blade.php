@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
    <h1 class="p-2" style=" color: #301b3f">Ajouter Un Jour</h1>
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
            <form class="form" method="POST" action="{{ route('jour.save') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row form-inline  ">
                    <label>Destination </label>
                    <input type="text" name="jour_destinationPlace" placeholder="Destination Du Jour..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Description</label>
                    <textarea type="text" name="jour_description" placeholder="Description Du Jour..." class="form-control offset-2 col-lg" style="margin-left: 15%" rows="5" required></textarea>
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
                    <input type="file" class="form-control offset col-lg" style="margin-left: 2%" name="jour_image">
                </div>
                </br>

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