<?php include 'partials/head.php'; ?>
<?php include 'partials/nav.php'; ?>
<?php include 'partials/banner.php'; ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note['id'] ?>">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200  hover:bg-gray-100 ">
                            <h2 class="text-2xl font-bold"><?= $note['body'] ?></h2>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
            <p class="mt-6">
                <a href="/notes/create"
                   class="mt-6 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">New Note</a>
            </p>
        </div>

    </main>
<?php include 'partials/footer.php'; ?>