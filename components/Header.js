"use client";

import { useState, useEffect } from "react";
import Link from "next/link";
import { usePathname } from "next/navigation";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faBars, faXmark } from "@fortawesome/free-solid-svg-icons";
import { motion, AnimatePresence } from "framer-motion";

const Header = () => {
    const [isOpen, setIsOpen] = useState(false);
    const [scrolled, setScrolled] = useState(false);
    const pathname = usePathname();

    useEffect(() => {
        const handleScroll = () => {
            setScrolled(window.scrollY > 50);
        };
        window.addEventListener("scroll", handleScroll);
        return () => window.removeEventListener("scroll", handleScroll);
    }, []);

    const navLinks = [
        { name: "Inicio", href: "/" },
        { name: "Servicios", href: "/servicios" },
        { name: "Contacto", href: "/contacto" },
    ];

    return (
        <header
            className={`fixed top-0 left-0 w-full z-50 transition-all duration-300 ${scrolled ? "bg-white/90 backdrop-blur shadow-md h-16" : "bg-transparent h-20"
                }`}
        >
            <div className="container mx-auto px-4 h-full flex items-center justify-between">
                {/* Logo */}
                <Link href="/" className="text-2xl font-heading font-bold flex items-center gap-1">
                    <span className={scrolled ? "text-dark" : "text-white"}>Ink</span>
                    <span className="text-accent">Bix</span>
                </Link>

                {/* Desktop Nav */}
                <nav className="hidden md:flex items-center space-x-8">
                    {navLinks.map((link) => (
                        <Link
                            key={link.name}
                            href={link.href}
                            className={`text-sm font-medium transition-colors hover:text-accent ${pathname === link.href ? "text-accent" : scrolled ? "text-dark" : "text-white"
                                }`}
                        >
                            {link.name}
                        </Link>
                    ))}
                    <Link
                        href="/contacto"
                        className="bg-accent-gradient text-white px-6 py-2 rounded-full font-bold shadow-lg shadow-accent/20 hover:scale-105 transition-all text-sm"
                    >
                        Personaliza Ahora
                    </Link>
                </nav>

                {/* Mobile Toggle */}
                <button
                    className={`md:hidden text-2xl focus:outline-none ${scrolled ? "text-dark" : "text-white"
                        }`}
                    onClick={() => setIsOpen(!isOpen)}
                >
                    <FontAwesomeIcon icon={isOpen ? faXmark : faBars} />
                </button>
            </div>

            {/* Brand Line */}
            <div className="h-[2px] w-full bg-gradient-to-r from-primary via-accent to-secondary opacity-70"></div>

            {/* Mobile Menu */}
            <AnimatePresence>
                {isOpen && (
                    <motion.div
                        initial={{ opacity: 0, height: 0 }}
                        animate={{ opacity: 1, height: "auto" }}
                        exit={{ opacity: 0, height: 0 }}
                        className="md:hidden bg-white overflow-hidden shadow-xl"
                    >
                        <div className="flex flex-col p-6 space-y-4">
                            {navLinks.map((link) => (
                                <Link
                                    key={link.name}
                                    href={link.href}
                                    className={`text-lg font-medium ${pathname === link.href ? "text-accent" : "text-dark"
                                        }`}
                                    onClick={() => setIsOpen(false)}
                                >
                                    {link.name}
                                </Link>
                            ))}
                            <Link
                                href="/contacto"
                                className="bg-accent-gradient text-white px-6 py-3 rounded-xl shadow-lg shadow-accent/20 text-center font-bold"
                                onClick={() => setIsOpen(false)}
                            >
                                Personaliza Ahora
                            </Link>
                        </div>
                    </motion.div>
                )}
            </AnimatePresence>
        </header>
    );
};

export default Header;
