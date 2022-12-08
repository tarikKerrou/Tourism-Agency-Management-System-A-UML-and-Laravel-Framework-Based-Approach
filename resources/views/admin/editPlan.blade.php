@extends('backend')
@section('content')
<div class="d-flex justify-content-center">
<h1 class="p-2">Modifier le Plan {{ $plan->plan_name }}</h1>
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
    <div class="jumbotron d-flex justify-content-center bg-dark text-black">
        <form class="form" method="POST" action="{{ route('plan.update' , $plan->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')


        <div class="form-group row form-inline  ">
        <label>Nom</label>
        <input type="text" name="plan_name"  placeholder="Nom Du Plan..."  class="form-control offset-2 col-lg" value="{{ $plan->plan_name }}" required>
        </div>

        <button type="submit" class="btn btn-primar mb-2 offset-6">Enregistrer</button>
        </form>

    </div>
 </div>

</div>

@endsection
