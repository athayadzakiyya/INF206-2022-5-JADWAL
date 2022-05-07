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
            <h2>JADWAL</h2>
            <h1>LOGIN</h1>
        </center>

        <form method="GET" action="jadwal_tenaga_medis_admin">
            <label for="user-id" style="padding-top: 13px">&nbsp; ID</label><br />
            <input type="text" required /><br />

            <label for="user-password" style="padding-top: 13px">&nbsp; PASSWORD</label
				><br />
				<input type="password" required /><br />

				<center>
					<a href="jadwal_tenaga_medis_admin" target="_self"><button>MASUK</button></a>
				</center>

				<center>
					<a href='login'>
						<legend type="login-admin">login sebagai user</legend>
					</a>
				</center>
			</form>
		</div>
	</body>
</html>