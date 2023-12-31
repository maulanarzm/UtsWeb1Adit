<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login page</title>
	<link rel="Icon" href="img/course02.jpg">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="dataphp/logindanregister.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="login_username" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="login_password" placeholder="Password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="login">Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="img/google.png" alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="dataphp/logindanregister.php" method="post">
                    <div class="field input-field">
                        <input type="email" name="register_username" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="register_password" placeholder="Create password" class="password" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="confirm_password" placeholder="Confirm password" class="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button type="submit" name="register">Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="#" class="field facebook">
                    <i class='bx bxl-facebook facebook-icon'></i>
                    <span>Login with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="#" class="field google">
                    <img src="img/google.png"  alt="" class="google-img">
                    <span>Login with Google</span>
                </a>
            </div>
        </div>
    </section>

	<!-- JavaScript -->
	<script>

		const forms = document.querySelector(".forms"),
			pwShowHide = document.querySelectorAll(".eye-icon"),
			links = document.querySelectorAll(".link");

		pwShowHide.forEach(eyeIcon => {
			eyeIcon.addEventListener("click", () => {
				let pwFields = eyeIcon.parentElement.parentElement.querySelectorAll(".password");

				pwFields.forEach(password => {
					if (password.type === "password") {
						password.type = "text";
						eyeIcon.classList.replace("bx-hide", "bx-show");
						return;
					}
					password.type = "password";
					eyeIcon.classList.replace("bx-show", "bx-hide");
				})

			})
		})

		links.forEach(link => {
			link.addEventListener("click", e => {
				e.preventDefault(); //preventing form submit
				forms.classList.toggle("show-signup");
			})
		})
	</script>
</body>

</html>