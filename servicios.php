<?php
/**
 * servicios.php - InkBix Services & Catalog
 */
$page_title = "Servicios | InkBix";
$current_page = "servicios";
include 'includes/header.php';

// Placeholder Images Mapping (Unsplash)
$images = [
    'hero' => 'https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&q=80&w=1920',
    'textil' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&q=80&w=800',
    'ceramica' => 'https://images.unsplash.com/photo-1514228742587-6b1558fbed20?auto=format&fit=crop&q=80&w=800',
    'accesorios' => 'https://images.unsplash.com/photo-1572379371012-9710ee7bc595?auto=format&fit=crop&q=80&w=800',
    'packs' => 'https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80&w=800',
];
?>

<main>
    <!-- 1. HERO SECTION -->
    <section class="relative h-[50vh] flex items-center justify-center overflow-hidden bg-dark">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $images['hero']; ?>" alt="Servicios Hero" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-dark/80 to-dark"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-white mb-4">Catálogo de Servicios</h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Soluciones creativas de personalización para cada necesidad, desde textil hasta corporativo.
            </p>
        </div>
    </section>

    <!-- 2. STICKY NAV -->
    <nav class="sticky top-20 z-40 bg-white shadow-md border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-center space-x-2 md:space-x-8 overflow-x-auto py-4 no-scrollbar">
                <a href="#textil" class="whitespace-nowrap px-4 py-2 rounded-full text-sm font-bold bg-gray-100 text-dark hover:bg-accent hover:text-white transition-all">Textil</a>
                <a href="#ceramica" class="whitespace-nowrap px-4 py-2 rounded-full text-sm font-bold bg-gray-100 text-dark hover:bg-accent hover:text-white transition-all">Cerámica</a>
                <a href="#accesorios" class="whitespace-nowrap px-4 py-2 rounded-full text-sm font-bold bg-gray-100 text-dark hover:bg-accent hover:text-white transition-all">Accesorios</a>
                <a href="#packs" class="whitespace-nowrap px-4 py-2 rounded-full text-sm font-bold bg-gray-100 text-dark hover:bg-accent hover:text-white transition-all">Corporate Packs</a>
            </div>
        </div>
    </nav>

    <!-- 3. TEXTIL CATEGORY -->
    <section id="textil" class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row items-end justify-between mb-12 gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark">Sublimación Textil</h2>
                    <p class="text-gray-500 mt-2">Personalizamos tus prendas con diseños vibrantes y resistentes.</p>
                </div>
                <div class="px-4 py-2 bg-primary/10 text-primary rounded-lg font-bold text-sm">
                    Desde $15.00
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="group bg-light rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-gray-100">
                    <div class="aspect-square relative overflow-hidden">
                        <img src="<?php echo $images['textil']; ?>" alt="Producto Textil" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                        <div class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-dark">Nuevo</div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-dark mb-2">Camiseta Premium #<?php echo $i; ?></h3>
                        <p class="text-gray-500 text-sm mb-4">Poliéster tácto algodón, disponible en todas las tallas.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-accent font-bold">$18.50</span>
                            <button class="w-10 h-10 bg-dark text-white rounded-full hover:bg-accent hover:scale-110 transition-all">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
endfor; ?>
            </div>
        </div>
    </section>

    <!-- 4. CERAMICA CATEGORY -->
    <section id="ceramica" class="py-24 bg-light">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex flex-col md:flex-row items-end justify-between mb-12 gap-6">
                <div>
                    <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark">Cerámica & Cristalería</h2>
                    <p class="text-gray-500 mt-2">Tazas, platos y vasos con acabados de alta calidad.</p>
                </div>
                <div class="px-4 py-2 bg-accent/10 text-accent rounded-lg font-bold text-sm">
                    Desde $8.00
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="group bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all border border-gray-100">
                    <div class="aspect-square relative overflow-hidden">
                        <img src="<?php echo $images['ceramica']; ?>" alt="Producto Cerámica" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="text-xl font-heading font-bold text-dark mb-2">Taza Personalizada #<?php echo $i; ?></h3>
                        <p class="text-gray-500 text-sm mb-4">11oz, cerámica de primera, apta para microondas.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-accent font-bold">$10.00</span>
                            <button class="w-10 h-10 bg-dark text-white rounded-full hover:bg-accent hover:scale-110 transition-all">
                                <i class="fa-solid fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <?php
endfor; ?>
            </div>
        </div>
    </section>

    <!-- 5. ACCESORIOS CATEGORY -->
    <section id="accesorios" class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-dark mb-12">Accesorios & Regalos</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php
$acc = [
    ['title' => 'Llaveros Metálicos', 'price' => '$5.00'],
    ['title' => 'Mousepads Gamer', 'price' => '$12.00'],
    ['title' => 'Gorras Sublimadas', 'price' => '$15.00'],
];
foreach ($acc as $item):
?>
                <div class="flex gap-6 items-center bg-light p-6 rounded-2xl hover:scale-105 transition-all cursor-pointer border border-transparent hover:border-accent">
                    <div class="w-24 h-24 bg-gray-200 rounded-xl overflow-hidden flex-shrink-0">
                        <img src="<?php echo $images['accesorios']; ?>" alt="Accesorios" class="w-full h-full object-cover">
                    </div>
                    <div>
                        <h4 class="font-bold text-lg text-dark"><?php echo $item['title']; ?></h4>
                        <p class="text-accent font-bold"><?php echo $item['price']; ?></p>
                        <p class="text-xs text-gray-400 mt-1">Pedido mínimo: 5 unidades</p>
                    </div>
                </div>
                <?php
endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. PACKS CATEGORY -->
    <section id="packs" class="py-24 bg-dark text-white">
        <div class="container mx-auto px-4 md:px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-heading font-bold mb-8">Packs Corporativos</h2>
            <p class="text-gray-400 max-w-2xl mx-auto mb-16">
                Personalizamos la imagen de tu empresa con paquetes todo incluido. Ideal para aniversarios, lanzamientos o regalos de fin de año.
            </p>
            
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <!-- Pack Basic -->
                <div class="bg-gray-800 p-10 rounded-3xl border border-white/5 hover:border-primary transition-all">
                    <h3 class="text-xl font-bold mb-4">Pack Emprendedor</h3>
                    <div class="text-4xl font-bold text-primary mb-6">$150<span class="text-sm text-gray-500 font-normal">/10 unidades</span></div>
                    <ul class="text-left space-y-4 text-gray-400 mb-10">
                        <li class="flex gap-3"><i class="fa-solid fa-check text-primary"></i> 10 Camisetas blancas</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-primary"></i> 10 Tazas de cerámica</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-primary"></i> Diseño básico incluido</li>
                    </ul>
                    <a href="contacto" class="block w-full py-4 bg-primary text-white rounded-xl font-bold hover:bg-primary/80">Solicitar Cotización</a>
                </div>
                
                <!-- Pack Gold -->
                <div class="bg-gray-800 p-10 rounded-3xl border-2 border-accent scale-105 relative shadow-2xl shadow-accent/20">
                    <div class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white px-4 py-1 rounded-full text-xs font-bold uppercase">Más Popular</div>
                    <h3 class="text-xl font-bold mb-4">Pack Business</h3>
                    <div class="text-4xl font-bold text-accent mb-6">$350<span class="text-sm text-gray-500 font-normal">/25 unidades</span></div>
                    <ul class="text-left space-y-4 text-gray-400 mb-10">
                        <li class="flex gap-3"><i class="fa-solid fa-check text-accent"></i> 25 Camisetas de color</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-accent"></i> 25 Tazas mágicas</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-accent"></i> 25 Mousepads</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-accent"></i> Asesoría de diseño pro</li>
                    </ul>
                    <a href="contacto" class="block w-full py-4 bg-accent text-white rounded-xl font-bold hover:bg-accent/80 shadow-lg shadow-accent/30">Solicitar Cotización</a>
                </div>
                
                <!-- Pack Premium -->
                <div class="bg-gray-800 p-10 rounded-3xl border border-white/5 hover:border-secondary transition-all">
                    <h3 class="text-xl font-bold mb-4">Pack Enterprise</h3>
                    <div class="text-4xl font-bold text-secondary mb-6">$600<span class="text-sm text-gray-500 font-normal">/50 unidades</span></div>
                    <ul class="text-left space-y-4 text-gray-400 mb-10">
                        <li class="flex gap-3"><i class="fa-solid fa-check text-secondary"></i> 50 Polos deportivos</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-secondary"></i> 50 Termos de aluminio</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-secondary"></i> 10 Banners sublimados</li>
                        <li class="flex gap-3"><i class="fa-solid fa-check text-secondary"></i> Entrega a domicilio</li>
                    </ul>
                    <a href="contacto" class="block w-full py-4 bg-secondary text-dark rounded-xl font-bold hover:bg-secondary/80">Solicitar Cotización</a>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. FINAL CTA -->
    <section class="py-24 bg-white text-center">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl md:text-5xl font-heading font-bold text-dark mb-8">¿Buscas algo diferente?</h2>
            <p class="text-gray-500 text-lg mb-12 max-w-xl mx-auto">Cuéntanos tu proyecto y nosotros encontramos la mejor técnica para llevarlo a cabo.</p>
            <a href="contacto" class="inline-block bg-accent-gradient text-white px-12 py-5 rounded-full font-bold shadow-xl shadow-accent/20 hover:scale-105 transition-all">
                Personaliza tu producto ahora
            </a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
