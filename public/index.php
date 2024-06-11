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
    <title>Cukurucook</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Tailwind CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../src/output.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
</head>

<body class="bg-gray-100">
    <!-- Start header -->
    <header class="top-navbar bg-white shadow">
        <nav class="container mx-auto flex items-center justify-between flex-wrap p-5">
            <a class="flex items-center flex-shrink-0 text-black mr-6" href="index.php">
                <img src="../images/logo3.png" alt="Hava" class="h-10" />
            </a>
            <div class="block lg:hidden">
                <button class="flex items-center px-3 py-2 border rounded text-black border-gray-400 hover:text-gray-800 hover:border-gray-800">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
                </button>
            </div>
            <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div class="text-sm lg:flex-grow">
                    <a href="public/index.php" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-800 mr-4">Home</a>
                    <a href="../pages/recipes.php" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-800 mr-4">Recipes</a>
                    <a href="../pages/about.php" class="block mt-4 lg:inline-block lg:mt-0 text-black hover:text-gray-800 mr-4">About Us</a>
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start About -->
    <section id="service" class="py-12">
        <div class="container mx-auto">
            <div class="text-center mb-10">
                <h1 class="text-4xl font-semibold text-gray-800">Welcome <?php echo htmlspecialchars($_SESSION['username'])?>, to our service</h1>
            </div>
            <div class="flex flex-wrap -mx-4">
                <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                    <div class="text-center bg-white rounded-lg shadow p-6">
                        <img src="../images/service/recipes.png" alt="Recipes" class="mx-auto mb-4" />
                        <h3 class="text-xl font-semibold mb-3 text-gray-700">Resep disusun dengan baik</h3>
                        <p class="text-justify text-gray-600" style="text-indent: 20px;">Di Website ini semua resep makanan disusun dengan baik dan rapi layaknya buku panduan. Selain itu bahasa yang digunakan mudah dimengerti dan mudah dipahami ketika memasak menggunakan resep pada website ini.</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4 mb-8 md:mb-0">
                    <div class="text-center bg-white rounded-lg shadow p-6">
                        <img src="../images/service/food.png" alt="Food" class="mx-auto mb-4" />
                        <h3 class="text-xl font-semibold mb-3 text-gray-700">Makanan Sehat</h3>
                        <p class="text-justify text-gray-600" style="text-indent: 20px;">Semua Resep makanan yang disajikan pada website ini adalah makanan sehat yang mengaju pada pedoman "4 sehat 5 sempurna" sehingga menjaga kebugaran tubuh anda dan membuat anda dapat menerapkan hidup sehat</p>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-4">
                    <div class="text-center bg-white rounded-lg shadow p-6">
                        <img src="../images/service/kokky.png" alt="Kokky" class="mx-auto mb-4">
                        <h3 class="text-xl font-semibold mb-3 text-gray-700">Resep dari Koki handal</h3>
                        <p class="text-justify text-gray-600" style="text-indent: 20px;">Resep masakan pada website ini dibuat oleh Koki handal dan berpengalaman dalam membuat makanan sehingga pastinya jika anda membuat makanan mengikuti resep pada website ini dijamin terasa enak</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About -->

    <!-- Start QT -->
    <div class="bg-gray-800 py-10">
        <div class="container mx-auto text-center text-white">
            <p class="text-xl mb-2 font-light italic">" If you're not the one cooking, stay out of the way and compliment the chef. "</p>
            <span class="text-lg">Michael Strahan</span>
        </div>
    </div>
    <!-- End QT -->

    <!-- Start Menu -->
    <div class="container mx-auto py-12">
        <div class="text-center mb-10">
            <h2 class="text-4xl font-semibold text-gray-800">Resep Makanan Kami</h2>
            <p class="text-gray-600">Di Bawah adalah jenis-jenis makanan yang dapat kalian baca Resepnya</p>
        </div>

        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/4 px-4 mb-8 md:mb-0">
                <div class="bg-red-400 rounded-lg shadow p-6 text-center">
                    <a href="#v-pills-home" class="text-white hover:text-gray-200">All Menu</a>
                </div>
            </div>
            <div class="w-full md:w-3/4 px-4">
                <div class="flex flex-wrap -mx-4">
                    <!-- Menampilkan resep dari database -->
                    <?php
                    include '../controller/koneksi.php';
                    // Check connection
                    if ($koneksi->connect_error) {
                        die("Connection failed: " . $koneksi->connect_error);
                    }

                    // Fetch recipes from database
                    $sql = "SELECT id, name, kesulitan, image_url FROM resep"; // Pastikan kolom 'id' juga diambil dari database
                    $result = $koneksi->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            ?>
                            <div class="w-full sm:w-1/2 md:w-1/3 px-4 mb-8">
                                <div class="menu-item bg-white rounded-lg shadow p-6 text-center">
                                    <a href="../resep.php?id=<?php echo $row['id']; ?>">
                                        <img src="../<?php echo $row['image_url']; ?>" alt="<?php echo $row['name']; ?>" class="h-24 w-24 mx-auto mb-4 rounded-full object-cover">
                                        <h4 class="text-xl font-semibold mb-2 text-gray-700"><?php echo $row['name']; ?></h4>
                                        <p class="text-gray-600"><?php echo $row['kesulitan']; ?></p>
                                    </a>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        echo "<div class='text-center text-gray-600'>Tidak ada resep yang ditemukan.</div>";
                    }

                    // Close connection
                    $koneksi->close();
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu -->
</body>

</html>
