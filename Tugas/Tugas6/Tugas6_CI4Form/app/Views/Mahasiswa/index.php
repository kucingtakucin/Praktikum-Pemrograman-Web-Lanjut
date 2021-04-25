<?= $this->extend('Templates/app') ?>\
<?= $this->section('title') ?> Mahasiswa <?= $this->endSection() ?>
<?= $this->section('content') ?>
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="container mx-auto">
    <h1 class="text-6xl my-6 text-gray-200">Data Mahasiswa</h1>
    <a href="<?= route_to('Mahasiswa.new') ?>" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Tambah Data</a>
    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>
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
                        <?php /** @var array $mahasiswa */
                        foreach($mahasiswa as $item): ?>
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
</div>
<?= $this->endSection() ?>
