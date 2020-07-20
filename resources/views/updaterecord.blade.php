<html>
<head>
<title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
   <h1 class="bg-dark text-light w-100 text-center">Student Portal</h1>
    <form action="{{route('updatedrecord')}}" method="post" class="w-50 mx-auto">
    <div class="form-group">
    <input type="hidden" name="id" class="form-control" value="{{$updated->id}}">
    </div>
    <div class="form-group">
    <label class="h5"> Name</label>
    <input type="text" name="name" class="form-control" value="{{$updated->name}}">
    </div>
    <div class="form-group">
    <label class="h5"> Father Name</label>
    <input type="text" name="f_name" class="form-control"value="{{$updated->f_name}}">
    </div>
    <div class="form-group">
    <label class="h5"> E-Mail</label>
    <input type="text" name="email" class="form-control" value="{{$updated->email}}">
    </div>
    <div class="form-group">
    <label class="h5"> Status</label>
    <input type="text" name="status" class="form-control" value="{{$updated->status}}">
    </div>
    <button type="submit" class="btn btn-dark"> Submit</button>
    </form>
    
<script src="{{asset('js/main.js')}}" type="tesxt/javascript"></script>
</body>

</html>