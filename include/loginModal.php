<div id="loginModal" class="reveal-modal" style="width: 75%;" data-reveal>
  <div class="row">
    <div class="large-6 medium-6 columns ">
			<h4>User Login</h4>
  		<form action="process/login.php" method="POST">
  		<label for="username">Username : </label>
  		<input type="text" id="username" name="uname" required><br>
  		<label for="password">Password : </label>
  		<input type="password" id="password" name="password" required><br>
  		<input type="hidden" value="cmVnaXN0cmF0aW9u" name="case" required>
  			<div style="margin-top: 10px;">
  				<a href="#" style=><u>Forgot Password?</u></a><br><br>
  				<input type="submit" class="tiny button" value="Login">
			  </div>
  		</form>
    </div>
    <div class="large-6 medium-6 columns ">
			<h4>Admin Login</h4>
			<form action="process/login.php" method="POST">
			<label for="username">Username : </label>
			<input type="text" id="username" name="uname" required><br>
			<label for="password">Password : </label>
			<input type="password" id="password" name="password" required><br>
			<input type="hidden" value="bG9naW4=" name="case" required> 
  			<div style="margin-top: 10px;">
  				<a href="#" style=><u>Forgot Password?</u></a><br><br>
  				<input type="submit" class="tiny button" value="Login">
			  </div>
			</form>
    </div>
  </div>
</div>