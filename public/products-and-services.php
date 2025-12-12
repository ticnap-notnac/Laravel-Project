<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Products & Services | Ronald's Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-gradient-to-br from-slate-900 via-purple-900 to-slate-900 text-white">
    <?php
    $activePage = 'products-and-services.php';
    include __DIR__ . '/partials/nav.php';

    $productNames = [
        'Sculpted Blazer', 'Fluid Slip', 'Layered Knit', 'Sharp Trousers', 'Moss Midi',
        'Draped Tunic', 'Tailored Coat', 'Cuffed Jeans', 'Structured Jumpsuit', 'Feather Tee',
        'Luxe Sweat', 'Pleated Wrap', 'Velvet Bomber', 'Aura Dress', 'Monochrome Set',
        'Utility Vest', 'Cowl Hoodie', 'Silk Pocket Shirt', 'Asym Dress', 'Canvas Jacket',
        'Ribbed Cardigan', 'Satin Cargo', 'Minimal Tee', 'Haze Shorts', 'Gentle Suit',
    ];
    ?>
    <main class="flex-1 pt-28 px-4 sm:px-6 lg:px-8">
      <div class="max-w-7xl mx-auto space-y-10">
        <header class="space-y-4">
          <p class="text-sm uppercase tracking-[0.4em] text-purple-300">Collections</p>
          <h1 class="text-4xl md:text-5xl font-bold text-white">Ronald’s Shop clothings</h1>
          <p class="text-lg text-gray-300">Curated ensembles that shift between tailored precision and everyday comfort, delivered with cinematic imagery.</p>
        </header>

        <section class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
          <?php foreach ($productNames as $index => $name): ?>
            <?php $sig = $index + 11; ?>
            <article class="bg-white/5 border border-white/10 rounded-3xl p-4 flex flex-col gap-3 shadow-lg shadow-purple-500/10">
              <div class="relative overflow-hidden rounded-2xl border border-white/10 bg-slate-900/60">
                <img src="https://source.unsplash.com/random/600x600/?clothing&sig=<?= $sig; ?>" alt="<?= htmlspecialchars($name); ?>" class="w-full h-40 object-cover">
              </div>
              <div class="space-y-1">
                <h2 class="text-lg font-semibold"><?= htmlspecialchars($name); ?></h2>
                <p class="text-sm text-gray-300">Limited drop · <?= 18 + $index; ?> pieces remaining</p>
              </div>
            </article>
          <?php endforeach; ?>
        </section>
      </div>
    </main>
  </div>
</body>
</html>