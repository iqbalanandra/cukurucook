<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Resep Detail</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Tailwind CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="src/output.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
</head>

<body class="bg-gray-100">
    <!-- Start header -->
    <header class="bg-white shadow top-navbar">
        <nav class="container flex flex-wrap items-center justify-between p-5 mx-auto">
            <a class="flex items-center flex-shrink-0 mr-6 text-black" href="index.php">
                <img src="images/logo3.png" alt="Hava" class="h-10" />
            </a>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 text-black border border-gray-400 rounded hover:text-gray-800 hover:border-gray-800">
                    <svg class="w-3 h-3 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
                </button>
            </div>
            <div class="flex-grow block w-full lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="public/index.php" class="block mt-4 mr-4 text-black lg:inline-block lg:mt-0 hover:text-gray-800">Home</a>
                    <a href="pages/recipes.php" class="block mt-4 mr-4 text-black lg:inline-block lg:mt-0 hover:text-gray-800">Recipes</a>
                    <a href="pages/about.php" class="block mt-4 mr-4 text-black lg:inline-block lg:mt-0 hover:text-gray-800">About Us</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Recipe Detail -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="mb-10 text-center">
                <h1 class="text-4xl font-semibold text-gray-800">Detail Resep</h1>
            </div>

            <?php
            include 'controller/koneksi.php';


            // Fetch recipe details from database
            $recipe_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
            $sql = "SELECT name, kesulitan, image_url, description, bahan, langkah FROM resep WHERE id = $recipe_id";
            $result = $koneksi->query($sql);

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                ?>
                <div class="relative max-w-4xl p-6 mx-auto bg-white rounded-lg shadow">
                    <!-- Tombol Kembali -->
                    <button onclick="window.history.back();" class="absolute top-0 left-0 z-10 px-4 py-2 text-white bg-gray-800 rounded hover:bg-gray-700">Kembali</button>
                    <!-- Isi Detail Resep -->
                    <div class="text-center">
                        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>" class="object-cover w-64 h-64 mx-auto mb-4 rounded-full">
                        <h2 class="mb-2 text-2xl font-semibold text-gray-700"><?php echo $row['name']; ?></h2>
                        <p class="mb-4 text-gray-600"><?php echo $row['kesulitan']; ?></p>
                    </div>
                    <div class="text-left">
                        <h3 class="mb-2 text-xl font-semibold text-gray-700">Deskripsi</h3>
                        <p class="mb-6 text-gray-600"><?php echo nl2br($row['description']); ?></p>
                        
                        <h3 class="mb-2 text-xl font-semibold text-gray-700">Bahan-bahan</h3>
                        <ul class="mb-6 text-gray-600 list-disc list-inside">
                            <?php
                            $bahan = explode("\n", $row['bahan']);
                            foreach ($bahan as $ingredient) {
                                echo "<li>$ingredient</li>";
                            }
                            ?>
                        </ul>
                        
                        <h3 class="mb-2 text-xl font-semibold text-gray-700">Instruksi</h3>
                        <ul class="mb-6 text-gray-600 list-inside">
                            <?php
                            $langkah = explode("\n", $row['langkah']);
                            foreach ($langkah as $instruction) {
                                echo "<ul> $instruction </ul>";
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
            } else {
                echo "<div class='text-center text-gray-600'>Resep tidak ditemukan.</div>";
            }

            // Close connection
            $koneksi->close();
            ?>
        </div>
    </section>
    <!-- End Recipe Detail -->
</body>

</html>
