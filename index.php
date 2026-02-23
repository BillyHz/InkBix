<?php
/**
 * index.php - InkBix Landing Page
 */
$page_title = "InkBix | Sublimación y Personalización";
$current_page = "inicio";
include 'includes/header.php';

// Placeholder Images Mapping (Unsplash)
$images = [
    'hero' => 'https://images.unsplash.com/photo-1513346038380-2139044cc218?auto=format&fit=crop&q=80&w=1920',
    'ambiente' => 'https://images.unsplash.com/photo-1620714223084-8dfacc6dfd1d?auto=format&fit=crop&q=80&w=1200',
    'service_1' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&q=80&w=800', // T-shirt
    'service_2' => 'https://images.unsplash.com/photo-1514228742587-6b1558fbed20?auto=format&fit=crop&q=80&w=800', // Mug
    'service_3' => 'https://images.unsplash.com/photo-1584100914186-dc244b4e2d21?auto=format&fit=crop&q=80&w=800', // Cushion
    'service_4' => 'https://images.unsplash.com/photo-1572379371012-9710ee7bc595?auto=format&fit=crop&q=80&w=800', // Keychains (generic access)
    'service_5' => 'https://images.unsplash.com/photo-1493723843671-1d655e7d772f?auto=format&fit=crop&q=80&w=800', // Plates/Metal
    'service_6' => 'https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80&w=800', // Corporate Pack
    'equipo' => 'https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1200',
    'cta' => 'https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=1200',
    'social_1' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&q=80&w=600',
    'social_2' => 'https://images.unsplash.com/photo-1514228742587-6b1558fbed20?auto=format&fit=crop&q=80&w=600',
    'social_3' => 'https://images.unsplash.com/photo-1584100914186-dc244b4e2d21?auto=format&fit=crop&q=80&w=600',
    'social_4' => 'https://images.unsplash.com/photo-1572379371012-9710ee7bc595?auto=format&fit=crop&q=80&w=600',
    'social_5' => 'https://images.unsplash.com/photo-1493723843671-1d655e7d772f?auto=format&fit=crop&q=80&w=600',
    'social_6' => 'https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80&w=600',
];
?>

<main>
    <!-- 1. HERO SECTION -->
    <section class="relative h-screen flex items-center justify-center overflow-hidden bg-dark">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $images['hero']; ?>" alt="Hero" class="w-full h-full object-cover opacity-40">
            <div class="absolute inset-0 bg-gradient-to-b from-dark/60 via-transparent to-dark"></div>
        </div>

        <div class="container mx-auto px-4 md:px-6 relative z-10 text-center">
            <span class="inline-block py-1 px-4 rounded-full bg-accent/20 text-accent text-sm font-bold mb-6 tracking-wider uppercase border border-accent/30">
                Heredia, Costa Rica
            </span>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-heading font-bold text-white mb-8 leading-tight">
                Imprimimos tus <span class="text-accent underline decoration-secondary/30">Sueños</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-12">
                Sublimación textil &bull; Cerámica &bull; Accesorios &bull; Personalización para empresas y eventos.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="servicios" class="w-full sm:w-auto bg-accent-gradient text-white px-10 py-4 rounded-full font-bold shadow-2xl shadow-accent/30 hover:scale-105 transition-all">
                    Ver Catálogo
                </a>
                <a href="contacto" class="w-full sm:w-auto border-2 border-white/30 text-white px-10 py-4 rounded-full font-bold hover:bg-white hover:text-dark transition-all backdrop-blur-sm">
                    Personaliza Ahora
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
            <span class="text-white/40 text-xs font-bold uppercase tracking-widest">Scroll</span>
            <i class="fa-solid fa-chevron-down text-white/40"></i>
        </div>
    </section>

    <!-- 2. INTRO SECTION -->
    <section class="py-24 bg-light">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="space-y-8">
                    <div>
                        <span class="text-accent font-bold tracking-widest uppercase text-sm">Bienvenido a InkBix</span>
                        <h2 class="text-4xl md:text-5xl font-heading font-bold text-dark mt-4">Calidad que se siente en cada detalle</h2>
                    </div>
                    <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                        <p>
                            En **InkBix**, no solo personalizamos productos, creamos memorias tangibles. Nuestra técnica de sublimación de alta gama garantiza colores vibrantes y duraderos que no se desvanecen con el tiempo.
                        </p>
                        <p>
                            Desde una sola pieza hasta pedidos corporativos a gran escala, tratamos cada proyecto con la misma pasión y precisión técnica. Usamos tintas premium y materiales seleccionados para asegurar un acabado profesional.
                        </p>
                    </div>
                    <div class="grid grid-cols-2 gap-8 pt-8">
                        <div class="border-l-4 border-primary pl-6">
                            <span class="block text-4xl font-heading font-bold text-dark">100+</span>
                            <span class="text-gray-500 font-medium">Productos Sublimados</span>
                        </div>
                        <div class="border-l-4 border-accent pl-6">
                            <span class="block text-4xl font-heading font-bold text-dark">90%</span>
                            <span class="text-gray-500 font-medium">Entregas a Tiempo</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="aspect-square rounded-3xl overflow-hidden shadow-2xl">
                        <img src="<?php echo $images['ambiente']; ?>" alt="Nuestro Taller" class="w-full h-full object-cover">
                    </div>
                    <!-- Decorative Elements -->
                    <div class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary rounded-full -z-10 opacity-20"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. FEATURED SERVICES -->
    <section class="py-24 bg-dark relative overflow-hidden">
        <div class="container mx-auto px-4 md:px-6 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-20">
                <div class="w-16 h-1.5 bg-accent-gradient mx-auto mb-8 rounded-full"></div>
                <h2 class="text-4xl md:text-5xl font-heading font-bold text-white mb-6">Nuestros Servicios Destacados</h2>
                <p class="text-gray-400 text-lg">
                    Explora nuestra amplia gama de opciones de personalización diseñadas para impresionar.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php
$featured = [
    ['img' => $images['service_1'], 'cat' => 'Textil', 'title' => 'Camisetas Personalizadas', 'desc' => 'Telas inteligentes y algodón con diseños que no se sienten al tacto.'],
    ['img' => $images['service_2'], 'cat' => 'Cerámica', 'title' => 'Tazas Creativas', 'desc' => 'Tazas de cerámica de alta calidad con acabados brillantes o mate.'],
    ['img' => $images['service_3'], 'cat' => 'Hogar', 'title' => 'Cojines Decorativos', 'desc' => 'Personaliza tu espacio con cojines de texturas suaves y vibrantes.'],
    ['img' => $images['service_4'], 'cat' => 'Accesorios', 'title' => 'Llaveros y Pins', 'desc' => 'Detalles pequeños que marcan la diferencia en tus eventos.'],
    ['img' => $images['service_5'], 'cat' => 'Especiales', 'title' => 'Placas Metálicas', 'desc' => 'Sublimación en aluminio para reconocimientos o decoración industrial.'],
    ['img' => $images['service_6'], 'cat' => 'Empresarial', 'title' => 'Packs Corporativos', 'desc' => 'Soluciones completas de branding para tu equipo de trabajo.'],
];

foreach ($featured as $item):
?>
                <div class="group bg-gray-800/50 rounded-2xl p-4 border border-white/5 hover:border-accent/30 transition-all hover:bg-gray-800">
                    <div class="aspect-square rounded-xl overflow-hidden mb-6">
                        <img src="<?php echo $item['img']; ?>" alt="<?php echo $item['title']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-all duration-500">
                    </div>
                    <span class="text-accent text-xs font-bold uppercase tracking-widest mb-2 block"><?php echo $item['cat']; ?></span>
                    <h3 class="text-xl font-heading font-bold text-white mb-3"><?php echo $item['title']; ?></h3>
                    <p class="text-gray-400 text-sm leading-relaxed mb-6"><?php echo $item['desc']; ?></p>
                    <a href="servicios" class="text-white text-sm font-bold flex items-center gap-2 group-hover:text-accent transition-all">
                        Saber más <i class="fa-solid fa-arrow-right-long transition-all group-hover:translate-x-2"></i>
                    </a>
                </div>
                <?php
endforeach; ?>
            </div>

            <div class="mt-20 text-center">
                <a href="servicios" class="inline-flex items-center gap-3 text-white border-b-2 border-accent pb-2 font-bold hover:text-accent transition-all">
                    Ver todos los servicios
                </a>
            </div>
        </div>
    </section>

    <!-- 4. ABOUT US -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1">
                    <div class="aspect-[4/5] rounded-3xl overflow-hidden shadow-2xl">
                        <img src="<?php echo $images['equipo']; ?>" alt="Nuestro Equipo" class="w-full h-full object-cover">
                    </div>
                </div>
                <div class="space-y-8 order-1 lg:order-2">
                    <div>
                        <span class="text-primary font-bold tracking-widest uppercase text-sm">Historia & Filosofía</span>
                        <h2 class="text-4xl md:text-5xl font-heading font-bold text-dark mt-4">Pasión por la Personalización</h2>
                    </div>
                    <div class="space-y-6 text-gray-600 text-lg leading-relaxed">
                        <p>
                            InkBix nació de la idea de que cada objeto puede contar una historia. Fundada en Heredia, comenzamos como un pequeño taller de tazas y hoy nos hemos convertido en referentes de la zona para sublimación textil y publicitaria.
                        </p>
                        <p>
                            Nuestro equipo está compuesto por diseñadores y artesanos digitales que cuidan cada paso del proceso: desde el ajuste de color en el diseño hasta la presión exacta en la plancha de calor.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check-circle text-primary mt-1"></i>
                                <span>Atención personalizada en cada pedido.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check-circle text-primary mt-1"></i>
                                <span>Garantía de satisfacción en colores y acabados.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <i class="fa-solid fa-check-circle text-primary mt-1"></i>
                                <span>Precios competitivos para mayoristas y emprendedores.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. CTA BANNER -->
    <section class="relative py-24 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $images['cta']; ?>" alt="CTA Background" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-primary/80 backdrop-blur-sm"></div>
        </div>
        <div class="container mx-auto px-4 md:px-6 relative z-10 text-center">
            <h2 class="text-3xl md:text-5xl font-heading font-bold text-white mb-8">¿Tienes una idea en mente?</h2>
            <p class="text-xl text-white/90 max-w-2xl mx-auto mb-12">
                Nosotros la hacemos realidad. Consulta por nuestros precios especiales para eventos sociales y regalos corporativos.
            </p>
            <a href="contacto" class="inline-block bg-white text-primary px-10 py-4 rounded-full font-bold shadow-xl hover:scale-105 transition-all">
                ¡Empieza tu diseño hoy!
            </a>
        </div>
    </section>

    <!-- 6. SOCIAL GALLERY -->
    <section class="py-24 bg-dark">
        <div class="container mx-auto px-4 md:px-6">
            <div class="text-center mb-16">
                <h3 class="text-2xl font-heading font-bold text-white flex items-center justify-center gap-3">
                    <i class="fa-brands fa-instagram text-accent"></i> @InkBix_CR
                </h3>
                <p class="text-gray-500 mt-2">Síguenos para ver nuestro trabajo diario</p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-2">
                <?php for ($i = 1; $i <= 6; $i++): ?>
                <div class="relative group aspect-square overflow-hidden cursor-pointer">
                    <img src="<?php echo $images['social_' . $i]; ?>" alt="Instagram Feed <?php echo $i; ?>" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-accent/60 opacity-0 group-hover:opacity-100 transition-all flex items-center justify-center">
                        <i class="fa-brands fa-instagram text-white text-3xl"></i>
                    </div>
                </div>
                <?php
endfor; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
