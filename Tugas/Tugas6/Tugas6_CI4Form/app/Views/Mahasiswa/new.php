<?= $this->extend('Templates/app') ?>
<?= $this->section('content') ?>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto">

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
                <?= form_open(route_to('Mahasiswa.create')) ?>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-gray-800 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('NIM', 'nim', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'text', 'name' => 'nim', 'id' => 'nim' , 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Nama Lengkap', 'nama_lengkap', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'text', 'name' => 'nama_lengkap', 'id' => 'nama_lengkap' , 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Password', 'password', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_password(['name' => 'password', 'id' => 'password' , 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Email', 'email', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'email', 'name' => 'email', 'id' => 'email' , 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Tanggal Lahir', 'tanggal_lahir', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'date', 'name' => 'tanggal_lahir', 'id' => 'email' , 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <span class="block text-sm font-medium text-gray-400">Jenis Kelamin</span>
                                    <div class="mt-1">
                                        <label for="jenis_kelamin" class="inline-flex items-center text-sm font-medium text-gray-400">
                                            <?= form_radio(['type' => 'radio', 'id' => 'jenis_kelamin', 'name' => 'jenis_kelamin', 'class' => 'form-radio', 'value' => 'L']) ?>
                                            <span class="ml-2 mr-2">Laki-laki</span>
                                        </label>
                                        <label for="jenis_kelamin" class="inline-flex items-center text-sm font-medium text-gray-400">
                                            <?= form_radio(['type' => 'radio', 'id' => 'jenis_kelamin', 'name' => 'jenis_kelamin', 'class' => 'form-radio', 'value' => 'P']) ?>
                                            <span class="ml-2">Perempuan</span>
                                        </label>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <?= form_label('Program Studi', 'program_studi', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?php
                                        $prodi = [
                                                '' => '',
                                                'D3 Teknik Informatika' => 'D3 Teknik Informatika',
                                                'S1 Matematika' => 'S1 Matematika',
                                                'S1 Fisika' => 'S1 Fisika',
                                                'S1 Biologi' => 'S1 Biologi',
                                                'S1 Farmasi' => 'S1 Farmasi',
                                        ]
                                    ?>
                                    <?= form_dropdown(['name' => 'prodi', 'id' => 'prodi', 'class' => 'mt-1 form-select focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'], $prodi) ?>
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <span class="block text-sm font-medium text-gray-400">Warga Negara</span>
                                    <div class="mt-2">
                                        <div>
                                            <label class="inline-flex items-center text-sm font-medium text-gray-400">
                                                <?= form_checkbox(['class' => 'form-checkbox', 'name' => 'warga_negara', 'value' => 'WNA']) ?>
                                                <span class="ml-2">WNA</span>
                                            </label>
                                        </div>
                                        <div>
                                            <label class="inline-flex items-center text-sm font-medium text-gray-400">
                                                <?= form_checkbox(['class' => 'form-checkbox', 'name' => 'warga_negara', 'value' => 'WNI']) ?>
                                                <span class="ml-2">WNI</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-4">
                                    <?= form_label('Status', 'status', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_input(['type' => 'text', 'name' => 'status', 'id' => 'status' , 'value' => 'Aktif', 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md']) ?>
                                </div>

                                <div class="col-span-6">
                                    <?= form_label('Keterangan', 'keterangan', ['class' => 'block text-sm font-medium text-gray-400']) ?>
                                    <?= form_textarea(['name' => 'keterangan', 'id' => 'keterangan', 'autocomplete' => 'off', 'class' => 'mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md'])?>
                                </div>
                                <?= form_hidden('pesan', 'Berhasil Ditambahkan!') ?>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-800 text-right sm:px-6">
                            <a href="<?= route_to('Mahasiswa.index') ?>" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Kembali
                            </a>
                            <?= form_button(['type' => 'submit', 'name' => 'submit', 'content' => 'Submit', 'class' => 'inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500']) ?>
                        </div>
                    </div>
                <?= form_close() ?>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
