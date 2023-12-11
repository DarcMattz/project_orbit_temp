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
                  id="floatingInput"
                  placeholder="name@example.com"
                />
                <label for="floatingInput">Email address</label>

                <!-- invalid input -->

                <small style="text-align: left"
                  ><p style="color: red; font-size: smaller">
                    incorrect input
                  </p></small
                >
              </div>

              <!-- input password -->

              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password"
                />
                <label for="floatingPassword">Password</label>

                <!-- invalid input -->

                <small style="text-align: left"
                  ><p style="color: red; font-size: smaller">
                    incorrect input
                  </p></small
                >
              </div>
              <div class="d-grid gap-2 col-12 mx-auto">
                <!-- login button -->

                <button class="btn btn-primary" type="button">Log In</button>
              </div>

              <!--! forgot password link -->
              <p
                style="font-size: medium; margin-top: 10px; text-align: center"
              >
                <a href="#" style="color: #fff">Forgot Password</a>
              </p>
              <!--!  -->

              <div style="margin: 10px auto">
                <div class="mytextdiv">
                  <div class="divider"></div>
                  <div class="mytexttitle" style="padding: 0 5px">or</div>
                  <div class="divider"></div>
                </div>
              </div>
              <div class="d-grid gap-2 col-12 mx-auto">
                <!-- google account button -->

                <button
                  class="btn btn-primary"
                  type="button"
                  style="
                    --bs-btn-color: #006d68;
                    --bs-btn-bg: #ffffff;
                    --bs-btn-border-color: #006d68;
                    --bs-btn-hover-color: #006d68;
                    --bs-btn-hover-bg: #b9b9b9;
                    --bs-btn-hover-border-color: #006d68;
                    --bs-btn-focus-shadow-rgb: 49, 132, 253;
                    --bs-btn-active-color: #fff;
                    --bs-btn-active-bg: #006d68;
                    --bs-btn-active-border-color: #006d68;
                    --bs-btn-disabled-color: #fff;
                    --bs-btn-disabled-bg: #006d68;
                    --bs-btn-disabled-border-color: #006d68;
                    height: 50px;
                  "
                >
                  <img src="../images/google.png" width="30px" /> Continue with
                  Gmail
                </button>
              </div>
            </form>

            <!-- move to signup.php -->

            <p style="font-size: medium; margin-top: 50px; text-align: center">
              Don't have an account?
              <a href="#" style="color: #006d68">Sign up</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
