<?php
/**
 * header.php - InkBix Navigation & Metadata
 */
$page_title = isset($page_title) ? $page_title : "InkBix | Sublimación y Personalización";
$current_page = isset($current_page) ? $current_page : "inicio";
?>
<!DOCTYPE html>
<html lang="es" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#007BFF', // Azul eléctrico
                        accent: '#FF2E63',  // Magenta
                        secondary: '#FFC107', // Amarillo
                        light: '#F9FAFB',
                        dark: '#1F2937',
                    },
                    fontFamily: {
                        sans: ['Roboto', 'sans-serif'],
                        heading: ['Poppins', 'sans-serif'],
                    },
                    backgroundImage: {
                        'accent-gradient': 'linear-gradient(135deg, #FF2E63 0%, #007BFF 100%)',
                    }
                }
            }
        }
    </script>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        .backdrop-blur { backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); }
        .transition-all { transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-gray-50 text-gray-900 font-sans">

    <!-- Header -->
    <header class="fixed top-0 left-0 w-full z-50 bg-white/80 backdrop-blur border-b border-transparent transition-all" id="main-header">
        <div class="container mx-auto px-4 md:px-6">
            <div class="flex items-center justify-between h-20">
                <!-- Logo -->
                <a href="index" class="text-2xl font-heading font-bold flex items-center gap-2">
                    <span class="text-dark">Ink</span><span class="text-accent">Bix</span>
                </a>

                <!-- Desktop Nav -->
                <nav class="hidden md:flex items-center space-x-8 text-sm font-medium">
                    <a href="index" class="transition-all <?php echo $current_page == 'inicio' ? 'text-accent' : 'text-dark hover:text-accent'; ?>">Inicio</a>
                    <a href="servicios" class="transition-all <?php echo $current_page == 'servicios' ? 'text-accent' : 'text-dark hover:text-accent'; ?>">Servicios</a>
                    <a href="contacto" class="transition-all <?php echo $current_page == 'contacto' ? 'text-accent' : 'text-dark hover:text-accent'; ?>">Contacto</a>
                    <a href="contacto" class="bg-accent-gradient text-white px-6 py-2.5 rounded-full shadow-lg shadow-accent/20 hover:scale-105 transition-all text-center">
                        Personaliza Ahora
                    </a>
                </nav>

                <!-- Mobile Menu Button -->
                <button class="md:hidden text-dark focus:outline-none" id="menu-btn">
                    <i class="fa-solid fa-bars text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Brand Accent Line -->
        <div class="h-1 w-full bg-gradient-to-r from-primary via-accent to-secondary"></div>

        <!-- Mobile Nav Menu -->
        <div class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-xl" id="mobile-menu">
            <div class="flex flex-col p-6 space-y-4">
                <a href="index" class="text-lg font-medium <?php echo $current_page == 'inicio' ? 'text-accent' : 'text-dark'; ?>">Inicio</a>
                <a href="servicios" class="text-lg font-medium <?php echo $current_page == 'servicios' ? 'text-accent' : 'text-dark'; ?>">Servicios</a>
                <a href="contacto" class="text-lg font-medium <?php echo $current_page == 'contacto' ? 'text-accent' : 'text-dark'; ?>">Contacto</a>
                <a href="contacto" class="bg-accent-gradient text-white px-6 py-3 rounded-xl shadow-lg shadow-accent/20 text-center font-bold">
                    Personaliza Ahora
                </a>
            </div>
        </div>
    </header>

    <script>
        // Header Scroll Effect
        window.addEventListener('scroll', () => {
            const header = document.getElementById('main-header');
            if (window.scrollY > 50) {
                header.classList.add('bg-white/95', 'shadow-md');
                header.classList.remove('bg-white/80');
            } else {
                header.classList.remove('bg-white/95', 'shadow-md');
                header.classList.add('bg-white/80');
            }
        });

        // Mobile Menu Toggle
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = menuBtn.querySelector('i');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.classList.replace('fa-xmark', 'fa-bars');
            } else {
                menuIcon.classList.replace('fa-bars', 'fa-xmark');
            }
        });
    </script>
