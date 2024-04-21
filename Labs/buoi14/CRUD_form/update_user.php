<?php
require_once "../connection.php";

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Lấy thông tin của sản phẩm
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->rowCount() > 0) {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        $born = $row["born"];
        $password = $row["password"];
        $repassword = $row["repassword"];
        }
    } else {
        echo "User not found";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $born = $_POST['born'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $id = $_POST['id'];

    // Cập nhật thông tin sản phẩm
    $sql = "UPDATE users SET name='$name', email='$email', phone='$phone', born='$born', password='$password', repassword='$repassword' WHERE id=$id";

    if ($conn->exec($sql) == 1) {
        echo '<h2 class="text-[#2ecc71] font-bold">Record updated successfully!</h2>';
}else{
    echo '<h2 class="text-[#c0392b] font-bold">Record updated failed!</h2>';
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Update your
                infomation!</h2>
        </div>

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="update_user.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                    <div class="mt-2">
                        <input id="name" name="name" type="name" autocomplete="name" value="<?php echo $name; ?>"
                            required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email
                        address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" value="<?php echo $email; ?>"
                            required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <!-- Phone -->
                <div>
                    <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone</label>
                    <div class="mt-2">
                        <input id="phone" name="phone" type="phone" autocomplete="phone" value="<?php echo $phone; ?>"
                            required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <!-- Born -->
                <div>
                    <label for="born" class="block text-sm font-medium leading-6 text-gray-900">Born</label>
                    <div class="mt-2">
                        <input id="born" name="born" type="date" autocomplete="born" value="<?php echo $born; ?>"
                            required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <!-- Password -->
                <div>
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" value="<?php echo $password; ?>" required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <!-- Re-password -->
                <div>
                    <label for="repassword"
                        class="block text-sm font-medium leading-6 text-gray-900">Re-password</label>
                    <div class="mt-2">
                        <input id="repassword" name="repassword" type="password" value="<?php echo $repassword; ?>"
                            required
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div>
                    <button type="submit"
                        class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update
                        User</button>
                </div>
                <div>
                    <a href="../index.php"
                        class="flex w-full justify-center rounded-md bg-neutral-900 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-neutral-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Back
                        Home</a>
                </div>
            </form>

        </div>
    </div>


    <!-- <form action="update_product" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description"><?php echo $description; ?></textarea><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" value="<?php echo $price; ?>"><br><br>
        <input type="submit" value="Update Product">
    </form> -->
</body>

</html>