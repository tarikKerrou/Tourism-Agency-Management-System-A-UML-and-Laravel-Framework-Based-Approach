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
            <h1 class="title"> Ajouter un Guide </h1>
            </br>
            <div class="table-responsive text-nowrap container-fluid col-8">
                <form class="form" method="POST" action="{{ route('guide.save') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row form-inline  ">
                        <label>Nom </label>
                        <input type="text" name="guide_name" placeholder="Nom Du Guide..." class="form-control offset-2 col-lg" required>
                    </div>

                    <div class="form-group row form-inline">
                        <label class="mr-3">Description</label>
                        <textarea type="text" name="guide_description" placeholder="Description Du Guide..." class="form-control offset-2 col-lg" style="margin-left: 15%" rows="5" required></textarea>
                    </div>


                    <div class="form-group row form-inline">
                        <label class="mr-3">Choisir Une Image</label>
                        <input type="file" class="form-control offset col-lg" style="margin-left: 2%" name="guide_image">
                    </div>
                    </br>
                    <div class="d-flex justify-content-center">

                        <button type="submit" class="btn btn-success" id="btio" class="btn btn-sm">Enregistrer</button>
                        <button type="submit" class="btn btn-primary " style="margin-left:20px" id="btoo">
                            <a href="http://127.0.0.1:8000/guides">Retour</a>
                        </button>



                    </div>

                </form>
                </br>

            </div>
        </div>
        <!-- partial -->

        @include('admin.script')
</body>

</html>