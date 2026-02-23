import Link from "next/link";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faFacebookF, faInstagram, faTiktok, faWhatsapp } from "@fortawesome/free-brands-svg-icons";
import { faLocationDot, faPhone, faEnvelope } from "@fortawesome/free-solid-svg-icons";

const Footer = () => {
    return (
        <footer className="bg-dark text-white pt-16 pb-8 border-t-4 border-accent">
            <div className="container mx-auto px-4">
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
                    {/* Branding */}
                    <div className="space-y-4">
                        <Link href="/" className="text-2xl font-heading font-bold flex items-center gap-1">
                            <span>Ink</span>
                            <span className="text-accent">Bix</span>
                        </Link>
                        <p className="text-gray-400 leading-relaxed max-w-xs">
                            Especialistas en sublimación y personalización de alta gama. Llevamos tus ideas al siguiente nivel con calidad premium.
                        </p>
                        <div className="flex space-x-4 pt-2">
                            <a href="#" className="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-accent transition-colors">
                                <FontAwesomeIcon icon={faFacebookF} />
                            </a>
                            <a href="#" className="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-accent transition-colors">
                                <FontAwesomeIcon icon={faInstagram} />
                            </a>
                            <a href="#" className="w-10 h-10 rounded-full bg-gray-800 flex items-center justify-center hover:bg-accent transition-colors">
                                <FontAwesomeIcon icon={faTiktok} />
                            </a>
                        </div>
                    </div>

                    {/* Quick Links */}
                    <div>
                        <h4 className="text-lg font-bold mb-6 font-heading">Navegación</h4>
                        <ul className="space-y-3">
                            <li><Link href="/" className="text-gray-400 hover:text-accent transition-colors">Inicio</Link></li>
                            <li><Link href="/servicios" className="text-gray-400 hover:text-accent transition-colors">Servicios</Link></li>
                            <li><Link href="/contacto" className="text-gray-400 hover:text-accent transition-colors">Contacto</Link></li>
                            <li><Link href="/servicios#catalogo" className="text-gray-400 hover:text-accent transition-colors">Catálogo</Link></li>
                        </ul>
                    </div>

                    {/* Schedule */}
                    <div>
                        <h4 className="text-lg font-bold mb-6 font-heading">Horarios</h4>
                        <ul className="space-y-3 text-gray-400">
                            <li className="flex justify-between">
                                <span>Lunes - Viernes:</span>
                                <span className="text-white">9am - 6pm</span>
                            </li>
                            <li className="flex justify-between">
                                <span>Sábados:</span>
                                <span className="text-white">9am - 2pm</span>
                            </li>
                            <li className="flex justify-between">
                                <span>Domingos:</span>
                                <span className="text-white font-medium text-accent">Cerrado</span>
                            </li>
                        </ul>
                    </div>

                    {/* Contact */}
                    <div>
                        <h4 className="text-lg font-bold mb-6 font-heading">Contacto</h4>
                        <ul className="space-y-4 text-gray-400">
                            <li className="flex gap-3">
                                <FontAwesomeIcon icon={faLocationDot} className="text-accent mt-1" />
                                <span>Heredia Centro, Costa Rica</span>
                            </li>
                            <li className="flex gap-3">
                                <FontAwesomeIcon icon={faPhone} className="text-accent mt-1" />
                                <span>+506 2233-4455</span>
                            </li>
                            <li className="flex gap-3">
                                <FontAwesomeIcon icon={faEnvelope} className="text-accent mt-1" />
                                <span>hola@inkbix.com</span>
                            </li>
                            <li className="flex gap-3">
                                <FontAwesomeIcon icon={faWhatsapp} className="text-accent mt-1 text-lg" />
                                <span>+506 8877-6655</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {/* Bottom Bar */}
                <div className="pt-8 border-t border-gray-800 text-center">
                    <p className="text-gray-500 text-sm">
                        &copy; {new Date().getFullYear()} InkBix. Todos los derechos reservados.
                    </p>
                </div>
            </div>
        </footer>
    );
};

export default Footer;
