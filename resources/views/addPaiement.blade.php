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
<div class="d-flex justify-content-center">
    <div class="container col-6  ">
        <div class="jumbotron d-flex justify-content-center text-black" style="background: #301b3f; color: #e7d9ea">
            <form class="form" method="POST" action="{{ route('paiement.save') }}" enctype="multipart/form-data">
                @csrf


                <div class="form-group row form-inline  ">
                    <label>Numéro De La Carte</label>
                    <input type="text" name="client_cardNumber" placeholder="Numéro de la carte..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline  ">
                    <label>Date D'expiration</label>
                    <input type="date" name="client_cardEspiryDate" placeholder="Date D'expiration..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline  ">
                    <label>Code De Vérification</label>
                    <input type="text" name="client_cardVerifyCode" placeholder="Code De Vérification..." class="form-control offset-2 col-lg" required>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Montant</label>
                    <select name="montant" class="form-control select2-multiple">
                        <option value="{{$montant}}">
                            {{$montant}}
                        </option>
                    </select>
                </div>

                <div class="form-group row form-inline">
                    <label class="mr-3">Reservation</label>
                    <select name="choice_id" class="form-control select2-multiple">
                        <option value="{{$choice->id}}">
                            {{$choice->id}}
                        </option>
                    </select>
                </div>

                <div class="d-flex justify-content-center mb-2 offset-2">

                    <button type="submit" class="btn btn  " id="bto">
                        Payer
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection