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
    color:black;
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
  .header{
    text-align: center;
    margin-right: 100px;
    color: black;
  }
  hr.separate{
    border-top: 2px solid #36c5f5;
  }
  </style>
</head>
<body>
  <x-navigation />
  <main>
    <div class="form">
      <form action="/HPasswordReset" method="post">
        @csrf
        <h1>Password Reset</h1>
      <table>
        <th colspan="2"><label for="">Enter Old Password:</label></th>
          <td colspan="4"><input type="password" name="OldPassword" placeholder="Enter Old Password"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('OldPassword') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
          <th colspan="2"><label for="">Enter New Password:</label></th>
            <td colspan="4"><input type="password" name="password" placeholder="Enter Password"></td>
      </tr>
      <tr>
          <th colspan="2"><label for="">Confirm New Password:</label></th>
            <td colspan="4"><input type="password" name="password_confirmation" placeholder="Confirm Password"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('password') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
           <td colspan="4"><input type="submit" value="Submit"</td>
      </tr>
        </table>
      </form>
    </div>
  </main>
  <x-footer />
</body>
</html>
