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
                <br><br>
                <a class="btn btn-primary" href="{{ route('ricknmorty') }}" title="Go back"> Rick and Morty<i class="bi bi-house-fill"></i> </a>
                <a class="btn btn-primary" href="{{ route('characters') }}" title="Go back"> View Characters <i class="fas fa-backward fa-2x"></i> </a>
            </div>
            
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h2>Search for a Character</h2>
                <br><br>
                <form action="" method="post">
                    @csrf
                    @method('post')
                    <div class="col-md-12 form-group text-center">
                        <input type="text" placeholder="Search for a character">
                    </div>
                    <div class="col-md-12 mt-3">
                        <button class="btn btn-primary">Submit</button>
                    </div>
                    
                    

                </form>
            </div>
            
        </div>
    </div>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>