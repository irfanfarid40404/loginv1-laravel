<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>
    
    {{-- dashboard start --}}
    <div class="container" style="margin-top: 50px">
        <div class="row">
    
            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">MAIN MENU</li>
                    <a href="{{ route('dashboard') }}" class="list-group-item" style="color: #212529;">Dashboard</a>
                    <li class="list-group-item">Profile</li>
                    <a href="{{ route('dashboard.logout') }}" class="list-group-item" style="color: #212529;">Logout</a>
                </ul>
            </div>
    
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <label>DASBOARD</label>
                        <hr>
    
                        Selamat Datang {{ Auth::user()->name }}
    
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    {{-- dashboard end --}}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

</body>
</html>