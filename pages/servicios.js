import Head from "next/head";
import { motion } from "framer-motion";
import ServiceCard from "@/components/ServiceCard";
import Link from "next/link";
import { useState } from "react";

const ServiciosPage = () => {
    const [activeTab, setActiveTab] = useState("all");

    const categories = [
        { id: "all", name: "Todos" },
        { id: "textil", name: "Textil" },
        { id: "ceramica", name: "Cerámica" },
        { id: "acc", name: "Accesorios" },
        { id: "corp", name: "Corporativo" },
    ];

    const products = [
        { title: "Camiseta Premium", category: "textil", catName: "Textil", image: "https://images.unsplash.com/photo-1521572163474-6864f9cf17ab", desc: "Algodón suave con impresión HD de alta durabilidad." },
        { title: "Taza de 11oz", category: "ceramica", catName: "Cerámica", image: "https://images.unsplash.com/photo-1514228742587-6b1558fbed20", desc: "Acabado brillante, apta para lava-vajillas y microondas." },
        { title: "Taza Mágica", category: "ceramica", catName: "Cerámica", image: "https://images.unsplash.com/photo-1517142089942-ba376ce32a2e", desc: "Revela tu diseño con el calor. ¡Sorpresa garantizada!" },
        { title: "Cojín Artístico", category: "textil", catName: "Textil", image: "https://images.unsplash.com/photo-1584100914186-dc244b4e2d21", desc: "Cierre invisible y tacto aterciopelado para tu hogar." },
        { title: "Botella Deportiva", category: "acc", catName: "Accesorios", image: "https://images.unsplash.com/photo-1602143399827-bd9596a62f77", desc: "Aluminio ligero, ideal para el gimnasio o la oficina." },
        { title: "Llavero Acrílico", category: "acc", catName: "Accesorios", image: "https://images.unsplash.com/photo-1572379371012-9710ee7bc595", desc: "Resistente a rayaduras, impreso por ambas caras." },
        { title: "Mousepad Gamer", category: "acc", catName: "Accesorios", image: "https://images.unsplash.com/photo-1620714223084-8dfacc6dfd1d", desc: "Superficie de microfibra de alta precisión para gaming." },
        { title: "Rompecabezas", category: "acc", catName: "Accesorios", image: "https://images.unsplash.com/photo-1591959800741-6e84d1667104", desc: "Impresión de alta calidad sobre cartón prensado resistente." },
        { title: "Termo de Acero", category: "ceramica", catName: "Cerámica", image: "https://images.unsplash.com/photo-1493723843671-1d655e7d772f", desc: "Conserva la temperatura por horas, tapa hermética pro." },
    ];

    const filteredProducts = activeTab === "all" ? products : products.filter(p => p.category === activeTab);

    return (
        <>
            <Head>
                <title>Servicios | InkBix</title>
            </Head>
            <main className="min-h-screen">
                {/* Header Spacer */}
                <div className="h-20 bg-dark"></div>

                {/* Hero Mini */}
                <section className="py-20 bg-dark relative overflow-hidden">
                    <div className="absolute inset-0 opacity-20 bg-[url('https://images.unsplash.com/photo-1558655146-d09347e92766?auto=format&fit=crop&q=80&w=1920')] bg-cover bg-center"></div>
                    <div className="container mx-auto px-4 relative z-10 text-center">
                        <h1 className="text-4xl md:text-6xl font-heading font-bold text-white mb-4">Nuestro Catálogo</h1>
                        <p className="text-gray-400 max-w-2xl mx-auto">Calidad superior en cada impresión. Explora nuestras opciones de personalización.</p>
                    </div>
                </section>

                {/* Filter Tabs */}
                <section className="sticky top-16 z-40 bg-white shadow-sm border-b border-gray-100">
                    <div className="container mx-auto px-4 py-4 flex items-center justify-center space-x-2 md:space-x-4 overflow-x-auto no-scrollbar">
                        {categories.map((cat) => (
                            <button
                                key={cat.id}
                                onClick={() => setActiveTab(cat.id)}
                                className={`px-6 py-2 rounded-full text-sm font-bold transition-all whitespace-nowrap ${activeTab === cat.id ? "bg-accent text-white shadow-lg shadow-accent/20" : "bg-gray-100 text-gray-600 hover:bg-gray-200"
                                    }`}
                            >
                                {cat.name}
                            </button>
                        ))}
                    </div>
                </section>

                {/* Products Grid */}
                <section className="py-20 bg-light" id="catalogo">
                    <div className="container mx-auto px-4">
                        <motion.div
                            layout
                            className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8"
                        >
                            {filteredProducts.map((product, idx) => (
                                <ServiceCard
                                    key={product.title}
                                    image={product.image}
                                    title={product.title}
                                    category={product.catName}
                                    description={product.desc}
                                />
                            ))}
                        </motion.div>
                    </div>
                </section>

                {/* Corporate Packs */}
                <section className="py-24 bg-white">
                    <div className="container mx-auto px-4">
                        <div className="text-center mb-16">
                            <h2 className="text-3xl md:text-5xl font-heading font-bold text-dark">Packs Corporativos</h2>
                            <p className="text-gray-500 mt-4">Soluciones escala para empresas y eventos especiales.</p>
                        </div>
                        <div className="grid grid-cols-1 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                            {[
                                { name: "Pack Inicio", price: "$150", items: ["10 Camisetas", "10 Tazas", "Diseño Básico"], color: "primary" },
                                { name: "Pack Business", price: "$350", items: ["25 Camisetas", "25 Tazas", "25 Mousepads", "Diseño Pro"], color: "accent", popular: true },
                                { name: "Pack Enterprise", price: "$600", items: ["50 Camisetas", "50 Termos", "10 Banners", "Entrega Gratis"], color: "dark" }
                            ].map((pack, i) => (
                                <div key={i} className={`p-10 rounded-3xl border-2 transition-all hover:shadow-2xl ${pack.popular ? "border-accent scale-105 shadow-xl relative" : "border-gray-100"
                                    }`}>
                                    {pack.popular && <div className="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-white px-4 py-1 rounded-full text-xs font-bold uppercase">Más Popular</div>}
                                    <h3 className="text-xl font-bold mb-4">{pack.name}</h3>
                                    <div className={`text-4xl font-bold mb-6 ${pack.color === 'accent' ? 'text-accent' : pack.color === 'primary' ? 'text-primary' : 'text-dark'}`}>{pack.price}</div>
                                    <ul className="space-y-4 mb-10">
                                        {pack.items.map((item, j) => <li key={j} className="text-gray-500 text-sm flex gap-2">✓ {item}</li>)}
                                    </ul>
                                    <Link href="/contacto" className={`block w-full text-center py-4 rounded-xl font-bold transition-all ${pack.color === 'accent' ? 'bg-accent text-white shadow-lg' : 'bg-gray-100 text-dark hover:bg-gray-200'
                                        }`}>Cotizar ahora</Link>
                                </div>
                            ))}
                        </div>
                    </div>
                </section>

                {/* Bottom CTA */}
                <section className="py-24 bg-dark text-white text-center">
                    <h2 className="text-3xl font-heading font-bold mb-8">¿Buscas algo diferente?</h2>
                    <Link href="/contacto" className="bg-accent-gradient inline-block px-10 py-4 rounded-full font-bold shadow-xl shadow-accent/20 hover:scale-105 transition-all">
                        Cuéntanos tu proyecto
                    </Link>
                </section>
            </main>
        </>
    );
};

export default ServiciosPage;
