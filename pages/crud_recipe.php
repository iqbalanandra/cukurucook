<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cukurucook - Recipe CRUD</title>
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
            <h1 class="mb-4 text-3xl font-semibold">Recipe Management</h1>
            <div class="flex justify-between mb-4">
                <h2 class="text-2xl font-semibold">Recipes</h2>
                <a href="add_recipe.php" class="px-4 py-2 font-semibold text-white bg-green-500 rounded-md hover:bg-green-600">Add New Recipe</a>
            </div>
            
            <!-- Recipes Table -->
            <div class="overflow-x-auto bg-white rounded-lg shadow-md">
                <table class="min-w-full bg-white">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Description</th>
                            <th class="px-4 py-2">Bahan</th>
                            <th class="px-4 py-2">Langkah</th>
                            <th class="px-4 py-2">Kesulitan</th>
                            <th class="px-4 py-2">Image URL</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../controller/koneksi.php';

                        // Fetch recipes from database
                        $sql = "SELECT * FROM resep";
                        $result = $koneksi->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td class='px-4 py-2'>" . $row['id'] . "</td>";
                                echo "<td class='px-4 py-2'>" . $row['name'] . "</td>";
                                echo "<td class='px-4 py-2'>" . $row['description'] . "</td>";
                                echo "<td class='px-4 py-2'>" . $row['bahan'] . "</td>";
                                echo "<td class='px-4 py-2'>" . $row['langkah'] . "</td>";
                                echo "<td class='px-4 py-2'>" . $row['kesulitan'] . "</td>";
                                echo "<td class='px-4 py-2'>" . $row['image_url'] . "</td>";
                                echo "<td class='px-4 py-2'>";
                                echo "<a href='edit_recipe.php?id=" . $row['id'] . "' class='px-2 py-1 mr-2 text-white bg-blue-500 rounded-md hover:bg-blue-600'>Edit</a>";
                                echo "<a href='delete_recipe.php?id=" . $row['id'] . "' class='px-2 py-1 text-white bg-red-500 rounded-md hover:bg-red-600' onclick='return confirm(\"Are you sure you want to delete this recipe?\")'>Delete</a>";
                                echo "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='8' class='px-4 py-2'>No recipes found</td></tr>";
                        }

                        $koneksi->close();
                        ?>
                    </tbody>
                </table>
            </div>
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
