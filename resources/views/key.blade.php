<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>Key Generator</title>
</head>
<body>
    <div class="container mt-4">
       <div class="box justify-center">
      <div class="row">
        <div class="col-md-10 offset-md-1">
            @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{Session::get('success')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>  
                   @endif
                <h2 class="text-center mt-2">Create License</h2>

                <form action="{{route('create.key')}}" method="POST">
                @csrf

                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Client ID : </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter Client ID" name="clientId" required>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">License Key : </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Create key by clicking the Generate key button" name="licenseKey" id="key" readonly>
                        <a type="button" onclick="generateKey()" class="btn btn-warning">Generate Key</a>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">License For :</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="licenseDuration" required>
                            <option selected>Select Duration....</option>
                            <option value="3">3</option>
                            <option value="6">6</option>
                            <option value="12">12</option>
                        </select><span>Months</span>
                    </div>
               
                    {{-- <a href="" type="submit" class="form-control btn btn-primary">Save Data</a> --}}
                <button type="submit" class="form-control btn btn-primary">Save Data</button>
                
             </form>
             <div class="mt-2 text-right">
                <a href="/" class="text-danger">--> Go to Home page</a>
             </div>
            </div>
       </div>
      </div>
    </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

{{-- javascript part --}}
<script>
    function generateKey(){
    var char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var length =12;
    var key = '';
    for(let i=0; i<length; i++){
        var randomKey = Math.floor(Math.random() * char.length);
        key += char.substring(randomKey, randomKey+1);   
    }
    document.getElementById('key').value = key;
   }
</script>

</body>
</html>