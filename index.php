<!DOCTYPE html>
<html lang="de" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- SEO & Browser Tags -->
    <title>TENDUR Wesseling | Holzkohlegrill & Anatolische Spezialitäten</title>
    <meta name="description" content="Authentische anatolische Küche in Wesseling. Spezialitäten vom Holzkohlegrill, frisch gebackenes Brot aus dem Tendur-Lehmofen. Täglich von 10:30 - 23:00 Uhr.">
    
    <!-- Social Media Vorschau (Facebook, WhatsApp, Instagram) -->
    <meta property="og:type" content="restaurant.restaurant">
    <meta property="og:title" content="TENDUR Wesseling | Holzkohlegrill & Tradition">
    <meta property="og:description" content="Saftige Grillgerichte und ofenfrisches Brot aus dem Lehmofen. Besuchen Sie uns in Wesseling!">
    <meta property="og:image" content="https://arslanalidogan-007.github.io/tendur-webseite/gal/IMG-20190612-WA0001.jpg">
    <meta property="og:url" content="https://arslanalidogan-007.github.io/tendur-webseite/">
    <meta property="restaurant:contact_info:street_address" content="Flach-Fengler-Str. 78">
    <meta property="restaurant:contact_info:locality" content="Wesseling">
    <meta property="restaurant:contact_info:postal_code" content="50389">

    <!-- JSON-LD für Google My Business (Local Business Schema) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Restaurant",
      "name": "TENDUR Restaurant",
      "image": "https://arslanalidogan-007.github.io/tendur-webseite/gal/IMG-20190612-WA0001.jpg",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Flach-Fengler-Str. 78",
        "addressLocality": "Wesseling",
        "postalCode": "50389",
        "addressCountry": "DE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 50.8268,
        "longitude": 6.9748
      },
      "url": "https://arslanalidogan-007.github.io/tendur-webseite/",
      "telephone": "+4922363312160",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
          "opens": "10:30",
          "closes": "23:00"
        }
      ],
      "servesCuisine": "Anatolisch, Türkisch, Grill"
    }
    </script>

    <!-- Tailwind CSS & Icons -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;600&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #0f0f0f; color: #f5f5f5; }
        h1, h2, h3, .brand-font { font-family: 'Playfair Display', serif; }
        .hero-bg { background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.85)), url('gal/IMG-20190612-WA0001.jpg') center/cover; }
        .gold-text { color: #d4af37; }
        .bg-gold { background-color: #d4af37; }
        .card-blur { background: rgba(255, 255, 255, 0.03); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
        .menu-item:hover .item-price { color: #d4af37; transform: scale(1.1); }
    </style>
</head>
<body>

    <!-- Nav -->
    <nav class="fixed w-full z-50 py-4 px-6 md:px-12 flex justify-between items-center card-blur border-b border-white/5">
        <div class="text-2xl brand-font font-bold tracking-widest text-white">TENDUR</div>
        <div class="hidden md:flex space-x-8 font-semibold uppercase text-[10px] tracking-[0.2em]">
            <a href="#" class="hover:text-[#d4af37] transition">Start</a>
            <a href="#speisekarte" class="hover:text-[#d4af37] transition">Speisekarte</a>
            <a href="#galerie" class="hover:text-[#d4af37] transition">Galerie</a>
            <a href="#kontakt" class="hover:text-[#d4af37] transition">Kontakt</a>
        </div>
        <a href="tel:022363312160" class="md:hidden text-white"><i class="fas fa-phone"></i></a>
    </nav>

    <!-- Hero -->
    <section class="relative h-screen flex items-center justify-center text-center px-4 hero-bg">
        <div class="max-w-4xl">
            <span class="gold-text uppercase tracking-[0.3em] text-xs font-bold mb-4 block">Wesseling • Holzkohlegrill</span>
            <h1 class="text-5xl md:text-8xl mb-6 leading-tight italic">Anatolische Gastfreundschaft</h1>
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto font-light">
                Traditionelle Gerichte, frisch im Lehmofen gebackenes Brot und saftige Spezialitäten vom echten Holzkohlegrill.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="tel:022363312160" class="bg-gold text-black px-10 py-4 rounded-full font-bold hover:scale-105 transition shadow-lg shadow-gold/20">Tisch reservieren</a>
                <a href="#speisekarte" class="border border-white/30 px-10 py-4 rounded-full font-bold hover:bg-white hover:text-black transition">Speisekarte</a>
            </div>
        </div>
    </section>

    <!-- Speisekarte Auszug -->
    <section id="speisekarte" class="py-24 px-6 bg-[#0c0c0c]">
        <div class="max-w-5xl mx-auto">
            <h2 class="text-center text-4xl md:text-6xl mb-16 italic">Unsere Spezialitäten</h2>
            <div class="grid md:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <h3 class="text-2xl gold-text border-b border-gold/20 pb-2 mb-4 brand-font">Grill-Highlights</h3>
                    <div class="menu-item flex justify-between group">
                        <span>Adana Kebap <p class="text-xs text-gray-500 italic">Hackfleischspieß pikanter Art</p></span>
                        <span class="item-price font-bold transition">18.50 €</span>
                    </div>
                    <div class="menu-item flex justify-between group">
                        <span>Kuzu Sis <p class="text-xs text-gray-500 italic">Zarter Lammspieß</p></span>
                        <span class="item-price font-bold transition">21.90 €</span>
                    </div>
                </div>
                <div class="space-y-6">
                    <h3 class="text-2xl gold-text border-b border-gold/20 pb-2 mb-4 brand-font">Aus dem Ofen</h3>
                    <div class="menu-item flex justify-between group">
                        <span>Lahmacun <p class="text-xs text-gray-500 italic">Türkische Pizza mit Salat</p></span>
                        <span class="item-price font-bold transition">6.50 €</span>
                    </div>
                    <div class="menu-item flex justify-between group">
                        <span>Künefe <p class="text-xs text-gray-500 italic">Warmes Dessert mit Käse & Sirup</p></span>
                        <span class="item-price font-bold transition">8.50 €</span>
                    </div>
                </div>
            </div>
            <div class="mt-12 text-center">
                <a href="Speisekarte.pdf" target="_blank" class="text-xs gold-text uppercase tracking-widest font-bold border-b border-gold/40 hover:border-gold transition pb-1">Komplette Karte als PDF öffnen</a>
            </div>
        </div>
    </section>

    <!-- Galerie -->
    <section id="galerie" class="py-24 bg-[#0a0a0a]">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-4xl mb-12 italic">Impressionen</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <div class="aspect-square rounded-2xl overflow-hidden bg-gray-900 shadow-xl">
                    <img src="gal/IMG-20190612-WA0001.jpg" alt="Tendur Grill" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden bg-gray-900 shadow-xl">
                    <img src="gal/IMG-20190612-WA0003.jpg" alt="Tendur Brot" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden bg-gray-900 shadow-xl">
                    <img src="gal/IMG-20190612-WA0004.jpg" alt="Vorspeisen" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
                <div class="aspect-square rounded-2xl overflow-hidden bg-gray-900 shadow-xl">
                    <img src="gal/IMG-20190612-WA0006.jpg" alt="Fleischgerichte" class="w-full h-full object-cover hover:scale-110 transition duration-500">
                </div>
            </div>
        </div>
    </section>

    <!-- Kontakt & Karte -->
    <section id="kontakt" class="py-24 px-6 max-w-7xl mx-auto">
        <div class="grid md:grid-cols-2 gap-16">
            <div>
                <h2 class="text-4xl mb-8 italic">Kontakt</h2>
                <div class="space-y-6 text-gray-400">
                    <p><i class="fas fa-map-marker-alt gold-text mr-4"></i> Flach-Fengler-Str. 78, 50389 Wesseling</p>
                    <p><i class="fas fa-phone gold-text mr-4"></i> <a href="tel:022363312160" class="hover:text-white transition">02236 / 33 12 160</a></p>
                    <p><i class="fas fa-clock gold-text mr-4"></i> Täglich: 10:30 – 23:00 Uhr</p>
                </div>
            </div>
            <div class="h-80 rounded-3xl overflow-hidden shadow-2xl border border-white/10">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2522.569!2d6.9748!3d50.8268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bf23773c330c67%3A0x6e9a6c9e0d1d1d1d!2sFlach-Fengler-Stra%C3%9Fe%2078%2C%2050389%20Wesseling!5e0!3m2!1sde!2sde!4v1620000000000" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <footer class="py-12 text-center text-gray-600 text-xs border-t border-white/5 bg-black">
        <p class="brand-font text-xl tracking-[0.3em] text-white mb-6 uppercase">TENDUR</p>
        <p>&copy; 2026 TENDUR Restaurant Wesseling. Alle Rechte vorbehalten.</p>
    </footer>

</body>
</html>