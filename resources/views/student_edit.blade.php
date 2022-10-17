<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-5">
                <h1 class="display-one mt-5">PHP Laravel Project - Đề 01</h1>
                <div class="text-left"><a href="/ThucHanh-6/laravel_de01/public/student" class="btn btn-outline-primary">Students List</a></div>
    
                <form id="edit-frm" method="POST" action="" class="border p-3 mt-2">
                    <div class="control-group col-6 text-left">
                        <label for="id">ID</label>
                        <div>
                            <input type="text" id="id" class="form-control mb-4" name="id"
                                placeholder="Enter ID" value="{!! $student->id !!}"
                                required>
                        </div>
                    </div>
                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">FullName</label>
                        <div>
                            <input id="fullname" class="form-control mb-4" name="fullname"
                                placeholder="Enter Full Name" value="{!! $student->fullname !!}"
                                required>
                        </div>
                    </div>
    
                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Birthday</label>
                        <div>
                            <input type="text" id="birthday" class="form-control mb-4" name="birthaday"
                                placeholder="Enter Birthday" value="{!! $student->birthday !!}"
                                required>
                        </div>
                    </div>   
                    <div class="control-group col-6 mt-2 text-left">
                        <label for="body">Address</label>
                        <div>
                            <input type="text" id="address" class="form-control mb-4" name="address"
                                placeholder="Enter Address" value="{!! $student->address !!}"
                                required>
                        </div>
                    </div>
                    @csrf 
                    @method('PUT')
                    <div class="control-group col-6 text-left mt-2"><button class="btn btn-primary">Save Update</button></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>