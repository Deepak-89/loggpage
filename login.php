<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		/* Define username and associated password array */
		$logins = array('Alex' => '123456','username1' => 'password1','username2' => 'password2');
		
		/* Check and assign submitted Username and Password to new variable */
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		$account_linking_token = isset($_POST['account_linking_token']) ? $_POST['account_linking_token'] : '';
		
		/* Check Username and Password existence in defined array */		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			/* Success: Set session variables and redirect to Protected page  */
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:https://www.facebook.com/messenger_platform/account_linking?account_linking_token=" . $account_linking_token."&authorization_code=20");
			exit;
		} else {
			/*Unsuccessful attempt: Set error message */
			$msg="<span style='color:red'>Invalid Login Details</span>";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Login Script Without Using Database</title>
<link href="./css/style.css" rel="stylesheet">
	<link href="./css/log.css" rel="stylesheet">
</head>
<body>
<div id="Frame0">
  <h1>PHP Login Script Without Using Database Demo.</h1>
  <p>More tutorials <a href="http://www.w3schools.in/">www.w3schools.in</a></p>
</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr style="display: none">
      <td align="right">Access token</td>
      <td><input type="text" name="account_linking_token" value="<?php echo $_GET['account_linking_token']; ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
	
	<form class="ng-pristine ng-invalid ng-invalid-required" autocomplete="off" name="userForm" novalidate="">
	<!-- ngIf: IsAuth && isLogIn --> <!-- ngIf: IsAuth && isLogIn -->
	<div class="lw-positionRelative lw-Container">
		<div>
			<!-- ngIf: !IsAuth -->
			<div class="lw-Body_Lock_Icon ng-scope">
				 
			</div>
			<!-- end ngIf: !IsAuth --> <!-- ngIf: !IsAuth -->
			<div class="lw-LoginIcon lw-PadLeft20 lw-paddingBottom28 ng-scope">
				<p>
					<strong>
						 Log In
					</strong>
				</p>
			</div>
			<!-- end ngIf: !IsAuth -->
			<div>
				<!-- ngIf: !IsPapLogin && !IsAuth -->
				<!-- end ngIf: !IsPapLogin && !IsAuth -->
				<div class="lw-PadLeft20 lw-vs15">
					<input id="txtPersonalId" class="ng-pristine ng-invalid ng-invalid-required lw-TextRoundCorner lw-marginTop0 ng-valid-maxlength ng-valid-minlength ng-valid-pattern" autocomplete="off" name="personalId" required="required" type="text" placeholder="Personal ID" />
					
				</div>
				<!-- ngIf: invalidPersonalId -->
				<div class="lw-marBottom3 lw-PadLeft20 lw-vs15">
					<input id="chkRemember" class="lw-floatLeft lw-checkBox ng-pristine ng-valid" name="RememberUserId" type="checkbox" />
					<label for="chkRemember">
						<span class="lw-textRememberId lw-PadLeft3 lw-fontsize12 lw-displayInline">
							Remember my ID
						</span>
					</label>
				</div>
				<div class="lw-PadLeft20 lw-Padtop33">
					<input id="btnContinue" class="lw-buttonSubmit" type="submit" value="Log In" />
					<input id="btnGo" class="lw-buttonSubmit lw-PadLeft20 lw-marginTop8 ng-hide" type="submit" value="Go" />
				</div>
			</div>
		</div>
		<div class="lw-PadLeft13 lw-ForgotId lw-PadRight13">
			<a target="_top">
				Forgot ID?
			</a>
			<!-- ngIf: IsAuth && IsCoBrandedCard --> <!-- ngIf: IsAuth && IsCoBrandedCard --><!-- ngIf: !IsAuth -->
			<span class="lw-pipe-delimiter lw-PadLeftRight6 ng-scope">
				|
			</span>
			<!-- end ngIf: !IsAuth --> <!-- ngIf: !IsAuth -->
			<a class="ng-scope">
				 New user? Enroll now
			</a>
			<!-- end ngIf: !IsAuth -->
		</div>
	</div>
	<!-- ngIf: IsAuth --><!-- ngIf: IsAuth -->
</form>

</body>
</html>
