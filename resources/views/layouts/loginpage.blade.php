<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Login_PageStyle.css">


    <title>Login Page</title>
  </head>
  <body>
    <!--login div START-->
    <h2 class="welcome">Welcome to PUP Virtual Job Fair</h2>
      <div class="d-flex justify-content-around">

        <div class="container">

        <div class="row">
          <div class="col-sm-6 order-sm-12">
            <div class="sliderbody">
              <section class="section">
                <div class="slider">
                  <div class="slide">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="st first">
                      <img src="https://i.ibb.co/xCd7Lb8/Slide1.jpg" alt="PUP photo1">
                    </div>

                    <div class="st">
                      <img src="https://i.ibb.co/85vY8CZ/Slide2.jpg" alt="PUP photo2">
                    </div>

                    <div class="st">
                      <img src="https://i.ibb.co/cJ3vnjW/Slide3.jpg" alt="PUP photo3">
                    </div>

                    <div class="st">
                      <img src="https://i.ibb.co/G2VJVPT/Slide4.jpg" alt="PUP photo4">
                    </div>

                    <div class="nav-auto">
                      <div class="a-b1"></div>
                      <div class="a-b2"></div>
                      <div class="a-b3"></div>
                      <div class="a-b4"></div>
                    </div>
                  </div>

                  <div class="nav-m">
                    <label for="radio1" class="m-btn"></label>
                    <label for="radio2" class="m-btn"></label>
                    <label for="radio3" class="m-btn"></label>
                    <label for="radio4" class="m-btn"></label>
                  </div>


                </div>
              </section>
            </div>


          </div>
          <div class="col-sm-6 order-sm-1">


            <div class="loginBox">

              <form action="post">
                <h2 class="welcome">Login</h2>

                <div class="txt_field">
                  <input type="text" placeholder="    Email" required />
                </div>
                <div class="txt_field">
                  <input type="password" placeholder="    Password" required />
                </div>
                <div class="remember">
                    <input type="checkbox" name="keepme" id="keepme">
                    <label for="keepme">Keep me logged in</label><br><br>
                </div>
                    <input type="submit" value="Log In"><br><br>
                <div class="signup_link">
                    Dont have an account yet? <a href="#">Signup</a>
                </div>
                <div class="pass">
                    <a href="#">Forgot Password?</a>
                </div>


              </form>
            </div>



          </div>


          </div>

        </div>

    </div>


  </body>

  <script type="text/javascript">
    var counter = 1;
    setInterval(function(){

        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4){
        counter = 1;
        }
    },3000);

  </script>
</html>
