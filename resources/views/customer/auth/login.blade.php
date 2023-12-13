<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap"
      rel="stylesheet"
    />



    <link rel="stylesheet" href="{{ asset('assets/customer') }}/login_template/fonts/icomoon/style.css" />

    <link rel="stylesheet" href="{{ asset('assets/customer') }}/login_template/css/owl.carousel.min.css" />




    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/customer') }}/login_template/css/bootstrap.min.css" />

    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('assets/customer') }}/login_template/css/style.css" />

    <title>Sign In</title>



    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <!-- Lottie Library -->
  <script src="https://cdn.jsdelivr.net/npm/lottie-web@5.7.1"></script>



  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



   <!-- Include jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

   <!-- Include jQuery Validation Plugin -->
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.19.3/jquery.validate.min.js"></script>

  </head>
  <body>
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <lottie-player src="{{ asset('/lottiefiles/1702483513742.json') }}" background="transparent"  speed="1"  loop autoplay class="img-fluid"></lottie-player>
            <!-- <img
              src="{{ asset('assets/customer') }}/login_template/images/undraw_remotely_2j6y.svg"
              alt="Image"
              class="img-fluid"
            /> -->
          </div>
          <div class="col-md-6 contents">
            <div class="row justify-content-center">
              <div class="col-md-8">
                <div class="mb-4">
                  <h3>Sign In</h3>
                </div>
                <form action="/login" method="post" id="myForm">
                  <div class="form-group first mb-4">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" value="" required/>

                  </div>
                  <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" value="" required/>
                  </div>



                  <input
                    type="submit"
                    value="Log In"
                    class="btn btn-block btn-primary"
                  />


                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="{{ asset('assets/customer') }}/login_template/js/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('assets/customer') }}/login_template/js/popper.min.js"></script>
    <script src="{{ asset('assets/customer') }}/login_template/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/customer') }}/login_template/js/main.js"></script>







<script>
  $(document).ready(function () {
      // Add validation to your form
      $("#myForm").validate({
          rules: {
              username: "required",
              password: {
                  required: true,
                  minlength: 6
              }
          },
          messages: {
              username: "Please enter your username",
              password: {
                  required: "Please enter your password",
                  minlength: "Your password must be at least 6 characters long"
              }
          }
      });
  });
</script>
  </body>
</html>
