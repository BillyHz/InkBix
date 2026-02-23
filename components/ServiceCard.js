"use client";

import { motion } from "framer-motion";
import Link from "next/link";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faArrowRightLong } from "@fortawesome/free-solid-svg-icons";

const ServiceCard = ({ image, category, title, description, href = "/servicios" }) => {
    return (
        <motion.div
            whileHover={{ y: -10 }}
            className="group bg-gray-900/40 rounded-3xl p-5 border border-white/5 hover:border-accent/30 transition-all hover:bg-gray-900/60 backdrop-blur-sm shadow-xl"
        >
            <div className="aspect-square rounded-2xl overflow-hidden mb-6 relative">
                <img
                    src={image}
                    alt={title}
                    className="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                />
                <div className="absolute inset-0 bg-gradient-to-t from-dark/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
            </div>

            <span className="text-accent text-[10px] font-bold uppercase tracking-[0.2em] mb-2 block">
                {category}
            </span>

            <h3 className="text-xl font-heading font-bold text-white mb-3 group-hover:text-accent transition-colors">
                {title}
            </h3>

            <p className="text-gray-400 text-sm leading-relaxed mb-6">
                {description}
            </p>

            <Link
                href={href}
                className="text-white text-xs font-bold flex items-center gap-2 group-hover:text-accent transition-all uppercase tracking-widest"
            >
                <span>Saber más</span>
                <FontAwesomeIcon
                    icon={faArrowRightLong}
                    className="transition-transform group-hover:translate-x-2"
                />
            </Link>
        </motion.div>
    );
};

export default ServiceCard;
