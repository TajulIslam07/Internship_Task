<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<body>
<div class="container">
    <div class="row bg-primary rounded-3 p-5">
        <div class="col text-center h1">START TIME 2.30 PM to 3.30 PM</div>
    </div>


    <div class="row mt-1">

        <div class="col-2 bg-primary p-5 rounded-3 text-center display-5 ">
            hiiiiiii
        </div>

        <div class="col-10">
            <div class="overflow-auto" style="height: 60rem">
           @foreach($posts as $data)
                <div class="d-inline-flex flex-row m-1">

                    <div class="card col-3" style="width: 18rem">
                        <img src="{{$data->image}}" style="width: 100%;height: 18rem" class="card-img-top " alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$data->title}}</h5>
                            <h5 class="card-title">{{$data->name}}</h5>
                            <h5 class="card-title">{{$data->email}}</h5>

                        </div>
                    </div>
                </div>
           @endforeach
               </div>




            <div class="row bg-primary p-4 rounded-3 m-1">
                <div class="col-10 text-center h1" >
                    START TIME 2.30 PM to 3.30 PM
                </div>
            </div>
        </div>

    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>

