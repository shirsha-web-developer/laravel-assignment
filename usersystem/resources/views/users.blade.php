<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    table, th, td {
  border: 1px solid black;
}
</style>
</head>

    <div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
        <div class="col" style="padding: top 55px required">
            <form action="{{route('store')}}" name="userform" method="post"  enctype='multipart/form-data'>
                @method('POST')
                @csrf
                <h5>User Registration Form</h5>
                
                <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" class="form-control" id="name" name="image" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Address</label>
                    <textarea class="form-control" id="name" placeholder="Address" name="address" required></textarea>
                </div>
                
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault1" value="Male" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Male
                    </label>
                    <input class="form-check-input" type="radio" name="gender" id="flexRadioDefault2" value="Female">
                    <label class="form-check-label" for="flexRadioDefault2">
                        Female
                    </label>
                </div>
                    
                <input type="submit" class="btn btn-primary">
       </form>
        </div>
        <div class="col">
        <input id="myInput" type="text" placeholder="Search..">
        <br>
        <table style="border: 1px solid black" id="myTable">
<!-- The first row is the table's header -->
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
                

   @if(count($users) != 0)
   
      @foreach ($users as $user) 
      
         <tr>
            <td>{{$loop->iteration}}</td>
            <td>
               {{ $user['name']}} 
            </td>
            <td>
               <img 
                  src="images/{{$user['image']}}"
                  alt=""
                  width="100px" height="50px">
            </td>
            <td>
               {{ $user['address']}} 
            </td>
            <td>
               {{$user['gender'] }}  
            </td>
            <td>
               <a href="{{$user[id]}}">Edit</a>
               <a href="">Delete</a>
               <a href="">View</a>
            </td>
         </tr>
      @endforeach
    @endif
</table>	
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    //console.log("test");
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

