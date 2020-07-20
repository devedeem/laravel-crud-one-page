<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
   <h1 class="bg-dark text-light w-100 text-center">Student Portal</h1>
    <form action="{{route('newstudent')}}" method="post" class="w-50 mx-auto">
  
    <div class="form-group">
    <label class="h5"> Name</label>
    <input type="text" name="name" class="form-control">
    </div>
    <div class="form-group">
    <label class="h5"> Father Name</label>
    <input type="text" name="f_name" class="form-control">
    </div>
    <div class="form-group">
    <label class="h5"> E-Mail</label>
    <input type="text" name="email" class="form-control">
    </div>
    <div class="form-group">
    <label class="h5"> Status</label>
    <input type="text" name="status" class="form-control">
    </div>
    <button type="submit" class="btn btn-dark"> Submit</button>
    </form>
    <h1 class="text-center text-light bg-dark">Students</h1>
<table class="table w-100">
<thead>
<tr>
<th>ID</th>
<th>Student Name</th>
<th>Father Name</th>
<th>E Mail</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($students as $student)
<tr>
<td> {{$student->id}} </td>
<td> {{$student->name}} </td>
<td> {{$student->f_name}} </td>
<td> {{$student->email}} </td>
<td> {{$student->status}} </td>
<td><a href='edit/{{$student->id}}' class="btn btn-dark">Edit</a> </td>
<td><a href='delete/{{$student->id}}' class="btn btn-dark">Delete</a> </td>
</tr>
@endforeach
</tbody>
</table>


</body>

</html>