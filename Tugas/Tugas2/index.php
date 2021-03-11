<?php require_once "autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Mahasiswa</title>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css">
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/script.js"></script>
</head>
<body class="bg-gray-900">
    <!--
      This example requires Tailwind CSS v2.0+

      This example requires some changes to your config:

      ```
      // tailwind.config.js
      module.exports = {
        // ...
        plugins: [
          // ...
          require('@tailwindcss/forms'),
        ]
      }
      ```
    -->
    <?php
    // Copyright 2021. Adam Arthur Faizal. All Rights Reserved
    $form = new Form();
    $db = new Database();
    if (isset($_POST["submit"])) {
        $request = (object)$_POST;
        if ($db->insert($request)): ?>
            <div id="mahasiswa" data-success="<?= $request->pesan ?>" data-nama="Data Mahasiswa"></div>
        <?php endif;
    } ?>
    <div class="container mx-auto px-6 py-32">
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-200 sm:text-3xl sm:truncate">
                    Daftar Mahasiswa
                </h2>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                        NIM
                                    </th>
                                    <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                        Nama Lengkap
                                    </th>
                                    <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                        Email
                                    </th>
                                    <th scope="col" class="px-6 py-1 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                                        Prodi
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200">
                            <?php foreach($db->fetchAll() as $item): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-100"><?= $item->nim ?></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-100"><?= $item->nama_lengkap ?></div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-100">
                                        <?= $item->email ?>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-100">
                                        <?= $item->prodi ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            <!-- More items... -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="lg:flex lg:items-center lg:justify-between mt-10">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-200 sm:text-3xl sm:truncate">
                    Formulir Mahasiswa
                </h2>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-100">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-400">
                            Biodata mahasiswa
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-gray-800 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <?php $form->input('NIM', 'nim', 'nim') ?>
                                    <?php $form->input('Nama Lengkap', 'nama_lengkap', 'nama_lengkap') ?>
                                    <?php $form->password('Password', 'password', 'password') ?>
                                    <?php $form->input('Email', 'email', 'email') ?>
                                    <?php $form->date('Tanggal Lahir', 'tanggal_lahir', 'tanggal_lahir') ?>
                                    <?php $form->select('Jenis Kelamin', 'jenis_kelamin', 'jenis_kelamin', ['L' => 'Laki-laki', 'P' => 'Perempuan']) ?>
                                    <?php $form->select('Prodi', 'prodi', 'prodi', [
                                            'D3 Teknik Informatika' => 'D3 Teknik Informatika',
                                            'S1 Matematika' => 'S1 Matematika',
                                            'S1 Fisika' => 'S1 Fisika',
                                            'S1 Kimia' => 'S1 Kimia',
                                            'S1 Biologi' => 'S1 Biologi'
                                    ]) ?>
                                    <?php $form->radio('Warga Negara', 'warga_negara', 'warga_negara', ['WNA', 'WNI']) ?>
                                    <?php $form->input('Status', 'status', 'status', 'Aktif') ?>
                                    <?php $form->textArea('Keterangan', 'keterangan', 'keterangan'); ?>
                                    <input type="hidden" name="pesan" value="Berhasil Ditambahkan!">
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
                                <button type="submit" name="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

    </div>
</body>
</html>