<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | ShopVue</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <?php
    $activePage = 'contact-us.php';
    include __DIR__ . '/partials/nav.php';
    ?>
    <main class="flex-1 pt-28 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto space-y-8">
            <header class="space-y-4">
                <p class="text-sm uppercase tracking-[0.4em] text-purple-300">Contact</p>
                <h1 class="text-4xl md:text-5xl font-bold text-white">Need help? We’re here for you!</h1>
                <p class="text-lg text-gray-300">Send us your questions, concerns, or order inquiries—we’ll get back to you as soon as we can.</p>
            </header>

            <section class="bg-white/5 border border-white/10 rounded-3xl p-8 space-y-6">
                <form class="space-y-4">
                    <input required class="w-full rounded-2xl bg-slate-900/60 border border-white/10 px-4 py-3 placeholder:text-gray-500" type="text" name="name" placeholder="Name">
                    <input required class="w-full rounded-2xl bg-slate-900/60 border border-white/10 px-4 py-3 placeholder:text-gray-500" type="email" name="email" placeholder="Email">
                    <textarea required class="w-full rounded-2xl bg-slate-900/60 border border-white/10 px-4 py-3 placeholder:text-gray-500" name="message" rows="5" placeholder="How can we help you?"></textarea>
                    <button type="submit" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 font-semibold py-3 rounded-full hover:shadow-2xl hover:shadow-purple-500/40 transition">Send message</button>
                </form>
                <div class="text-sm text-gray-300 space-y-1">
                    <p>San Pedro, Laguna</p>
                    <p>Support: ronaldsshop@gmail.com</p>
                    <p class="text-sm text-purple-300">Available Mon–Fri, 9am–6pm PT</p>
                </div>
            </section>
        </div>
    </main>
</body>
</html>