<head>
    <title>Cheapo || <?php echo $_SESSION['inputEmail'] ;?></title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>
 
  <body id='body'>
		  <form id="CreateMessage" action="CreateMessage.php" method="post">
		  <p>
            <textarea class="form-control col-xs-4" rows="20"></textarea>
			
			<input type="submit" name="Completed info" id="Completed_info" value="Send Message" />
			</p>
			</form>
    
		  <div>
				<?php
					mysql_connect("localhost", "root", "")or die("cannot connect server "); 
					mysql_select_db("cheapo")or die("Cannot select desired database");
					$sql="SELECT user.fname, user.lname, message.Msg_body FROM user JOIN message ON user.id=message.user_id WHERE user.id = message.user_id";
					$result=mysql_query($sql);

					if(! $result)
					{
						die('Could not get data: ' . mysql_error());
					}
					while($rows=mysql_fetch_array($result))
					{
					?>
					<table width="400" border="10" align="center" cellpadding="10" cellspacing="1" bgcolor="white">
					<tr>
						<td>
							<?php
								echo "{$rows['fname']}";
								echo "{$rows['lname']}  <br> ";
								echo "{$rows['Msg_body']}  <br> ";	
							?>
							</td>
						</tr>
					</table>
					<?php
					}
					mysql_close();
					?>
		  </div>
				
        </div>


    <div id="footer">
      Copyright © Cary Nicole Shantel Jodi
    </div>
	</div>
 </body>