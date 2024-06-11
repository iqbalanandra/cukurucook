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
                    <li class="nav-item active"><a class="block px-4 py-2 text-gray-700 nav-link hover:text-gray-900" href="about.php">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="py-6 bg-gradient-to-b from-red-500 to-red-700">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-white">About Us</h1>
        </div>
    </div>
    <!-- End All Pages -->

    <section class="mt-6 about" id="about">
        <div class="container mx-auto">
            <div class="mb-6 text-center">
                <h1 class="text-3xl font-bold">Welcome to Cukurucook</h1>
            </div>
            <div class="grid grid-cols-1 gap-6 md:grid-cols-3">
                <div class="text-justify md:col-span-2">
                    <p class="text-lg leading-relaxed text-gray-800">Cukurucook adalah situs website yang menyediakan berbagai resep makanan dan minuman khas nusantara. Mulai dari makanan ringan atau snack, minuman, sampai makanan berat. Selain itu, makanan yang kami berikan resepnya itu memenuhi gizi 4 sehat 5 sempurna.</p>
                    <p class="py-2 text-lg leading-relaxed text-gray-800">Kami Menyajikan langkah-langkah yang mudah dipahami dan praktis untuk membantu meringankan pekerjaan Anda di dapur. Cocok untuk pemula yang sedang belajar masak, maupun yang sudah mahir namun sering bingung mau masak apa.</p>
                    <a class="inline-block px-4 py-2 mt-4 text-white bg-red-500 rounded hover:bg-red-600" href="recipes.html">OUR RECIPE</a>
                </div>
                <div class="hidden md:block">
                    <img src="../images/about/thumbnail.jpg" alt="Thumbnail" class="rounded shadow-lg">
                </div>
            </div>
            <div class="pt-6 text-center">
                <p class="text-lg leading-relaxed text-gray-800">Sebagian besar informasi memasak dan resep yang kami berikan diperoleh dari berbagai sumber media cetak, elektronik dan internet. </p>
                <p class="text-lg leading-relaxed text-gray-800">Kami Memahami bahwa tidak semua resep sempurna, untuk itulah kritik dan saran membangun bisa disampaikan melalui email kami di <span class="font-bold">Cukurucook@gmail.com</span> demi menghadirkan informasi resep yang lebih akurat.</p>
                <p class="text-lg leading-relaxed text-gray-800">Semoga kumpulan aneka resep masakan yang kami sajikan bisa menginspirasi dan membantu para pembaca agar tidak lagi kebingungan ketika hendak menyajikan menu makanan untuk keluarga.</p>
                <p class="text-lg font-bold leading-relaxed text-gray-800">--Selamat Memasak--</p>
            </div>
        </div>
    </section>

    <!-- Start Contact info -->
    <div class="py-6 bg-gray-300">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 text-center md:grid-cols-3">
                <div class="p-4">
                    <i class="text-4xl text-red-500 fa fa-volume-control-phone"></i>
                    <div>
                        <h4 class="text-xl font-bold">Phone</h4>
                        <p class="text-lg">+62 838 6934 3333</p>
                    </div>
                </div>
                <div class="p-4">
                    <i class="text-4xl text-red-500 fa fa-envelope"></i>
                    <div>
                        <h4 class="text-xl font-bold">Email</h4>
                        <p class="text-lg">Cukurucook@gmail.com</p>
                    </div>
                </div>
                <div class="p-4">
                    <i class="text-4xl text-red-500 fa fa-map-marker"></i>
                    <div>
                        <h4 class="text-xl font-bold">Location</h4>
                        <p class="text-lg">Ilmu Komputer, Unila</p>
                    </div>
                </div>
            </div>
       
