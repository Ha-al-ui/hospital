
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

        <div style="padding-top:50px;">

            <table class="table table-bordered table-striped">

                <tr class="bg-success">

                    <th scope="col" style="font-size:12px; color:white;">Customer Name</th>
                    <th scope="col" style="font-size:12px; color:white;">Customar Email</th>
                    <th scope="col" style="font-size:12px; color:white;">Customer Phone</th>
                    <th scope="col" style="font-size:12px; color:white;">Doctor Name</th>
                    <th scope="col" style="font-size:12px; color:white;">Date</th>
                    <th scope="col" style="font-size:12px; color:white;">Message</th>
                    <th scope="col" style="font-size:12px; color:white;">Status</th>
                    <th scope="col" style="font-size:12px; color:white;">Approved</th>
                    <th scope="col" style="font-size:12px; color:white;">Decline</th>

                </tr>

                @foreach($data as $appoint)

                <tr style="background-color:#D1D1D1; color:black;" class="table table-bordered ">
                    <td>{{$appoint->name}}</td>
                    <td>{{$appoint->email}}</td>
                    <td>{{$appoint->phone}}</td>
                    <td>{{$appoint->doctor}}</td>
                    <td>{{$appoint->date}}</td>
                    <td>{{$appoint->message}}</td>
                    <td>{{$appoint->status}}</td>
                    <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                    <td><a class="btn btn-danger" href="{{url('decline',$appoint->id)}}">Decline</a></td>
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