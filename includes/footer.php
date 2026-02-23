<?php
/**
 * footer.php - InkBix Footer
 */
?>
    <!-- Footer -->
    <footer class="bg-dark text-white pt-16 pb-8 border-t-4 border-accent">
        <div class="container mx-auto px-4 md:px-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                <!-- Branding -->
                <div class="space-y-4">
                    <a href="index" class="text-2xl font-heading font-bold flex items-center gap-2">
                        <span>Ink</span><span class="text-accent">Bix</span>
                    </a>
                    <p class="text-gray-400 leading-relaxed">
                        Expertos en sublimación y personalización de productos. Llevamos tus ideas a la realidad con la mejor calidad del mercado.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-accent transition-all">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-accent transition-all">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-accent transition-all">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-bold mb-6 font-heading">Navegación</h4>
                    <ul class="space-y-3">
                        <li><a href="index" class="text-gray-400 hover:text-accent transition-all">Inicio</a></li>
                        <li><a href="servicios" class="text-gray-400 hover:text-accent transition-all">Servicios</a></li>
                        <li><a href="contacto" class="text-gray-400 hover:text-accent transition-all">Contacto</a></li>
                        <li><a href="servicios" class="text-gray-400 hover:text-accent transition-all">Catálogo</a></li>
                    </ul>
                </div>

                <!-- Schedule -->
                <div>
                    <h4 class="text-lg font-bold mb-6 font-heading">Horarios</h4>
                    <ul class="space-y-3 text-gray-400">
                        <li class="flex justify-between">
                            <span>Lunes - Viernes:</span>
                            <span class="text-white">9am - 6pm</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sábados:</span>
                            <span class="text-white">9am - 2pm</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Domingos:</span>
                            <span class="text-white">Cerrado</span>
                        </li>
                    </ul>
                </div>

                <!-- Contact -->
                <div>
                    <h4 class="text-lg font-bold mb-6 font-heading">Contacto</h4>
                    <ul class="space-y-4 text-gray-400">
                        <li class="flex gap-3">
                            <i class="fa-solid fa-location-dot text-accent mt-1"></i>
                            <span>Calle Principal, Heredia Centro, Costa Rica</span>
                        </li>
                        <li class="flex gap-3">
                            <i class="fa-solid fa-phone text-accent mt-1"></i>
                            <span>+506 2233-4455</span>
                        </li>
                        <li class="flex gap-3">
                            <i class="fa-solid fa-envelope text-accent mt-1"></i>
                            <span>hola@inkbix.com</span>
                        </li>
                        <li class="flex gap-3">
                            <i class="fa-brands fa-whatsapp text-accent mt-1 text-lg"></i>
                            <span>+506 8877-6655</span>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Bottom Line -->
            <div class="pt-8 border-t border-gray-800 text-center">
                <p class="text-gray-500 text-sm">
                    &copy; <?php echo date('Y'); ?> InkBix. Todos los derechos reservados.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>
