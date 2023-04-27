<?php include 'partials/head.php'; ?>
<?php include 'partials/nav.php'; ?>
<?php include 'partials/banner.php'; ?>
    <main>
        <form class="ml-6 mr-6" method="post">
            <div class="space-y-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="body"
                               class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                                    <textarea id="body" name="body" rows="3"
                                              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Save
                </button>
            </div>
        </form>

    </main>
<?php include 'partials/footer.php'; ?>