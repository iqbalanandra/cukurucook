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
        <nav class="container mx-auto flex justify-between items-center p-4">
            <a class="navbar-brand" href="../index.html">
                <img src="../images/logo3.png" alt="Hava" />
            </a>
            <div class="block lg:hidden">
                <button id="nav-toggle" class="text-gray-600 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
            <div class="hidden lg:flex flex-grow items-center w-auto">
                <ul class="flex flex-col lg:flex-row list-none ml-auto">
                    <li class="nav-item"><a class="nav-link px-4 py-2 block text-gray-700 hover:text-gray-900" href="../public/index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link px-4 py-2 block text-gray-700 hover:text-gray-900" href="../recipes.php">Recipes</a></li>
                    <li class="nav-item active"><a class="nav-link px-4 py-2 block text-gray-700 hover:text-gray-900" href="about.html">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="bg-gradient-to-b from-red-500 to-red-700 py-6">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-white">About Us</h1>
        </div>
    </div>
    <!-- End All Pages -->

    <section class="about mt-6" id="about">
        <div class="container mx-auto">
            <div class="text-center mb-6">
                <h1 class="text-3xl font-bold">Welcome to Cukurucook</h1>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="md:col-span-2 text-justify">
                    <p class="text-lg text-gray-800 leading-relaxed">Cukurucook adalah situs website yang menyediakan berbagai resep makanan dan minuman khas nusantara. Mulai dari makanan ringan atau snack, minuman, sampai makanan berat. Selain itu, makanan yang kami berikan resepnya itu memenuhi gizi 4 sehat 5 sempurna.</p>
                    <p class="py-2 text-lg text-gray-800 leading-relaxed">Kami Menyajikan langkah-langkah yang mudah dipahami dan praktis untuk membantu meringankan pekerjaan Anda di dapur. Cocok untuk pemula yang sedang belajar masak, maupun yang sudah mahir namun sering bingung mau masak apa.</p>
                    <a class="bg-red-500 text-white py-2 px-4 rounded inline-block mt-4 hover:bg-red-600" href="recipes.html">OUR RECIPE</a>
                </div>
                <div class="hidden md:block">
                    <img src="../images/about/thumbnail.jpg" alt="Thumbnail" class="rounded shadow-lg">
                </div>
            </div>
            <div class="text-center pt-6">
                <p class="text-lg text-gray-800 leading-relaxed">Sebagian besar informasi memasak dan resep yang kami berikan diperoleh dari berbagai sumber media cetak, elektronik dan internet. </p>
                <p class="text-lg text-gray-800 leading-relaxed">Kami Memahami bahwa tidak semua resep sempurna, untuk itulah kritik dan saran membangun bisa disampaikan melalui email kami di <span class="font-bold">Cukurucook@gmail.com</span> demi menghadirkan informasi resep yang lebih akurat.</p>
                <p class="text-lg text-gray-800 leading-relaxed">Semoga kumpulan aneka resep masakan yang kami sajikan bisa menginspirasi dan membantu para pembaca agar tidak lagi kebingungan ketika hendak menyajikan menu makanan untuk keluarga.</p>
                <p class="text-lg text-gray-800 leading-relaxed font-bold">--Selamat Memasak--</p>
            </div>
        </div>
    </section>

    <!-- Start Contact info -->
    <div class="bg-gray-300 py-6">
        <div class="container mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 text-center">
                <div class="p-4">
                    <i class="fa fa-volume-control-phone text-4xl text-red-500"></i>
                    <div>
                        <h4 class="text-xl font-bold">Phone</h4>
                        <p class="text-lg">+62 838 6934 3333</p>
                    </div>
                </div>
                <div class="p-4">
                    <i class="fa fa-envelope text-4xl text-red-500"></i>
                    <div>
                        <h4 class="text-xl font-bold">Email</h4>
                        <p class="text-lg">Cukurucook@gmail.com</p>
                    </div>
                </div>
                <div class="p-4">
                    <i class="fa fa-map-marker text-4xl text-red-500"></i>
                    <div>
                        <h4 class="text-xl font-bold">Location</h4>
                        <p class="text-lg">Ilmu Komputer, Unila</p>
                    </div>
                </div>
            </div>
       
