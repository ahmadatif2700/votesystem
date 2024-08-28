<?php
    session_start();
    if (isset($_SESSION['admin'])) {
        header('location: admin/home.php');
    }

    if (isset($_SESSION['voter'])) {
        header('location: home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voting System Login</title>
    <!-- Tailwind CSS CDN -->
	<script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="flex h-screen">
    <!-- Background Image -->
    <img src="./images/next.jpg" alt="background" class="object-fit object-center h-full w-7/12 hidden lg:block">
    
    <!-- Login Box -->
    <div class="flex flex-col justify-center items-center w-full lg:w-5/12 bg-white shadow-lg p-8">
        <div class="text-center mb-6">
            <h1 class="text-4xl font-bold text-blue-400">Online Voting System</h1>
        <h3 class="text-2xl text-blue-400">Sign in to start your session</h3></div>
        <form action="login.php" method="POST" class="w-full max-w-sm">
            <div class="mb-4">
                <input type="text" name="voter" placeholder="Voter's ID" required
                    class="w-full h-18 px-2 py-4 border rounded shadow-sm text-blue-400 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Password" required
                    class="w-full px-2 py-4 border rounded shadow-sm text-blue-400 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-6 flex justify-center items-center">
            <button type="submit" name="login"
                class="bg-blue-400 hover:bg-blue-800 text-white px-3 py-3 rounded text-2xl focus:outline-none shadow font-bold justify-center items-center">
                <i class="fa fa-sign-in-alt"></i> Sign In
            </button>
</div>
            <?php
                if (isset($_SESSION['error'])) {
                    echo "
                        <div class='mt-4 p-3 text-center text-red-700 bg-red-100 border border-red-400 rounded'>
                            <p>" . $_SESSION['error'] . "</p>
                        </div>
                    ";
                    unset($_SESSION['error']);
                }
            ?>
        </form>
    </div>
</body>
</html>
