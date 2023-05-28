<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <title>Rick and Morty Project</title>
</head>
<body>

    
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Rick and Morty Encyclopedia</h2>
                <a class="btn btn-primary" href="{{ route('ricknmorty') }}" title="Go back"> Rick and Morty<i class="bi bi-house-fill"></i> </a>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5" style="margin-bottom: 150px !important">
        <div class="row mr-4">
            @foreach ($characters->results as $character)
    
            <div class="col-xl-3 col-md-6 mb-4 hvr-grow ">
                
                    <div class="card shadow  py-0 rounded-lg ">
                        <div class="card-body py-2 px-2">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class=" font-weight-bold mb-4 mt-2 text-primary text-center text-uppercase mb-1">
                                       Name:  <a href="{{ route('character'), $character->url }}" >{{ $character->name }}</a>
                                    </div>
                                    <div class="h6 mb-0 text-gray-800 ">
                                       Status: {{ $character->status }}
                                                                       
                                    </div>
                                    <div class="h6 mb-0 text-gray-800 ">
                                      Specie:  {{ $character->species }} <br>
                                      
                                    
                                    </div>
                                    <div class="h6 mb-0 text-gray-800 ">
                                        Origin:  {{ $character->origin->name }}
                                    
                                    </div>
                                    <div class="h6 mb-0 text-gray-800 ">
                                        location:  {{ $character->location->name }}
                                      </div>
                                      
                                    <div class="h6 mb-0 text-gray-800 mt-2">
                                         <img src="{{ $character->image }}" alt=""> 
                                        
                                      </div>
                                      
                                </div>
                            </div>
    
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
            <a class="btn btn-secondary m-3" href="{{route('prev')}}">Previous</a>
            <a class="btn btn-secondary" href="{{route('next')}}">Next  </a>
        </div>
    </div>
</div>

       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>