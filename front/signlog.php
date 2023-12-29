<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up and Login</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

	<a href="..">
		<img src="../img/crosslogin.png" alt="Exit button" class="Exit">
	</a>

	<div class="container" id="container">
		<div class="form-container sign-up-container">

			<form action="signup.php" method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social"><i class="fa fa-google"></i></a>
					<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
				</div>
				<span>or use your email for registration</span>
				<input type="text" name="name" placeholder="Name">
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<button type="submit">SignUp</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="signin.php" method="POST">
				<h1>Sign In</h1>
				<div class="social-container">
					<a href="#" class="social"><i class="fa fa-facebook"></i></a>
					<a href="#" class="social"><i class="fa fa-google"></i></a>
					<a href="#" class="social"><i class="fa fa-linkedin"></i></a>
				</div>
				<span>or use your account</span>
				<input type="email" name="email" placeholder="Email">
				<input type="password" name="password" placeholder="Password">
				<a href="#">Forgot Your Password</a>


				<button type="submit" name="singinBtn">Sign In</button>

				<a href="../adminlogin.php" style="padding: top 10px;">Login as admin</a>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your personal info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello, Cinephilia!</h1>
					<p>Join us by becoming a member of Wayang Cinemas.</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		const signUpButton = document.getElementById('signUp');
		const signInButton = document.getElementById('signIn');
		const container = document.getElementById('container');

		signUpButton.addEventListener('click', () => {
			container.classList.add("right-panel-active");
		});
		signInButton.addEventListener('click', () => {
			container.classList.remove("right-panel-active");
		});
	</script>


</body>

</html>