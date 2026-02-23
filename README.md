# InkBix Website

Sitio web moderno y visualmente impactante para una tienda de sublimación y personalización de productos.

## Stack Tecnológico
- **PHP 8+**: Estructura modular con includes.
- **Tailwind CSS**: Diseño moderno y responsivo vía CDN.
- **Google Fonts**: [Poppins](https://fonts.google.com/specimen/Poppins) (Títulos) y [Roboto](https://fonts.google.com/specimen/Roboto) (Cuerpo).
- **Font Awesome 6**: Iconografía vía CDN.

## Estructura de Archivos
- `index.php`: Página de inicio.
- `servicios.php`: Detalle de servicios y catálogo.
- `contacto.php`: Información de contacto y formulario.
- `includes/`: Componentes reutilizables.
  - `header.php`: Encabezado y navegación.
  - `footer.php`: Pie de página y contacto.
- `.htaccess`: Configuración para URLs amigables.

## Instalación
1. Clona el repositorio o copia los archivos a tu servidor local (XAMPP, MAMP, etc.).
2. Asegúrate de tener habilitado `mod_rewrite` en Apache para que el archivo `.htaccess` funcione.
3. Abre el sitio en tu navegador a través de `localhost/InkBix`.

## Notas sobre Personalización
- Los colores de marca están definidos en la configuración de Tailwind dentro de `header.php`.
- Las imágenes son generadas mediante IA y se encuentran en la carpeta raíz o referenciadas externamente.
