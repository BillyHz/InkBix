<?php
/**
 * contacto.php - InkBix Contact Info & Form
 */
$page_title = "Contacto | InkBix";
$current_page = "contacto";
include 'includes/header.php';

// Placeholder Background for Hero
$hero_bg = 'https://images.unsplash.com/photo-1516383740770-fb95863851b2?auto=format&fit=crop&q=80&w=1920';
?>

<main>
    <!-- 1. HERO SECTION -->
    <section class="relative h-[40vh] flex items-center justify-center overflow-hidden bg-dark">
        <div class="absolute inset-0 z-0">
            <img src="<?php echo $hero_bg; ?>" alt="Contacto Hero" class="w-full h-full object-cover opacity-30">
            <div class="absolute inset-0 bg-gradient-to-b from-dark/80 to-dark"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10 text-center">
            <h1 class="text-5xl md:text-6xl font-heading font-bold text-white mb-4">Hablemos de tu Proyecto</h1>
            <p class="text-xl text-gray-400 max-w-2xl mx-auto">
                Estamos listos para ayudarte a personalizar tu mundo. Contáctanos por cualquier medio.
            </p>
        </div>
    </section>

    <!-- 2. CONTENT SECTION -->
    <section class="py-24 bg-white">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Left Column: Info -->
                <div class="space-y-12">
                    <div>
                        <h2 class="text-3xl font-heading font-bold text-dark mb-6">Información de Contacto</h2>
                        <p class="text-gray-500 text-lg leading-relaxed">
                            Visítanos en nuestro taller o escríbenos para una cotización inmediata. Respondemos en menos de 2 horas en horario laboral.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <div class="p-6 bg-light rounded-2xl border border-gray-100 hover:border-accent transition-all group">
                            <i class="fa-solid fa-location-dot text-3xl text-accent mb-4 group-hover:scale-110 transition-all"></i>
                            <h4 class="font-bold text-dark mb-2">Ubicación</h4>
                            <p class="text-gray-500 text-sm">Calle Principal, 100m Norte de la Iglesia, Heredia Centro, Costa Rica.</p>
                        </div>
                        <div class="p-6 bg-light rounded-2xl border border-gray-100 hover:border-accent transition-all group">
                            <i class="fa-brands fa-whatsapp text-3xl text-accent mb-4 group-hover:scale-110 transition-all"></i>
                            <h4 class="font-bold text-dark mb-2">WhatsApp</h4>
                            <p class="text-gray-500 text-sm">+506 8877-6655</p>
                            <a href="https://wa.me/50688776655" target="_blank" class="text-accent text-xs font-bold mt-2 inline-block">Enviar mensaje &rarr;</a>
                        </div>
                        <div class="p-6 bg-light rounded-2xl border border-gray-100 hover:border-accent transition-all group">
                            <i class="fa-solid fa-envelope text-3xl text-accent mb-4 group-hover:scale-110 transition-all"></i>
                            <h4 class="font-bold text-dark mb-2">Email</h4>
                            <p class="text-gray-500 text-sm">hola@inkbix.com</p>
                            <p class="text-gray-400 text-xs">ventas@inkbix.com</p>
                        </div>
                        <div class="p-6 bg-light rounded-2xl border border-gray-100 hover:border-accent transition-all group">
                            <i class="fa-solid fa-clock text-3xl text-accent mb-4 group-hover:scale-110 transition-all"></i>
                            <h4 class="font-bold text-dark mb-2">Horario</h4>
                            <p class="text-gray-500 text-sm">L-V: 9am - 6pm</p>
                            <p class="text-gray-500 text-sm">Sáb: 9am - 2pm</p>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-bold text-dark uppercase tracking-widest text-sm">Nuestras Redes</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="w-12 h-12 rounded-xl bg-dark text-white flex items-center justify-center hover:bg-accent hover:-translate-y-1 transition-all shadow-lg">
                                <i class="fa-brands fa-facebook-f text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-dark text-white flex items-center justify-center hover:bg-accent hover:-translate-y-1 transition-all shadow-lg">
                                <i class="fa-brands fa-instagram text-lg"></i>
                            </a>
                            <a href="#" class="w-12 h-12 rounded-xl bg-dark text-white flex items-center justify-center hover:bg-accent hover:-translate-y-1 transition-all shadow-lg">
                                <i class="fa-brands fa-tiktok text-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Form -->
                <div class="bg-light p-8 md:p-12 rounded-3xl shadow-2xl border border-gray-100">
                    <h3 class="text-2xl font-heading font-bold text-dark mb-8">Envíanos un mensaje</h3>
                    <form action="#" method="POST" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 ml-1">Nombre Completo</label>
                                <input type="text" required placeholder="Ej: Juan Pérez" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-accent focus:outline-none transition-all">
                            </div>
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-gray-700 ml-1">Correo Electrónico</label>
                                <input type="email" required placeholder="juan@correo.com" class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-accent focus:outline-none transition-all">
                            </div>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">¿Qué producto te interesa?</label>
                            <select class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-accent focus:outline-none transition-all bg-white">
                                <option>Camisetas / Textil</option>
                                <option>Tazas / Cerámica</option>
                                <option>Accesorios / Regalos</option>
                                <option>Pack Corporativo</option>
                                <option>Otro / Especial</option>
                            </select>
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-gray-700 ml-1">Tu Mensaje / Idea</label>
                            <textarea rows="5" required placeholder="Cuéntanos qué tienes en mente, cantidades, colores, etc." class="w-full px-5 py-4 rounded-xl border-2 border-gray-200 focus:border-accent focus:outline-none transition-all"></textarea>
                        </div>
                        <button type="submit" class="w-full py-5 bg-accent-gradient text-white rounded-xl font-bold text-lg shadow-xl shadow-accent/20 hover:scale-[1.02] active:scale-95 transition-all">
                            Enviar Solicitud
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. MAP SECTION -->
    <section class="h-[500px] w-full bg-gray-200">
        <!-- Reemplazar con iframe real de Google Maps si es necesario -->
        <div class="w-full h-full grayscale opacity-80 hover:grayscale-0 transition-all duration-700">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.351475171736!2d-84.11651!3d9.99823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e980f7727145%3A0x6bba31d167909c!2sHeredia%20Centro!5e0!3m2!1ses-419!2scr!4v1700000000000!5m2!1ses-419!2scr" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>
