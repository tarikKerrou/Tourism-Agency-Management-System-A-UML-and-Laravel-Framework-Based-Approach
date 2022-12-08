@extends('backend')
@section('content')


<div class="d-flex justify-content-center">
<h1 class="p-2" style=" color: #301b3f">Panier</h1>
</div>
<div class="d-flex justify-content-center">

</br>
<div class="table-responsive text-nowrap container-fluid col-8">
    <table class="table text-center table-striped ">
        <thead >
        <tr  style=" background: #301b3f; color: #e7d9ea">
            <th>ID</th>
            <th>Nombre Des Personnes</th>
            <th style="width: 40%">Action</th>

        </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($choices as $choice)
                <tr>
                <td>{{ $choice->id }}</td>
                    <td>{{ $choice->choice_numberOfPersons }}</td>
                    <td>
                        <button type="submit" class="btn btn " style="background: #800080"><a href="http://127.0.0.1:8000/pay/{{ $choice->id }}" class="btn btn-sm">Payer</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </br>

    <div class="d-flex justify-content-center">

    <button type="submit" class="btn bt-btn offset mt-6 " id="btoo">
        <a href="http://127.0.0.1:8000" class="btn btn-sm" >Retour</a>
    </button>

</div>
@endsection
