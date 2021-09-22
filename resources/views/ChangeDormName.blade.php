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
    flex-direction: column; */ */
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
  <x-sidebar1 />
  <div class="header">
    {{-- <h1>A5 Kingdom</h1> --}}
    <h1>{{ Session()->get('DormName')}}</h1>
    <h3>{{ Session()->get('DormMotto')}}</h3>
  </div>
  <hr class="separate">
  <main>
    <div class="form">
      <form action="/ChangeDormName" method="post">
        @csrf
        <h1>Change Dorm Name</h1>
     <table>
       <tr>
       <th  colspan="4"><label for="">Old Dorm Name:</label></th>
           <td><input type="text" name="OldDormName" placeholder="Enter Dorm Name"></td>
       </tr>
       <tr>
         <td colspan="4">
           <span style="color:red">@error('OldDormName') {{$message."*"}}@enderror</span>
         </td>
       </tr>
       <tr>
       <th  colspan="4"><label for="">New Dorm Name:</label></th>
           <td><input type="text" name="NewDormName" placeholder="Enter New Dorm Name"></td>
       </tr>
       <tr>
         <td colspan="4">
           <span style="color:red">@error('NewDormName') {{$message."*"}}@enderror</span>
         </td>
       </tr>
       <tr>
          <td colspan="5"><input type="submit" value="Change"</td>
       </tr>
        </table>
      </form>
    </div>
  </main>
</body>
</html>
