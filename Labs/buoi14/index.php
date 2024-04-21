<?php
require "connection.php";

// Lấy danh sách sản phẩm từ cơ sở dữ liệu
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="container mx-auto px-14">
        <div class="flex justify-between py-5">
            <h2 class="font-bold">Information just entered</h2>
            <a class="text-white hover:text-blue-800 bg-[#c0392b] py-1 px-1 rounded-sm"
                href="./CRUD_form/create_user.php">Create new</a>
        </div>
        <table border="1" class="table-auto">

            <tbody>
                <?php
        if ($result->rowCount() > 0) {
            echo '<div class="flex flex-col">';
            echo '  <div class="-m-1.5 overflow-x-auto">';
            echo '    <div class="p-1.5 min-w-full inline-block align-middle">';
            echo '      <div class="overflow-hidden">';
            echo '        <table class="min-w-full divide-y divide-gray-200">';
            echo '          <thead>';
            echo '            <tr>';
            echo '              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>';
            echo '              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Email Address</th>';
            echo '              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Phone</th>';
            echo '              <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Born</th>';
            echo '              <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>';
            echo '            </tr>';
            echo '          </thead>';
            echo '          <tbody>';
          
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
              echo '            <tr class="odd:bg-white even:bg-gray-100">';
              echo '              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">' . $row["name"] . '</td>';
              echo '              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">' . $row["email"] . '</td>';
              echo '              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">' . $row["phone"] . '</td>';
              echo '              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">' . $row["born"] . '</td>';
              echo '              <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">';
              
              echo '                <a href="./CRUD_form/update_user.php?id=' . $row["id"] . '" class="text-blue-600 hover:text-blue-800">Edit</a> |';
              echo '                <a href="./CRUD_form/delete_user.php?id=' . $row["id"] . '" class="text-red-600 hover:text-red-800">Delete</a>';
              echo '              </td>';
              echo '            </tr>';
            }
          
            echo '          </tbody>';
            echo '        </table>';
            echo '      </div>';
            echo '    </div>';
            echo '  </div>';
            echo '</div>';
          } else {
            echo "<tr><td colspan='5'>No user found</td></tr>";
          }
          
        ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<!-- <div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Name</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Email Address
                            </th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Phone</th>
                            <th scope="co   l" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">
                                Born</th>
                            <th scope="col" class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">
                                Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd:bg-white even:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">John Brown</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">45</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">New York No. 1 Lake Park</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">03032002</td>
                            <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                <button type="button"
                                    class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> -->