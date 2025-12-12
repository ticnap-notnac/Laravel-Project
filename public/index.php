<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products & Services | ShopVue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <?php
    $activePage = 'Index.php';
    include __DIR__ . '/partials/nav.php';
    ?>
    <main class="flex-1 pt-28 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto space-y-10">
            <header class="space-y-4">
                <p class="text-sm uppercase tracking-[0.4em] text-purple-300">Products & Services</p>
                <h1 class="text-4xl md:text-5xl font-bold text-white">Affordable Essentials for Every PUPian</h1>
                <p class="text-lg text-gray-300">We provide student-friendly products that are budget-friendly, practical, and perfect for everyday PUP life.</p>
            </header>

            <section class="bg-gradient-to-r from-purple-600/40 to-pink-600/40 border border-white/10 rounded-3xl p-8">
                <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                    <div>
                        <h3 class="text-xl font-semibold">Looking for something specific?</h3>
                        <p class="text-gray-200 mt-2">Message us if you want custom PUP merch, bulk orders, or items you want us to add to the shop!</p>
                    </div>
                    <div class="flex gap-4">
                        <a class="px-6 py-3 rounded-full bg-white text-slate-900 font-semibold" href="products-and-services.php">Shop Now</a>
                        <a class="px-6 py-3 rounded-full border border-white/40 hover:bg-white/10 transition" href="contact-us.php">Contact Us</a>
                    </div>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
