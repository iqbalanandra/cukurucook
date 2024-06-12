<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cukurucook - Add Recipe</title>
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
                    <li class="nav-item"><a class="block px-4 py-2 text-gray-700 nav-link hover:text-gray-900" href="contacts.php">Contacts</a></li>
                    <li class="nav-item"><a class="block px-4 py-2 text-gray-700 nav-link hover:text-gray-900" href="about.php">About Us</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Start main content -->
    <main class="container py-8 mx-auto">
        <section class="mb-8">
            <h1 class="mb-4 text-3xl font-semibold">Add Recipe</h1>
            <form action="save_recipe.php" method="POST" class="max-w-lg">
                <div class="mb-4">
                    <label class="block mb-2" for="name">Name</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" id="name" name="name" required>
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="description">Description</label>
                    <textarea class="w-full px-3 py-2 border rounded-md" id="description" name="description" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="bahan">Bahan</label>
                    <textarea class="w-full px-3 py-2 border rounded-md" id="bahan" name="bahan" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="langkah">Langkah</label>
                    <textarea class="w-full px-3 py-2 border rounded-md" id="langkah" name="langkah" rows="3" required></textarea>
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="kesulitan">Kesulitan</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" id="kesulitan" name="kesulitan">
                </div>
                <div class="mb-4">
                    <label class="block mb-2" for="image_url">Image URL</label>
                    <input class="w-full px-3 py-2 border rounded-md" type="text" id="image_url" name="image_url">
                </div>
                <button class="px-4 py-2 font-semibold text-white bg-blue-500 rounded-md hover:bg-blue-600" type="submit">Save Recipe</button>
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
