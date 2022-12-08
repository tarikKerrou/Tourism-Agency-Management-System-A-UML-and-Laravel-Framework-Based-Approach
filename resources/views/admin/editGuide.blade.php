@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Modifier Le Guide {{ $guide->guide_name }} </h1>
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
        <form class="form" method="POST" action="{{ route('guide.update' , $guide->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row form-inline  ">
        <label>Nom</label>
        <input type="text" name="guide_name"  placeholder="Nom Du Guide..."  class="form-control offset-2 col-lg" value="{{ $guide->guide_name }}" required>
        </div>

        <div class="form-group row form-inline">
        <label>Description</label>
        <textarea class="form-control offset-2 col-lg"  placeholder="Description du Guide..."   name="guide_description" rows="5" value ="{{ $guide->guide_description }}" > </textarea>
        </div>

        <div class="form-group row form-inline">
            <label class="mr-4">Choisir une image...</label>
            <input type="file" class="form-control col-lg" value="asset('uploads/guides/' .{{ $guide->guide_image }})" name="guide_image">
            </br>
        </div>

        <div class="d-flex justify-content-center mb-2 offset-2">
                    <button type="submit" class="btn btn  " id="bto" style="margin-right: 150px">Enregistrer
                    </button>
                    <button class="btn btn  " id="bto">
                        <a href="http://127.0.0.1:8000/guides">Retour</a>
                    </button>
                </div>
        </form>

    </div>
 </div>

</div>

@endsection
