<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta charset="x-ua-compatible" content="IE-edge" />
    <title>login</title>
    <link rel="Stylesheet" type="text/css" href="login.css" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
</head>

<body>
    <div class="container">
        <center>
            <h2>JADWALKU</h2>
            <h1>LOGIN</h1>
        </center>

        <form method="POST" action="login_Proses_Admin">
        @csrf
            <label for="user-id" style="padding-top: 13px">&nbsp; ID</label><br />
            <input type="text" required name='userId'/><br />
            <div class="form-border"></div>

            <label for="user-password" style="padding-top: 13px">&nbsp; PASSWORD</label
				><br />
				<input type="password" required name='password'/><br />
                <div class="form-border"></div>

				<center>
                    <button type="submit">MASUK </button>
				</center>

				<center>
					<a href='login'>
						<legend type="login-user">login sebagai user</legend>
					</a>
				</center>
			</form>
		</div>
	</body>
</html>