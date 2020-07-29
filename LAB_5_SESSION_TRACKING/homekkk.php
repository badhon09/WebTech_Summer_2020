<?php
session_start();

//$name = $_SESSION['username'];

?>


<table style="width:100% ; border:1px solid;" >
    <tr>
      <th width="100px"><img src="./logo (1).png"></th>
      <th width="auto" ></th>
      <th width="200px"><a href="">loggedin as <?php  echo $_SESSION['userName'];	 ?>| </a><a href="">logout  </a></th>
    </tr>
    
    <tr>
        
      <td>
          <h3>Account</h3><hr>
          <ul>
              <li><a href="">Dashboard</a></li>
              <li><a href="">View Profile</a></li>
              <li><a href="">Edit Profile</a></li>
              <li><a href="">Change Profile Picture</a></li>
              <li><a href="">Logout</a></li>
          </ul>
      </td>
      
      <td height="400px">
      <h1>Welcome <?php  echo $_SESSION['userName'];	 ?></h1>

</td>
      <td></td>
    </tr>
    
    <tr>
      <td></td>
      <td>copyright</td>
      <td></td>
    </tr>
  </table>






















<table border="1">




</table>