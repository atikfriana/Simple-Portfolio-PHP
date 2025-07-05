<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <header class="bg-blue-800 text-white p-4 text-center">
        <h1>Admin Dashboard</h1>
    </header>

    <div class="container mx-auto p-4">
        <p class="text-xl mb-4">Selamat datang di Admin Dashboard!</p>

        <!-- Tabel Daftar User -->
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="px-4 py-2 border">Nama</th>
                        <th class="px-4 py-2 border">Email</th>
                        <th class="px-4 py-2 border">Role</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Contoh Data User -->
                    <tr class="border-b">
                        <td class="px-4 py-2">Atika</td>
                        <td class="px-4 py-2">Atikafit.arifiana@gmail.com</td>
                        <td class="px-4 py-2">Admin</td>
                        <td class="px-4 py-2">
                            <!-- Tombol Edit -->
                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a> | 
                            <!-- Tombol Hapus -->
                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                        </td>
                    </tr>
                    <tr class="border-b">
                        <td class="px-4 py-2">Fitrilia</td>
                        <td class="px-4 py-2">lia@gmail.com</td>
                        <td class="px-4 py-2">User</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-blue-600 hover:text-blue-800">Edit</a> | 
                            <a href="#" class="text-red-600 hover:text-red-800">Hapus</a>
                        </td>
                    </tr>
                    <!-- Data lebih banyak bisa ditambahkan di sini -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
