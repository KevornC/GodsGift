<link rel="icon" href="images\tab.png"/>
<title>Heart Dormitory</title>
<style>
body {
	 background: #fcfeff;
	 margin: 0;
	 font-family: "Open Sans", Helvetica Neue, Helvetica, Arial, sans-serif;
	 color: #fff;
	 padding-left: 240px;
}
 main {
	 position: relative;
	 height: 100vh;
}
 main .helper {
	 background: rgba(0,0,0,0.2);
	 color: #ffea92;
	 position: absolute;
	 top: 50%;
	 left: 50%;
	 transform: translate3d(-50%,-50%,0);
	 padding: 1.2em 2em;
	 text-align: center;
	 border-radius: 20px;
	 font-size: 2em;
	 font-weight: bold;
}
 main .helper span {
	 color: rgba(0,0,0,0.2);
	 font-size: 0.4em;
	 display: block;
}
 .menu {
	 background: #36c5f5;
	 height: 100vh;
	 width: 240px;
	 position: fixed;
	 top: 0;
	 left: 0;
	 z-index: 5;
	 outline: none;
}
 .menu .avatar {
	 background: rgba(0,0,0,0.1);
	 padding: 2em 0.5em;
	 text-align: center;
}
 .menu .avatar img {
	 width: 100px;
	 border-radius: 50%;
	 overflow: hidden;
	 border: 4px solid #fff;
	 box-shadow: 0 0 0 4px rgba(255,255,255,0.2);
}
 .menu .avatar h2 {
	 font-weight: normal;
	 margin-bottom: 0;
}
 .menu ul {
	 list-style: none;
	 padding: 0.5em 0;
	 margin: 0;
}
 .menu ul li {
	 padding: 0.5em 1em 0.5em 3em;
	 font-size: 0.95em;
	 font-weight: regular;
	 background-repeat: no-repeat;
	 background-position: left 15px center;
	 background-size: auto 20px;
	 transition: all 0.15s linear;
	 cursor: pointer;
}
 .menu ul li.icon-dashboard {
	 background-image: url("http://www.entypo.com/images//gauge.svg");
}
 .menu ul li.icon-customers {
	 background-image: url("http://www.entypo.com/images//briefcase.svg");
}
 .menu ul li.icon-users {
	 background-image: url("http://www.entypo.com/images//users.svg");
}
 .menu ul li.icon-settings {
	 background-image: url("http://www.entypo.com/images//tools.svg");
}
 .menu ul li:hover {
	 background-color: rgba(0,0,0,0.1);
}
 .menu ul li:focus {
	 outline: none;
}
.menu ul a {
	text-decoration: none;
	color:white;
}
.menu ul a:hover li{
	color: white;
}

</style>
<body>
	<section>
  <nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="/images/{{ Session()->get('photo')}}" />
    <h2>{{ Session()->get('Firstname')." ".Session()->get('Lastname')}}</h2>
  </header>
	<ul>
    <a href="/Dashboard"><li tabindex="0" class="icon-dashboard"><span>Dashboard</span></li></a>
		<a href="/ViewProfile"><li tabindex="0" class="icon-users"><span>View Profile</span></li>
		<a href="/ChangeProfileImage"><li tabindex="0" class="icon-settings"><span>Change Profile Image</span></li>
		<a href="/ChangeProfile"><li tabindex="0" class="icon-settings"><span>Customize Profile</span></li>
		<a href="/RPasswordReset"><li tabindex="0" class="icon-settings"><span>Change Password</span></li>
		<a href="/ViewDormMembers"><li tabindex="0" class="icon-users"><span>View Dorm Members</span></li>
		<a href="/ViewDormRoom"><li tabindex="0" class="icon-customers"><span>View Dorm Room</span></li>
		<a href="/ViewAllDormRoom"><li tabindex="0" class="icon-customers"><span>View All Dorm Rooms</span></li>
		<a href="/ChangeDormName"><li tabindex="0" class="icon-settings"><span>Customize Dorm Name</span></li>
		<a href="/ChangeMotto">  <li tabindex="0" class="icon-settings"><span>Change Motto</span></li>
    <a href="/logout"><li tabindex="0" class="icon-customers"><span>Log Out</span></li></a>
  </ul>
</nav>
</section>
</body>
