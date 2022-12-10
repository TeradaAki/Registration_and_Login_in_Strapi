<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
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
      top: 40%;
      left: 55%;
    }
    .p1 {
      position: absolute;
      top: 57%;
      left: 42%;
    }
    .text-body {
      position: absolute;
      top: 51%;
      left: 45%;
    }
    .checkbox {
      position: absolute;
      top: 40%;
      left: 30%;
    }
    .checkbox1 {
      position: absolute;
      top: 40%;
      left: 36%;
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
              <p><h1>Login</h1></p>
            </div>
            <form action="login.php" method="POST">
            <!--Email Input--> 
            <div>
              <input type="email" id="identifier" name="identifier"
                placeholder="Enter a valid email address"/>
            </div>
  
            <!--Password Input-->            
            <div>
              <input type="password" id="password" name="password"
                placeholder="Enter your password" />
            </div>
  
            <div>
              <!-- Checkbox -->
              <div>
                <input class="checkbox" type="checkbox">
                <label class="checkbox1">Remember me</label>
              </div>
              <a href="#" class="text-body">Forgot password?</a>
            </div>
  
            <div>
              <button type="submit" class="btn btn-primary btn-lg">
                Login</button>
              <p class="p1">Don't have an account? <a href="register_form.php"
                  class="link-danger">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>
</html>