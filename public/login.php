<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cukurucook</title>
    <link rel="stylesheet" href="../src/output.css">
</head>

<body class=" h-screen w-screen flex justify-center items-center font-poppins bg-white">

    <div class="w-[420px] h-[601px] bg-gray-800 flex items-center flex-col justify-around relative rounded-lg shadow-lg">
        <!-- Container Header -->
        <div class="w-auto h-auto flex flex-col items-center">
            <h1 class="text-white text-[24px] font-bold tracking-wide">
                WELCOME
            </h1>

            <img src="../image/logo.png" style="width:100px ; height: 100px" alt="CukuruCook Logo">
        </div>


        <!-- Container Form -->
        <div class="w-auto h-auto flex flex-col items-center">
            <form action="../controller/cek_login.php" method="post">
                <div class="relative w-72 mb-4 flex items-center">
                    <i class="i-user absolute  text-gray-400"></i>
                    <input class="w-full pl-10 pr-4 py-2 rounded bg-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" type="username" name="username" placeholder="Username">
                </div>

                <div class="relative w-72 mb-4 flex items-center">
                    <span class="i-lock absolute text-gray-400"></span>
                    <input class="w-full pl-10 pr-4 py-2 rounded bg-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" placeholder="Password">
                </div>

                <button type="submit" class="w-72 relative bg-red-500 pl-15 pr-4 py-2 rounded font-semibold text-white">
                    Login
                </button>
            </form>

        </div>
        <!-- Container Footer -->
        <h1 class="text-sm text-gray-400">Dont have an account? <a class="text-blue-500" href="register.php">Register Here</a></h1>

    </div>

</body>

</html>