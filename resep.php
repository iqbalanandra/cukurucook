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
    <header class="top-navbar bg-white shadow">
        <nav class="container mx-auto flex items-center justify-between flex-wrap p-5">
            <a class="flex items-center flex-shrink-0 text-black mr-6" href="index.php">
                <img src="images/logo3.png" alt="Hava" class="h-10" />
            </a>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-black border-gray-400 hover:text-gray-800 hover:border-gray-800">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="public/index.php" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-800 mr-4">Home</a>
                    <a href="pages/recipes.php" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-800 mr-4">Recipes</a>
                    <a href="pages/about.php" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-800 mr-4">About Us</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Recipe Detail -->
    <section class="py-12">
        <div class="container mx-auto">
            <div class="text-center mb-10">
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
                <div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
                    <div class="text-center">
                        <img src="<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>" class="h-64 w-64 mx-auto mb-4 rounded-full object-cover">
                        <h2 class="text-2xl font-semibold mb-2 text-gray-700"><?php echo $row['name']; ?></h2>
                        <p class="text-gray-600 mb-4"><?php echo $row['kesulitan']; ?></p>
                    </div>
                    <div class="text-left">
                        <h3 class="text-xl font-semibold mb-2 text-gray-700">Deskripsi</h3>
                        <p class="text-gray-600 mb-6"><?php echo nl2br($row['description']); ?></p>
                        
                        <h3 class="text-xl font-semibold mb-2 text-gray-700">Bahan-bahan</h3>
                        <ul class="list-disc list-inside mb-6 text-gray-600">
                            <?php
                            $bahan = explode("\n", $row['bahan']);
                            foreach ($bahan as $ingredient) {
                                echo "<li>$ingredient</li>";
                            }
                            ?>
                        </ul>
                        
                        <h3 class="text-xl font-semibold mb-2 text-gray-700">Instruksi</h3>
                        <ul class="list-inside mb-6 text-gray-600">
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
