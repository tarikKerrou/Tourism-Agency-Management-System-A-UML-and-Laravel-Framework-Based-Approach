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
        <img class="img-fit" src="{{ asset('/uploads/guides/' . $guide->guide_image) }}" alt="" width="450px" height="450px" style="border: 1px solid ; border-radius:25%; ">
    </div>

    <div class="col-md-4">
        <h1 style="color: #301b3f; font-variant: small-caps; font-style: oblique; font-weight: 500;">{{ $guide->guide_name }}</h1>


        <h5 class="my-3" style="color: #301b3f; font-weight: 350; "> {{ $guide->guide_description }}</h6>
    </div>

</div>
</br>
</br>
<div class="d-flex justify-content-center">
    <button type="submit" class="btn bt-btn offset mt-6 " id="btoo">
        <a href="http://127.0.0.1:8000/guides" class="btn btn-sm">Retour</a>
    </button>
</div>

@endsection