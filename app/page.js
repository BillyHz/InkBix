"use client";

import { motion } from "framer-motion";
import Hero from "@/components/Hero";
import ServiceCard from "@/components/ServiceCard";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faCheckCircle } from "@fortawesome/free-solid-svg-icons";
import { faInstagram } from "@fortawesome/free-brands-svg-icons";
import Link from "next/link";

export default function Home() {
  const services = [
    {
      title: "Camisetas Personalizadas",
      category: "Textil",
      description: "Diseños vibrantes que no se sienten al tacto sobre telas de alta calidad.",
      image: "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?auto=format&fit=crop&q=80&w=800",
    },
    {
      title: "Tazas de Alta Gama",
      category: "Cerámica",
      description: "Tazas brillantes o mate con impresión resistente a microondas.",
      image: "https://images.unsplash.com/photo-1514228742587-6b1558fbed20?auto=format&fit=crop&q=80&w=800",
    },
    {
      title: "Cojines Decorativos",
      category: "Hogar",
      description: "Suavidad y arte combinados en piezas únicas para tu espacio.",
      image: "https://images.unsplash.com/photo-1584100914186-dc244b4e2d21?auto=format&fit=crop&q=80&w=800",
    },
    {
      title: "Accesorios Variados",
      category: "Complementos",
      description: "Llaveros, pins y pequeños detalles personalizados a tu gusto.",
      image: "https://images.unsplash.com/photo-1572379371012-9710ee7bc595?auto=format&fit=crop&q=80&w=800",
    },
    {
      title: "Placas de Metal",
      category: "Especiales",
      description: "Impresión en aluminio para decoración industrial o reconocimientos.",
      image: "https://images.unsplash.com/photo-1493723843671-1d655e7d772f?auto=format&fit=crop&q=80&w=800",
    },
    {
      title: "Corporate Packs",
      category: "Empresarial",
      description: "Soluciones de branding completas para tu equipo y oficina.",
      image: "https://images.unsplash.com/photo-1542435503-956c469947f6?auto=format&fit=crop&q=80&w=800",
    },
  ];

  return (
    <main>
      <Hero />

      {/* Intro Section */}
      <section className="py-24 bg-light overflow-hidden">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <motion.div
              initial={{ opacity: 0, x: -50 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
              className="space-y-8"
            >
              <div>
                <span className="text-accent font-bold tracking-widest uppercase text-sm">Bienvenido a InkBix</span>
                <h2 className="text-4xl md:text-5xl font-heading font-bold text-dark mt-4 leading-tight">
                  Calidad que se siente en cada detalle
                </h2>
              </div>
              <div className="space-y-4 text-gray-600 text-lg leading-relaxed">
                <p>
                  En **InkBix**, no solo personalizamos productos, creamos memorias tangibles. Nuestra técnica de sublimación de alta gama garantiza colores vibrantes.
                </p>
                <div className="grid grid-cols-2 gap-8 pt-4">
                  <div className="border-l-4 border-primary pl-6">
                    <span className="block text-4xl font-heading font-bold text-dark">100+</span>
                    <span className="text-gray-500 font-medium">Productos Sublimados</span>
                  </div>
                  <div className="border-l-4 border-accent pl-6">
                    <span className="block text-4xl font-heading font-bold text-dark">90%</span>
                    <span className="text-gray-500 font-medium">Entregas a Tiempo</span>
                  </div>
                </div>
              </div>
            </motion.div>

            <motion.div
              initial={{ opacity: 0, scale: 0.9, rotate: -2 }}
              whileInView={{ opacity: 1, scale: 1, rotate: 0 }}
              viewport={{ once: true }}
              className="relative"
            >
              <div className="aspect-square rounded-[3rem] overflow-hidden shadow-2xl border-8 border-white">
                <img
                  src="https://images.unsplash.com/photo-1620714223084-8dfacc6dfd1d?auto=format&fit=crop&q=80&w=1200"
                  alt="Taller InkBix"
                  className="w-full h-full object-cover"
                />
              </div>
              <div className="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary rounded-full -z-10 opacity-30 animate-pulse"></div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* Services Grid */}
      <section className="py-24 bg-dark relative">
        <div className="container mx-auto px-4 relative z-10">
          <div className="text-center max-w-2xl mx-auto mb-20">
            <motion.div
              initial={{ width: 0 }}
              whileInView={{ width: 64 }}
              className="h-1.5 bg-accent-gradient mx-auto mb-8 rounded-full"
            ></motion.div>
            <h2 className="text-4xl md:text-5xl font-heading font-bold text-white mb-6">
              Nuestros Servicios Destacados
            </h2>
            <p className="text-gray-400 text-lg">
              Explora nuestra selección de productos estrella personalizados con precisión.
            </p>
          </div>

          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            {services.map((service, index) => (
              <motion.div
                key={index}
                initial={{ opacity: 0, y: 20 }}
                whileInView={{ opacity: 1, y: 0 }}
                transition={{ delay: index * 0.1 }}
                viewport={{ once: true }}
              >
                <ServiceCard {...service} />
              </motion.div>
            ))}
          </div>

          <div className="mt-20 text-center">
            <Link href="/servicios" className="inline-flex items-center gap-3 text-white border-b-2 border-accent pb-2 font-bold hover:text-accent transition-all">
              Ver catálogo completo
            </Link>
          </div>
        </div>
      </section>

      {/* About Section */}
      <section className="py-24 bg-white overflow-hidden">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <motion.div
              initial={{ opacity: 0, scale: 0.9 }}
              whileInView={{ opacity: 1, scale: 1 }}
              viewport={{ once: true }}
              className="order-2 lg:order-1"
            >
              <div className="aspect-[4/5] rounded-[2.5rem] overflow-hidden shadow-2xl">
                <img
                  src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&q=80&w=1200"
                  alt="Equipo InkBix"
                  className="w-full h-full object-cover"
                />
              </div>
            </motion.div>
            <motion.div
              initial={{ opacity: 0, x: 50 }}
              whileInView={{ opacity: 1, x: 0 }}
              viewport={{ once: true }}
              className="order-1 lg:order-2 space-y-8"
            >
              <div>
                <span className="text-primary font-bold tracking-widest uppercase text-sm">Historia & Filosofía</span>
                <h2 className="text-4xl md:text-5xl font-heading font-bold text-dark mt-4 leading-tight">
                  Pasión por la Personalización
                </h2>
              </div>
              <div className="space-y-6 text-gray-600 text-lg leading-relaxed">
                <p>
                  InkBix nace del deseo de transformar objetos cotidianos en piezas artísticas. Fundada en Heredia, nos enfocamos en técnicas que garanticen durabilidad.
                </p>
                <ul className="space-y-4">
                  {["Atención 100% personalizada", "Garantía de color y nitidez", "Precios para mayoristas"].map((item, i) => (
                    <li key={i} className="flex items-center gap-3">
                      <FontAwesomeIcon icon={faCheckCircle} className="text-primary" />
                      <span className="font-medium">{item}</span>
                    </li>
                  ))}
                </ul>
                <Link href="/contacto" className="inline-block bg-primary text-white px-8 py-3 rounded-xl font-bold hover:bg-primary/90 shadow-lg shadow-primary/20 transition-all">
                  Nuestro Contacto
                </Link>
              </div>
            </motion.div>
          </div>
        </div>
      </section>

      {/* CTA Section */}
      <section className="relative py-24 bg-accent overflow-hidden">
        <div className="absolute inset-0 opacity-20">
          <img src="https://images.unsplash.com/photo-1483985988355-763728e1935b?auto=format&fit=crop&q=80&w=1200" alt="CTA" className="w-full h-full object-cover" />
        </div>
        <div className="container mx-auto px-4 relative z-10 text-center">
          <h2 className="text-3xl md:text-5xl font-heading font-bold text-white mb-8">
            ¿Tienes una idea en mente?
          </h2>
          <motion.div whileHover={{ scale: 1.05 }} className="inline-block">
            <Link href="/contacto" className="bg-white text-accent px-12 py-5 rounded-full font-bold shadow-2xl text-lg block">
              ¡Hagámosla realidad hoy!
            </Link>
          </motion.div>
        </div>
      </section>

      {/* Social Feed */}
      <section className="py-20 bg-dark">
        <div className="container mx-auto px-4">
          <div className="text-center mb-12">
            <h3 className="text-xl font-heading font-bold text-white flex items-center justify-center gap-3">
              <FontAwesomeIcon icon={faInstagram} className="text-accent" /> @InkBix_CR
            </h3>
          </div>
          <div className="grid grid-cols-2 md:grid-cols-6 gap-2">
            {[1, 2, 3, 4, 5, 6].map((i) => (
              <div key={i} className="aspect-square bg-gray-800 overflow-hidden relative group cursor-pointer">
                <img
                  src={`https://images.unsplash.com/photo-${1514228742587 + i}-6b1558fbed20?auto=format&fit=crop&q=80&w=600`}
                  alt="Insta"
                  className="w-full h-full object-cover group-hover:scale-110 transition-transform"
                />
                <div className="absolute inset-0 bg-accent/40 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                  <FontAwesomeIcon icon={faInstagram} className="text-white text-3xl" />
                </div>
              </div>
            ))}
          </div>
        </div>
      </section>
    </main>
  );
}
