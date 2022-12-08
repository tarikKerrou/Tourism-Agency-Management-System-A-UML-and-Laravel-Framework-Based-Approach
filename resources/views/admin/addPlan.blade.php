<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
    <style type="text/css">
        .title {
            color: white;
            padding-top: 25px;
            font-size: 25px;
        }

        label {

            display: inline-block;
            width: 200px;
        }
    </style>
</head>

<body>
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.navbar')
    <div class="container-fluid page-body-wrapper" style="padding:15px ;">
        <div class="container align-center">
            <h1 class="title"> ajouter un Guide </h1>
            </br>
            <form class="form" method="POST" action="{{ route('plan.save') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group row form-inline  ">
                    <label>Nom </label>
                    <input type="text" name="plan_name" placeholder="Nom Du Plan..." class="form-control offset-2 col-lg" required>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-success" id="btio" class="btn btn-sm">Enregistrer</button>
                </div>
            </form>
            </br>

</div>
</div>
<!-- partial -->

@include('admin.script')
</body>

</html>