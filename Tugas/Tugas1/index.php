<?php require_once "autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Mahasiswa</title>
    <link rel="stylesheet" href="dist/app.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="js/script.js"></script>
</head>
<body>
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
    if (isset($_POST["submit"])) {
        $request = (object)$_POST;
        $db = new Database();
        if ($db->insert($request)): ?>
            <div id="mahasiswa" data-success="<?= $request->pesan ?>" data-nama="Data Mahasiswa"></div>
        <?php endif;
    } ?>
    <div class="container mx-auto px-6 py-32">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="lg:flex lg:items-center lg:justify-between">
            <div class="flex-1 min-w-0">
                <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
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
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Biodata mahasiswa
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nim" class="block text-sm font-medium text-gray-700">NIM</label>
                                        <input type="text" name="nim" id="nim" autocomplete="off"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                                        <input type="text" name="nama_lengkap" id="nama_lengkap" autocomplete="off"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                                        <input type="password" name="password" id="password" autocomplete="off"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" name="email" id="email" autocomplete="off"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">Tanggal Lahir</label>
                                        <input type="date" name="tanggal_lahir" id="tanggal_lahir"
                                               class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <span class="block text-sm font-medium text-gray-700">Jenis Kelamin</span>
                                        <div class="mt-1">
                                            <label for="jenis_kelamin" class="inline-flex items-center text-sm font-medium text-gray-700">
                                                <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                       class="form-radio" value="L">
                                                <span class="ml-2 mr-2">Laki-laki</span>
                                            </label>
                                            <label for="jenis_kelamin" class="inline-flex items-center text-sm font-medium text-gray-700">
                                                <input type="radio" id="jenis_kelamin" name="jenis_kelamin"
                                                       class="form-radio" value="P">
                                                <span class="ml-2">Perempuan</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="prodi" class="block text-sm font-medium text-gray-700">Program Studi</label>
                                        <select name="prodi" id="prodi" class="form-select focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            <option value="D3 Teknik Informatika">D3 Teknik Informatika</option>
                                            <option value="S1 Matematika">S1 Matematika</option>
                                            <option value="S1 Fisika">S1 Fisika</option>
                                            <option value="S1 Kimia">S1 Kimia</option>
                                            <option value="S1 Biologi">S1 Biologi</option>
                                            <option value="S1 Farmasi">S1 Farmasi</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <span class="block text-sm font-medium text-gray-700">Warga Negara</span>
                                        <div class="mt-2">
                                            <div>
                                                <label class="inline-flex items-center text-sm font-medium text-gray-700">
                                                    <input type="checkbox" class="form-checkbox" name="warga_negara" value="WNA">
                                                    <span class="ml-2">WNA</span>
                                                </label>
                                            </div>
                                            <div>
                                                <label class="inline-flex items-center text-sm font-medium text-gray-700">
                                                    <input type="checkbox" class="form-checkbox" name="warga_negara" value="WNI">
                                                    <span class="ml-2">WNI</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                        <input type="text" name="status" id="status" value="Aktif" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6">
                                        <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                                        <textarea name="keterangan" id="keterangan" autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
                                    </div>
                                    <input type="hidden" name="pesan" value="Berhasil Ditambahkan!">
                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
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