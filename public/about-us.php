<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | ShopVue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <?php
    $activePage = 'about-us.php';
    include __DIR__ . '/partials/nav.php';
    ?>
    <main class="flex-1 pt-28 px-4 sm:px-6 lg:px-8">
        <div class="max-w-5xl mx-auto space-y-10">
            <header class="space-y-4">
                <p class="text-sm uppercase tracking-[0.4em] text-purple-300">About Us</p>
                <h1 class="text-4xl md:text-5xl font-bold text-white">Built for PUPians, by PUPians</h1>
                <p class="text-lg text-gray-300">We are PUP students dedicated to providing affordable, practical, and meaningful products for our fellow Iskolar ng Bayan.</p>
            </header>

            <section class="grid md:grid-cols-3 gap-6">
                <article class="bg-white/5 border border-white/10 rounded-3xl p-6 space-y-3">
                    <h2 class="text-xl font-semibold">Vision</h2>
                    <p class="text-gray-300 text-sm">To empower every PUPian by providing accessible, affordable, and student-centered products that support their academic journey, celebrate their identity, and strengthen the spirit of the PUP community.</p>
                </article>
                <article class="bg-white/5 border border-white/10 rounded-3xl p-6 space-y-3">
                    <h2 class="text-xl font-semibold">Process</h2>
                    <p class="text-gray-300 text-sm">We focus on understanding PUP students’ needs and offering high-quality, affordable products that reflect their culture and lifestyle. Through a simple ordering process, fast delivery, and community-centered service, we ensure a convenient and supportive shopping experience for every PUPian.</p>
                </article>
                <article class="bg-white/5 border border-white/10 rounded-3xl p-6 space-y-3">
                    <h2 class="text-xl font-semibold">Values</h2>
                    <p class="text-gray-300 text-sm">We uphold values rooted in the PUP spirit—community-centeredness, integrity, innovation, affordability, and genuine service—ensuring every product and interaction supports and uplifts students. By promoting sustainability and partnering with local creators and organizations, we provide responsible, honest, and student-focused service in every aspect of our shop.</p>
                </article>
            </section>

            <section class="bg-white/5 border border-white/20 rounded-3xl p-8 space-y-6">
                <h2 class="text-2xl font-semibold">Our story</h2>
                <p class="text-gray-300">As a fellow PUP student, I’ve felt the daily struggles of juggling tight budgets, long commutes, and the constant search for affordable yet reliable school essentials—so I created this shop to help make student life a little easier. Built for PUPians, by a PUPian, this small business is grounded in understanding our real needs and offering products that are practical, budget-friendly, and shaped by the true spirit of being an Iskolar ng Bayan.</p>
            </section>
        </div>
    </main>
</body>
</html>