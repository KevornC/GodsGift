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
  /* main{
    /* display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100vh;
    width: 98vw;
    background-image: url('images/mainbg.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    z-index: -2
    } */
  form{
    background: white;
      margin: 10px;
      margin: 100px auto;
      height: 500px;
      width: 500px;
      margin-bottom: 300px;
      margin-right: 600px;
      z-index:3;
  }
  form h1{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    margin-left: 150px;
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
    /* display: flex;
    justify-content: center;
    align-items: center; */
  }
  input[type="submit"]:hover{
    background: orange;
    color:blue;
  }
  select{
    border: none;
    outline: none;
    border-bottom: 2px solid blue;
    margin-left: 5px;
    width: 100%;
  }
  table{
    background: white;
    border: 2px solid blue;
    padding: 50px;
    z-index: 4;
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
    width: 75%;
    font-size: 1.5em;
    color:orange;
    font-weight: bold;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 100px;
    margin-left: 150px;

    position: sticky;
    bottom: 100px;
    z-index: -1;
  }
  a{
    text-decoration: none;
  }
  </style>
</head>
<body>
  <x-navigation />
  <main>
    <div class="form">
      <form action="/Register" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Registration for A-Floor</h1>
     <table>
      <tr>
            <th><label for="">Name:</label></th>
            <td><input type="text" name="Firstname" placeholder="Enter Firstname" autofocus></td>
            <td><input type="text" name="Middlename" placeholder="Enter Middle Name"></td>
            <td><input type="text" name="Lastname" placeholder="Enter Lastname"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('Firstname') {{$message."*"}}@enderror</span>
              <span style="color:red">@error('Lastname') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
          <th><label for="gender">Gender:</label></th>
          <td><input type="radio" id="gender" name="Gender" value="Male"><label for=""> Male</label></td>
          <td><label for="">Only Males on A floor<span style="color:red">*<span></label></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('Gender') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
          <th colspan="2"><label for="gender">Image:</label></th>
          <td colspan="4"><input type="file" name="photo" accept=".png, .jpg, .jpeg"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('photo') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
        <th colspan="2"><label>Length Of Residency:</label></th>
        <td colspan="4"><select name="LOR">
          <option value="">Enter Length Of Residency</option>
          <option value="6">6 months</option>
          <option value="12">12 months</option>
          <option value="24">24 months</option>
        </select></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('LOR') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
        <th colspan="2"><label for="">Floor:</label></th>
        <th colspan="4"><label for="" style="border-bottom: 2px solid blue; width: 100%">A</label></th>
          <td><input type="hidden" name="Floor" placeholder="A-Floor"></td>
      </tr>
      <tr>
          <th colspan="2"><label for="">Dorm Number:</label></th>
            <td><input type="number" name="dormNum" placeholder="5"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('dormNum') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
        <th colspan="2"><label for="">Email:</label></th>
          <td colspan="4"><input type="email" name="Email" placeholder="Enter Email"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('Email') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
          <th colspan="2"><label for="">Password:</label></th>
            <td colspan="4"><input type="password" name="password" placeholder="Enter Password"></td>
      </tr>
      <tr>
          <th colspan="2"><label for="">Confirm Password:</label></th>
            <td colspan="4"><input type="password" name="password_confirmation" placeholder="Confirm Password"></td>
      </tr>
      <tr>
        <td colspan="4">
          <span style="color:red">@error('password') {{$message."*"}}@enderror</span>
        </td>
      </tr>
      <tr>
          <th><input type="checkbox" name="Terms"></th>
            <th colspan="2"><label for="">Agree to <span style="color:blue">terms</span> and <span style="color:orange">conditions</span></label></th>
     </tr>
     <tr>
       <td colspan="4">
         <span style="color:red">@error('Terms') {{$message."*"}}@enderror</span>
       </td>
     </tr>
     <tr>
           <td colspan="4"><input type="submit" value="Register"</td>
     </tr>
        </table>
        <a href="/Login"><h1 class="Register"><p>Already Have an Account?</p>Login</h1></a>
      </form>
    </div>
  </main>
  <x-footer />
</body>
</html>
