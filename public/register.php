<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../src/output.css">
</head>

<body class=" h-screen w-screen flex justify-center items-center font-poppins bg-orange-300">

    <div class="w-[430px] h-[601px] bg-white flex items-center flex-col justify-around relative rounded-lg drop-shadow-lg">
        <!-- Container Header -->
        <div class="w-auto h-auto flex flex-col items-center">
            <h1 class="text-black text-[24px] font-bold tracking-wide">
                Sign Up Your Account
            </h1>

            <img src="../image/logo.png" style="width:100px ; height: 100px" alt="CukuruCook Logo">
        </div>


        <!-- Container Form -->
        <div class="w-auto h-auto flex columns-2 items-center">
            <form action="../controller/daftarin.php" method="post" class="gap-3">
                <!-- Email -->
                <div class="relative w-72 mb-4 flex items-center">
                    <span class="i-email absolute text-gray-400"></span>
                    <input class="w-full pl-10 pr-4 py-2 rounded bg-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" type="email" name="email" placeholder="E-mail">
                </div>
                <!-- Username -->
                <div class="relative w-72 mb-4 flex items-center">
                    <i class="i-user absolute  text-gray-400"></i>
                    <input class="w-full pl-10 pr-4 py-2 rounded bg-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" type="username" name="username" placeholder="Username">
                </div>
                <!-- Password -->
                <div class="relative w-72 mb-4 flex items-center">
                    <span class="i-lock absolute text-gray-400"></span>
                    <input class="w-full pl-10 pr-4 py-2 rounded bg-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500" type="password" name="password" placeholder="Password">
                </div>
                <button type="submit" class="text-white font-semibold w-72 relative bg-red-500 pl-10 pr-4 py-2 rounded">
                    Register
                </button>
            </form>

        </div>
        <!-- Container Footer -->
        <h1 class="text-sm">Have an account? <a class="text-blue-500" href="register.php">Login Here</a></h1>

    </div>

</body>

</html>