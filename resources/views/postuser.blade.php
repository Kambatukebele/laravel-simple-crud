
    @include('inc/header')
    @include('inc/nav')
 


      <br><br><br>
      <div class="container">
        <form method="POST">
          @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">First Name</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="firstName">
            </div>
            @error('firstName')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="lastName">
            </div>
            @error('lastName')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
            @enderror

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            @error('email')
                <div class="alert alert-danger">
                  {{$message}}
                </div>
            @enderror

              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Phone</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="phone_number">
              </div>
            @error('phone_number')
              <div class="alert alert-danger">
                {{$message}}
              </div>
            @enderror
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
          </form>
      </div>
</body>
</html>