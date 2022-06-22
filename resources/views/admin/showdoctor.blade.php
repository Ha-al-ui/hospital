
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')
  </head>
  <body>
  <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div style="padding-left:100px; padding-top:50px;">

                <table class="table table-bordered table-striped">

                    <tr class="bg-success">

                        <th scope="col" style="font-size:15px; color:white;">Doctor Name</th>
                        <th scope="col" style="font-size:15px; color:white;">Doctor Phone</th>
                        <th scope="col" style="font-size:15px; color:white;">Speciality</th>
                        <th scope="col" style="font-size:15px; color:white;">Room N°</th>
                        <th scope="col" style="font-size:15px; color:white;">Image</th>
                        <th scope="col" style="font-size:15px; color:white;">Update</th>
                        <th scope="col" style="font-size:15px; color:white;">Delete</th>

                    </tr>
        
        
                    @foreach($data as $doctor)
                    <tr style="background-color:#D1D1D1; color:black;" >

                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->speciality}}</td>
                        <td>{{$doctor->room}}</td>
                        <td><img src="doctorimage/{{$doctor->image}}"></td>
                        <td><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">Update</td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to delete')" href="{{url('deletedoctor',$doctor->id)}}">Delete</td>
            
                    </tr>

                    @endforeach

                </table>

            </div>


        </div>  
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
  </body>
</html>