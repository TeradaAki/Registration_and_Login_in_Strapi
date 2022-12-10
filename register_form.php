<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
    body {
      background-color: #E67235;
    }
    h1 {
      text-align: center;
    }
    input {
      width: 30%;
      padding: 12px 20px;
      margin: 5px 0;
      border-bottom-style: solid;
      border-bottom-width: thin;
      border-radius: 50px 20px;
      position: relative;
      left: 35%;
      border-color: #77BFE2;
      background: #FCE786;
      border: 5px inset #77BFE2;
    }
    .div1 {
      align: center:
    }
    button {
      position: absolute;
      top: 60%;
      left: 45%;
    }
    .p1 {
      position: absolute;
      top: 69%;
      left: 40%;
    }
  </style>
</head>
<body>
  <section>
    <div>
      <div>
        <div>
        </div>
        <div>
            <div>
              <h1>Register</h1>
            </div>
            <form action="register.php" method="POST">
            <!--Username--> 
            <div class="div1">
              <input type="text" id="username" name="username"
                placeholder="Enter username" autocomplete="off" required/>
            </div>
            <!--Email Input--> 
            <div>
              <input type="email" id="email" name="email"
                placeholder="Enter a valid email address" autocomplete="off" required/>
            </div>
  
            <!--Password Input-->            
            <div>
              <input type="password" id="password" name="password"
                placeholder="Enter your password" autocomplete="off" required/>
            </div>
            <!--Confirm Password Input-->            
            <div>
              <input type="password" id="confirm_password" name="confirm_password"
                placeholder="Confirm your password" autocomplete="off" required/>
            </div>
  
            <div>
              <button type="submit" class="btn btn-primary btn-lg">
                Register</button>
              <p class="p1">Already have an account? <a href="login-form.php"
                  class="link-danger">Login</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>