<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cukurucook</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <!-- Start header -->
    <header class="bg-white shadow">
        <nav class="container flex items-center justify-between p-4 mx-auto">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/logo3.png" alt="Hava" />
            </a>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="text-gray-600 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="items-center flex-grow hidden w-auto lg:flex">
                <ul class="flex flex-col ml-auto list-none lg:flex-row">
                    <li class="nav-item"><a class="block px-4 py-2 text-gray-700 nav-link hover:text-gray-900" href="../public/index.php">Home</a></li>
                    <li class="nav-item"><a class="block px-4 py-2 text-gray-700 nav-link hover:text-gray-900" href="contacs.php">Contacs</a></li>
                    <li class="nav-item"><a class="block px-4 py-2 text-gray-700 nav-link hover:text-gray-900" href="about.php">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

     <!-- Start main content -->
     <main class="container py-8 mx-auto">
        <section class="mb-8">
            <h1 class="mb-4 text-3xl font-semibold">Contact Us</h1>
            <p class="mb-4">Apakah Anda memiliki pertanyaan, saran, atau hanya ingin mengucapkan halo? Kami sangat ingin mendengarnya dari Anda. Isilah formulir di bawah ini untuk berhubungan dengan kami.</p>
            <form class="max-w-lg">
                <div class="mb-4">
                    <label class="block mb-2" for="name">Name</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" id="name" name="name" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="email">Email</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="email" id="email" name="email" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="message">Message</label>
                    <textarea class="w-full px-3 py-2 border rounded-md" id="message" name="message" rows="4" required></textarea>
                </div>
                <button class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600" type="submit">Send Message</button>
            </form>
        </section>
    </main>
    <!-- End main content -->

    <!-- Start footer -->
    <footer class="py-8 text-white bg-gray-800">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Cukurucook. All rights reserved.</p>
        </div>
    </footer>
    <!-- End footer -->
    </body>
</html>