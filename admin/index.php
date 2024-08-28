<?php
    session_start();
    if (isset($_SESSION['admin'])) {
        header('location:home.php');
    }
?>
<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Voting System</title>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
        }
    </style>
</head>
<body class="font-mono">
    <!-- Container -->
    <div class="w-full h-screen flex">
        <!-- Image Column -->
        <img src="../images/next.jpg" alt="background" class="object-fit object-center h-screen w-7/12">
        <!-- Form Column -->
        <div class="bg-white flex flex-col justify-center items-center w-5/12 shadow-lg">
            <h1 class="text-5xl font-bold text-blue-400 mb-4">
				<span >
				VOTING SYSTEM</span>
			</h1>
			<h3 class="text-3xl font-bold text-blue-400 mb-4">
				<span >
				 ADMIN</span>
			</h3>
            <form class="w-4/5 max-w-sm" action="login.php" method="POST">
                <div class="mb-4">
                    <input
                        type="text"
                        name="username"
                        placeholder="Username"
                        autocomplete="off"
                        class="shadow-md border w-full h-18 px-3 py-5 text-blue-400 focus:outline-none focus:border-blue-500 mb-3 rounded"
                        required
                    />
                </div>
                <div class="mb-4">
                    <input
                        type="password"
                        name="password"
                        placeholder="Password"
                        autocomplete="off"
                        class="shadow-md border w-full h-18 px-3 py-5 text-blue-400 focus:outline-none focus:border-blue-500 mb-3 rounded"
                        required
                    />
                </div>
                <div class="mb-6 flex justify-center">
                    <button
                        class="bg-blue-400 hover:bg-blue-800 text-white px-6 py-5 rounded text-3xl focus:outline-none shadow font-bold items-center"
                        type="submit"
                        name="login"
                    >
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
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <?php include 'includes/scripts.php'; ?>
</body>
</html>
