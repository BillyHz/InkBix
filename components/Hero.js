"use client";

import { motion } from "framer-motion";
import Link from "next/link";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faChevronDown } from "@fortawesome/free-solid-svg-icons";

const Hero = () => {
    return (
        <section className="relative h-screen flex items-center justify-center overflow-hidden bg-dark">
            {/* Background with Overlay */}
            <div className="absolute inset-0 z-0">
                <img
                    src="https://images.unsplash.com/photo-1563906267088-b029e7101114?auto=format&fit=crop&q=80&w=1920"
                    alt="InkBix Hero"
                    className="w-full h-full object-cover opacity-40 scale-105"
                />
                <div className="absolute inset-0 bg-gradient-to-b from-dark/60 via-transparent to-dark"></div>
            </div>

            <div className="container mx-auto px-4 relative z-10 text-center">
                <motion.span
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.6 }}
                    className="inline-block py-1 px-4 rounded-full bg-accent/20 text-accent text-sm font-bold mb-6 tracking-wider border border-accent/30 uppercase"
                >
                    Heredia, Costa Rica
                </motion.span>

                <motion.h1
                    initial={{ opacity: 0, scale: 0.9 }}
                    animate={{ opacity: 1, scale: 1 }}
                    transition={{ duration: 0.8, delay: 0.2 }}
                    className="text-5xl md:text-7xl lg:text-8xl font-heading font-bold text-white mb-8 leading-tight"
                >
                    Imprimimos tus <span className="text-accent underline decoration-secondary/30">Sueños</span>
                </motion.h1>

                <motion.p
                    initial={{ opacity: 0 }}
                    animate={{ opacity: 1 }}
                    transition={{ duration: 1, delay: 0.5 }}
                    className="text-lg md:text-xl text-gray-300 max-w-3xl mx-auto mb-12"
                >
                    Sublimación textil &bull; Cerámica &bull; Accesorios &bull; Personalización para empresas y ventos.
                </motion.p>

                <motion.div
                    initial={{ opacity: 0, y: 20 }}
                    animate={{ opacity: 1, y: 0 }}
                    transition={{ duration: 0.6, delay: 0.8 }}
                    className="flex flex-col sm:flex-row items-center justify-center gap-6"
                >
                    <Link
                        href="/servicios"
                        className="w-full sm:w-auto bg-accent-gradient text-white px-10 py-4 rounded-full font-bold shadow-2xl shadow-accent/40 hover:scale-105 transition-transform"
                    >
                        Ver Catálogo
                    </Link>
                    <Link
                        href="/contacto"
                        className="w-full sm:w-auto border-2 border-white/30 text-white px-10 py-4 rounded-full font-bold hover:bg-white hover:text-dark transition-all backdrop-blur-sm"
                    >
                        Personaliza Ahora
                    </Link>
                </motion.div>
            </div>

            {/* Scroll Indicator */}
            <motion.div
                animate={{ y: [0, 10, 0] }}
                transition={{ duration: 2, repeat: Infinity }}
                className="absolute bottom-10 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-40"
            >
                <span className="text-white text-xs font-bold uppercase tracking-widest">Scroll</span>
                <FontAwesomeIcon icon={faChevronDown} className="text-white" />
            </motion.div>
        </section>
    );
};

export default Hero;
