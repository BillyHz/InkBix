import { Poppins, Roboto } from "next/font/google";
import "./globals.css";
import Header from "@/components/Header";
import Footer from "@/components/Footer";

const poppins = Poppins({
  variable: "--font-heading",
  subsets: ["latin"],
  weight: ["700"],
});

const roboto = Roboto({
  variable: "--font-body",
  subsets: ["latin"],
  weight: ["400", "500"],
});

export const metadata = {
  title: "InkBix | Sublimación y Personalización de Productos",
  description: "Tienda de sublimación de alta calidad en camisetas, tazas, cojines y artículos personalizados en Heredia, Costa Rica.",
};

export default function RootLayout({ children }) {
  return (
    <html lang="es" className="scroll-smooth">
      <body className={`${poppins.variable} ${roboto.variable} font-body antialiased bg-light`}>
        <Header />
        {children}
        <Footer />
      </body>
    </html>
  );
}
