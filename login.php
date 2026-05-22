<!DOCTYPE html>
<html>
<head>
    <title>Login Bimbel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

<div class="login-box">

    <h2 class="text-center mb-4">
        📚 BIMBEL NURSYAELAH
    </h2>

    <form method="post" action="proses_login.php">

        <input type="text"
        name="username"
        class="form-control mb-3"
        placeholder="Username"
        required>

        <input type="password"
        name="password"
        class="form-control mb-3"
        placeholder="Password"
        required>

        <button type="submit" class="btn btn-primary w-100">
            Login
        </button>

    </form>

</div>

</body>
</html>