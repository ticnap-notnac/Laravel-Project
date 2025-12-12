<?php
$navItems = [
    'Index.php' => 'Home',
    'products-and-services.php' => 'Products & Services',
    'about-us.php' => 'About Us',
    'contact-us.php' => 'Contact Us',
];
$activePage = $activePage ?? basename($_SERVER['PHP_SELF']);
?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <div class="flex items-center space-x-2">
                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-lg flex items-center justify-center">
                    🛒
                </div>
                <span class="text-2xl font-bold text-white">Ronald's Shop</span>
            </div>
            <div class="hidden md:flex items-center space-x-8">
                <?php foreach ($navItems as $url => $label): ?>
                    <a href="<?= htmlspecialchars($url); ?>" class="<?= $url === $activePage ? 'text-white font-semibold' : 'text-gray-200 hover:text-white transition'; ?>"><?= htmlspecialchars($label); ?></a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</nav>