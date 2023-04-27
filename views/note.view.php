<?php include 'partials/head.php'; ?>
<?php include 'partials/nav.php'; ?>
<?php include 'partials/banner.php'; ?>
    <main>
        <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold"><?= htmlspecialchars($note['body']) ?></h2>
                </div>
            </div>
            <a href="/notes">
                <h2 class="mt-6 text-2xl font-bold text-blue-500 hover:underline">Go Back</h2>
            </a>
        </div>
    </main>
<?php include 'partials/footer.php'; ?>