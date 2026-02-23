import Head from "next/head";
import ContactForm from "@/components/ContactForm";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faWhatsapp, faFacebook, faInstagram, faTiktok } from "@fortawesome/free-brands-svg-icons";
import { faMapMarkerAlt, faPhone, faEnvelope, faClock } from "@fortawesome/free-solid-svg-icons";
import { motion } from "framer-motion";

const ContactoPage = () => {
    const contactInfo = [
        { icon: faMapMarkerAlt, title: "Ubicación", content: "Heredia Centro, 100m Norte de la Iglesia principal." },
        { icon: faWhatsapp, title: "WhatsApp", content: "+506 8877-6655", link: "https://wa.me/50688776655" },
        { icon: faEnvelope, title: "Email", content: "hola@inkbix.com" },
        { icon: faClock, title: "Horario", content: "Lun-Vie: 9am - 6pm / Sab: 9am - 2pm" }
    ];

    return (
        <>
            <Head>
                <title>Contacto | InkBix</title>
            </Head>
            <main className="min-h-screen bg-white">
                <div className="h-20 bg-dark"></div>

                {/* Hero Section */}
                <section className="py-24 bg-dark relative">
                    <div className="absolute inset-0 opacity-30 bg-[url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3?auto=format&fit=crop&q=80&w=1920')] bg-cover bg-center"></div>
                    <div className="container mx-auto px-4 relative z-10 text-center">
                        <h1 className="text-4xl md:text-6xl font-heading font-bold text-white mb-4">Contacto</h1>
                        <p className="text-gray-400 max-w-xl mx-auto">¿Listo para empezar? Estás a un mensaje de personalizar tus productos favoritos.</p>
                    </div>
                </section>

                {/* Content Section */}
                <section className="py-24">
                    <div className="container mx-auto px-4">
                        <div className="grid grid-cols-1 lg:grid-cols-2 gap-16">
                            {/* Info Column */}
                            <div className="space-y-12">
                                <div>
                                    <h2 className="text-3xl font-heading font-bold text-dark mb-6">Información de Contacto</h2>
                                    <p className="text-gray-500 text-lg">Visítanos o escríbenos directamente. Respondemos a la brevedad para asesorarte.</p>
                                </div>

                                <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    {contactInfo.map((info, i) => (
                                        <motion.div
                                            key={i}
                                            whileHover={{ y: -5 }}
                                            className="p-6 bg-light rounded-2xl border border-gray-100 hover:border-accent transition-all group"
                                        >
                                            <FontAwesomeIcon icon={info.icon} className="text-2xl text-accent mb-4 group-hover:scale-110 transition-transform" />
                                            <h4 className="font-bold text-dark mb-2">{info.title}</h4>
                                            <p className="text-gray-500 text-sm whitespace-pre-line">{info.content}</p>
                                            {info.link && (
                                                <a href={info.link} target="_blank" className="text-accent text-xs font-bold mt-2 inline-block">Enviar mensaje →</a>
                                            )}
                                        </motion.div>
                                    ))}
                                </div>

                                <div className="space-y-4">
                                    <h4 className="font-bold uppercase tracking-widest text-xs text-gray-400">Nuestras Redes</h4>
                                    <div className="flex space-x-4">
                                        {[faFacebook, faInstagram, faTiktok].map((icon, i) => (
                                            <a key={i} href="#" className="w-12 h-12 rounded-xl bg-dark text-white flex items-center justify-center hover:bg-accent hover:-translate-y-1 transition-all shadow-lg">
                                                <FontAwesomeIcon icon={icon} className="text-lg" />
                                            </a>
                                        ))}
                                    </div>
                                </div>
                            </div>

                            {/* Form Column */}
                            <ContactForm />
                        </div>
                    </div>
                </section>

                {/* Map Section */}
                <section className="h-[500px] w-full bg-gray-100 grayscale hover:grayscale-0 transition-all duration-700">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.351475171736!2d-84.11651!3d9.99823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e980f7727145%3A0x6bba31d167909c!2sHeredia%20Centro!5e0!3m2!1ses-419!2scr!4v1700000000000!5m2!1ses-419!2scr"
                        width="100%"
                        height="100%"
                        style={{ border: 0 }}
                        allowFullScreen=""
                        loading="lazy"
                    ></iframe>
                </section>
            </main>
        </>
    );
};

export default ContactoPage;
