<html>
<head>
  <link rel="icon" href="images\tab.png"/>
  <title>Heart Dormitory</title>
  <style>
  *{
    margin:0;
    padding:0;
    box-sizing: border-box;
  }
  main{
    /* display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column; */
     /* height: 95vh;
    background-image: url('images/bg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-attachment: fixed; */
    }
  form{
    /* background: white; */
      margin: 10px;
      margin: 100px auto;
      height: 500px;
      width: 500px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
  }
  form h1{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color: black;
  }
  form p{
    width: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  form p a{
    text-decoration: none;
    border-radius: 2px;
    padding: 7px;
    border: 1px solid orange;
    margin-left: 10px;
    color: white;
  }
  form p a:hover{
    background: orange;
  }
  input{
    border: none;
    outline: none;
    border-bottom: 2px solid blue;
    margin-left: 5px;
  }
  input[type="submit"]{
    outline: none;
    border: 2px solid blue;
    padding: 12px;
    margin-left: 5px;
    width: 100%;
    background: transparent;
    width: 100%;
    margin-top: 20px;
  }
  input[type="submit"]:hover{
    background: orange;
    color:blue;
  }
  table{
    background: white;
    border: 2px solid blue;
    padding: 50px;
  }
  table th{
    text-align: left;
    padding: 10px;
  }
  table td{
    width: 100%;
  }
  .Register{
    background: blue;
    padding: 1em;
    margin: 0 auto;
    width: 350px;
    font-size: 1.5em;
    color:orange;
    font-weight: bold;
    text-align: center;
    margin-top: 10px;

  }
  a{
    text-decoration: none;
  }
  a h1:hover{
    background:orange;
    color:blue;
  }
  </style>
</head>
<body>
  <x-navigation />
  <main>
    <div class="form">
      <form action="{{url('Login')}}" method="post">
        @csrf
        <h1>Login</h1>
     <table>
       <tr>
       <th><label for="">Email:</label></th>
           <td><input type="Email" name="Email" placeholder="Enter Email"></td>
       </tr>
       <tr>
         <td colspan="4">
           <span style="color:red">@error('Email') {{$message."*"}}@enderror</span>
         </td>
       </tr>
       <tr>
         <th><label for="">Password:</label></th>
           <td><input type="password" name="password" placeholder="Enter Password"></td>
       </tr>
       <tr>
         <td colspan="4">
           <span style="color:red">@error('password') {{$message."*"}}@enderror</span>
         </td>
       </tr>
       <tr>
         <th colspan="4"><a href="/LoginPasswordReset"><h1 class=""><p>Forgot Password?</p></h1></a></th>
     </tr>
       <tr>
          <td colspan="4"><input type="submit" value="Login"</td>
       </tr>
        </table>
        <a href="/Register"><h1 class="Register"><p>Don't Have An Account?</p>Register Now</h1></a>
      </form>
    </div>
  </main>
  <x-footer />
</body>
</html>
