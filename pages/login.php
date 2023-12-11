<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../styles/landing.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="../jquery/jquery3.7OFFLINE.js"></script>
    <script src="../function/loginfunction.js"></script>
    <title>Project Orbit | Sign Up</title>
    <style>
      #background {
        position: fixed;
        top: 0;
        right: 0;
        width: 50%;
        height: 100%;
        background-color: #25b4b2;
      }
      body {
        background-image: url(../images/login_bg.png);
        background-repeat: no-repeat;
        background-position: left center;
        background-size: 48rem;
      }
      h1 {
        margin: 0 0 10px 0;
        color: white;
        font-size: 40px;
        /* text-align: left; */
        font-weight: 500;
      }
      p {
        margin: 0 0 30px 0;
        font-size: 22px;
        color: white;
        /* text-align: left; */
        font-weight: normal;
      }
      .btn-primary {
        --bs-btn-color: #fff;
        --bs-btn-bg: #006d68;
        --bs-btn-border-color: #006d68;
        --bs-btn-hover-color: #fff;
        --bs-btn-hover-bg: #06978f;
        --bs-btn-hover-border-color: #006d68;
        --bs-btn-focus-shadow-rgb: 49, 132, 253;
        --bs-btn-active-color: #fff;
        --bs-btn-active-bg: #006d68;
        --bs-btn-active-border-color: #006d68;
        --bs-btn-disabled-color: #fff;
        --bs-btn-disabled-bg: #006d68;
        --bs-btn-disabled-border-color: #006d68;
        height: 50px;
      }
      .mytextdiv {
        display: flex;
        flex-direction: row;
        align-items: center;
      }
      .mytexttitle {
        flex-grow: 0;
        color: #fff;
      }

    .divider {
      flex-grow: 1;
      height: 2px;
      background-color: #ffffff;
    }
  </style>
</head>

<body>
  <!-- WHOLE BODY OF PAGE -->
  <div class="inner-body">
    <header class="header-nav">
      <div class="logo">
        <a href="#"><img src="../images/logo_1.png" alt="logo here" /></a>
      </div>
    </header>

      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col-5"></div>
          <div class="col-7" style="padding: 85px 80px" id="background">
            <h1>Sign In</h1>
            <p class="pt-4">Welcome Back! Let's Orbit Together.</p>
            <!--! form -->
            <form action="#">
              <!-- input email -->

              <div class="form-floating mb-3">
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  placeholder="name@example.com"
                  
                />
                <label for="floatingInput">Email address</label>

              <!-- invalid input -->

                <small style="text-align: left "
                id="showemail"
                  ><p style="color: orange; font-size: smaller">
                    required
                  </p></small
                >
              </div>

            <!-- input password -->

              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="pass"
                  placeholder="Password"
                />
                <label for="floatingPassword">Password</label>

              <!-- invalid input -->

                <small style="text-align: left"
                id="showpass"
                  ><p style="color: orange; font-size: smaller">
                  required
                  </p></small
                >
              </div>
              <div class="d-grid gap-2 col-12 mx-auto">
                <!-- login button -->

                <button class="btn btn-primary" type="button" id="loginbtn">Log In</button>
              </div>

            <!--! forgot password link -->
            <p style="font-size: medium; margin-top: 10px; text-align: center">
              <a href="#" style="color: #fff">Forgot Password</a>
            </p>
            <!--!  -->

          </form>

          <!-- move to signup.php -->
          <p style="font-size: medium; margin-top: 50px; text-align: center">
            Don't have an account?
            <a href="signup.php" style="color: #006d68">Sign up</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</body>

</html>