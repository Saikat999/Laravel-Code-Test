<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>All User</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <div class="card">
               
                    <div class="card-header">
                        <h4 class="text-center"><a href="/" class="btn btn-dark float-left">Back to Home</a>All User <a href="/register" class="btn btn-success float-right">Add New User</a></h4>
                    </div>

                    <div class="card-body">
                       <table class="table table-striped">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Firt Name</th>
                                   <th>Last Name</th>
                                   <th>Organization</th>
                                   <th>Street</th>
                                   <th>City</th>
                                   <th>Email</th>
                                   <th>Mobile</th>
                                   
                               </tr>
                           </thead>
                           <tbody>
                               @foreach ($users as $user)
                                   <tr>
                                       <td>{{$user->id}}</td>
                                       <td>{{$user->fname}}</td>
                                       <td>{{$user->lname}}</td>
                                       <td>{{$user->organization}}</td>
                                       <td>{{$user->street}}</td>
                                       <td>{{$user->city}}</td>
                                       <td>{{$user->email}}</td>
                                       <td>{{$user->mobile}}</td>
                                       
                                       
                                   </tr>
                               @endforeach
                           </tbody>
                       </table>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>