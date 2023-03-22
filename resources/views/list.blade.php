
@include('inc/header')
@include('inc/nav')


  <br><br><br>
  <div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @if($users)

              @foreach ($users as $user)
                <tr>             
                    <td>{{$user->firstName}}</td>
                    <td>{{$user->lastName}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td><button class="btn btn-primary"><a style="color:white" href="updatepost/{{$user->id}}">Edit</a></button></td>
                    <td><button class="btn btn-danger"><a style="color:white" href="deletepost/{{$user->id}}">Delete</a></button></td>            
              </tr>
              @endforeach
          @endif
        </tbody>
      </table>
  </div>
</body>
</html>