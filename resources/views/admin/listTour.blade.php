
<!DOCTYPE html>
<html lang="en">
  <head>
 @include('admin.css')
 <style type="text/css">
  .title{
color: white;
padding-top:25px  ; 
font-size:25px  ;
  }
  label{

     display : inline-block ;
     width:200px ;
  }
</style>
  </head>
  <body>
        @include('admin.sidebar')  <!-- partial -->
        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper" style="padding:15px ;">
          <div  class="container align-center">
            <h1 class="title" >   Tours  </h1>
</br>
<div class="table-responsive text-nowrap container-fluid col-8">
    <table class="table text-center table-striped ">
        <thead >
        <tr  style=" background: #301b3f; color: #e7d9ea">
            <th>ID</th>
            <th>Image</th>
            <th>Nom</th>
            <th>Destination</th>
            <th>Etat</th>
            <th>Prix</th>
            <th style="width: 40%">Action</th>

        </tr>
        </thead>
        <tbody class="bg-white">
            @foreach($tours as $tour)
                <tr>
                <td>{{ $tour->id }}</td>
                    <td><img src="{{ asset('/uploads/tours/' . $tour->tour_image) }}" width="100px;" height="100px" alt="Image"> </td>
                    <td>{{ $tour->tour_name }}</td>
                    <td>{{ $tour->tour_destination }}</td>
                    <td>{{ $tour->tour_state }}</td>
                    <td>{{ $tour->tour_price }}</td>
                    <td>
                        <button type="submit" class="btn btn " style="background: #1e6f5c"><a href="http://127.0.0.1:8000/tour/edit/{{ $tour->id  }}" class="btn btn-sm"><i class="fas fa-edit"></i></a> </button>
                        <button type="submit" class="btn btn " style="background: #046582"><a href="http://127.0.0.1:8000/tour/delete/{{ $tour->id }}" class="btn btn-sm"><i class="far fa-trash-alt"></i></a></button>
                        <button type="submit" class="btn btn " style="background: #800080"><a href="http://127.0.0.1:8000/tour/{{ $tour->id }}/detail" class="btn btn-sm">Details</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </br>

    <div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-success" id="btio">
        <a href="http://127.0.0.1:8000/addplan "class="btn btn-sm">Ajouter</a>
    </button>  
    <button type="submit" class="btn btn-primary " style="margin-left:20px" id="btoo">
        <a href="http://127.0.0.1:8000/redirect"  >Retour</a>
    </button>



    </div>
           </div>
          <!-- partial -->

       @include('admin.script')
  </body>
</html>
