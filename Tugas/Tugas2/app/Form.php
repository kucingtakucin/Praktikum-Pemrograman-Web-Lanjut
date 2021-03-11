<?php

class Form {

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     * @param string $value
     * @return void
     */
    public function input(string $label, string $name, string $id, string $value = ''): void
    { ?>
        <div class="col-span-6 sm:col-span-3">
            <label for="<?= $id ?>" class="block text-sm font-medium text-gray-300"><?= $label?></label>
            <input type="text" name="<?= $name ?>" id="<?= $id ?>" autocomplete="off" value="<?= $value ?>" required
                   class="px-2 py-1 mt-1 focus:ring-indigo-500 form-input focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    <?php }

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     * @return void
     */
    public function password(string $label, string $name, string $id): void
    { ?>
        <div class="col-span-6 sm:col-span-3">
            <label for="<?= $id ?>" class="block text-sm font-medium text-gray-300"><?= $label?></label>
            <input type="password" name="<?= $name ?>" id="<?= $id ?>" autocomplete="off" required
                   class="px-2 py-1 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    <?php }

    public function date(string $label, string $name, string $id): void
    { ?>
        <div class="col-span-6 sm:col-span-3">
            <label for="<?= $id ?>" class="block text-sm font-medium text-gray-300"><?= $label?></label>
            <input type="date" name="<?= $name ?>" id="<?= $id ?>" autocomplete="off" required
                   class="px-2 py-1 mt-1 focus:ring-indigo-500 form-input focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>
    <?php }

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     * @param array $pilihan
     * @return void
     */
    public function radio(string $label, string $name, string $id, array $pilihan): void
    { ?>
        <div class="col-span-6 sm:col-span-3">
            <span class="block text-sm font-medium text-gray-300"><?= $label ?></span>
            <div class="mt-1">
                <?php foreach($pilihan as $key => $value): ?>
                    <label for="<?= $id ?>" class="inline-flex items-center text-sm font-medium text-gray-700">
                        <input type="radio" id="<?= $id ?>" name="<?= $name ?>"
                               class="form-radio" value="<?= $key ?>">
                        <span class="ml-2 mr-2"><?= $value ?></span>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>
    <?php }

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     * @param array $pilihan
     * @return void
     */
    public function select(string $label, string $name, string $id, array $pilihan): void
    { ?>
        <div class="col-span-6 sm:col-span-3">
            <label for="<?= $id ?>" class="block text-sm font-medium text-gray-300"><?= $label ?></label>
            <select name="<?= $name ?>" id="<?= $id ?>" required class="px-2 py-1  form-select focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                <option>
                </option>
                <?php foreach($pilihan as $key => $value): ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php endforeach; ?>
            </select>
        </div>
    <?php }

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     * @param array $pilihan
     * @return void
     */
    public function checkBox(string $label, string $name, string $id, array $pilihan): void
    { ?>
        <div class="col-span-6 sm:col-span-3">
            <span class="block text-sm font-medium text-gray-300"><?= $label ?></span>
            <div class="mt-2">
                <?php foreach($pilihan as $item): ?>
                    <div>
                        <label class="inline-flex items-center text-sm font-medium text-gray-700">
                            <input type="checkbox" class="form-checkbox" name="<?= $name ?>" value="<?= $item ?>">
                            <span class="ml-2"><?= $item ?></span>
                        </label>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php }

    /**
     * @param string $label
     * @param string $name
     * @param string $id
     * @return void
     */
    public function textArea(string $label, string $name, string $id): void
    { ?>
        <div class="col-span-6">
            <label for="<?= $id ?>" class="block text-sm font-medium text-gray-300"><?= $label ?></label>
            <textarea name="<?= $name ?>" id="<?= $id ?>" required autocomplete="off" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"></textarea>
        </div>
    <?php }
}