<?php include 'partials/head.php'; ?>
<?php include 'partials/nav.php'; ?>
<?php include 'partials/banner.php'; ?>
    <main>
        <div class="py-6 sm:px-6 lg:px-8">
            <p class="mb-6">
                <a href="/notes/create"
                   class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">New Note</a>
            </p>
            <?php foreach ($notes as $note) : ?>
                <a href="/note?id=<?= $note['id'] ?>">
                    <div class=" w-1/2 mb-1 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200  hover:bg-gray-100 ">
                            <h2 class="text-2xl font-bold"><?= htmlspecialchars($note['body']) ?></h2>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>

    </main>
<?php include 'partials/footer.php'; ?>