"use client";

import { useForm } from "react-hook-form";
import { useState } from "react";
import { motion } from "framer-motion";

const ContactForm = () => {
    const {
        register,
        handleSubmit,
        formState: { errors },
        reset,
    } = useForm();

    const [submitted, setSubmitted] = useState(false);

    const onSubmit = async (data) => {
        // Simulated API call
        console.log("Form Data:", data);
        setSubmitted(true);
        reset();
        setTimeout(() => setSubmitted(false), 5000);
    };

    return (
        <div className="bg-white p-8 md:p-12 rounded-3xl shadow-2xl border border-gray-100">
            <h3 className="text-2xl font-heading font-bold text-dark mb-8">Envíanos un mensaje</h3>

            {submitted ? (
                <motion.div
                    initial={{ opacity: 0, scale: 0.9 }}
                    animate={{ opacity: 1, scale: 1 }}
                    className="bg-green-50 border border-green-200 text-green-700 p-6 rounded-2xl text-center"
                >
                    <p className="font-bold text-lg mb-2">¡Mensaje enviado con éxito!</p>
                    <p className="text-sm">Nos pondremos en contacto contigo en las próximas 2 horas.</p>
                </motion.div>
            ) : (
                <form onSubmit={handleSubmit(onSubmit)} className="space-y-6">
                    <div className="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div className="space-y-2">
                            <label className="text-sm font-bold text-gray-700 ml-1">Nombre Completo</label>
                            <input
                                {...register("name", { required: "Este campo es requerido" })}
                                placeholder="Ej: Juan Pérez"
                                className={`w-full px-5 py-4 rounded-xl border-2 bg-gray-50/50 focus:bg-white focus:outline-none transition-all ${errors.name ? "border-red-400" : "border-gray-200 focus:border-accent"
                                    }`}
                            />
                            {errors.name && <span className="text-red-500 text-xs ml-1">{errors.name.message}</span>}
                        </div>

                        <div className="space-y-2">
                            <label className="text-sm font-bold text-gray-700 ml-1">Correo Electrónico</label>
                            <input
                                {...register("email", {
                                    required: "Este campo es requerido",
                                    pattern: {
                                        value: /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,}$/i,
                                        message: "Email inválido"
                                    }
                                })}
                                placeholder="juan@correo.com"
                                className={`w-full px-5 py-4 rounded-xl border-2 bg-gray-50/50 focus:bg-white focus:outline-none transition-all ${errors.email ? "border-red-400" : "border-gray-200 focus:border-accent"
                                    }`}
                            />
                            {errors.email && <span className="text-red-500 text-xs ml-1">{errors.email.message}</span>}
                        </div>
                    </div>

                    <div className="space-y-2">
                        <label className="text-sm font-bold text-gray-700 ml-1">¿Qué producto te interesa?</label>
                        <select
                            {...register("product")}
                            className="w-full px-5 py-4 rounded-xl border-2 border-gray-200 bg-gray-50/50 focus:bg-white focus:border-accent focus:outline-none transition-all"
                        >
                            <option value="textil">Camisetas / Textil</option>
                            <option value="ceramica">Tazas / Cerámica</option>
                            <option value="accesorios">Accesorios / Regalos</option>
                            <option value="corp">Pack Corporativo</option>
                            <option value="otro">Otro / Especial</option>
                        </select>
                    </div>

                    <div className="space-y-2">
                        <label className="text-sm font-bold text-gray-700 ml-1">Tu Mensaje / Idea</label>
                        <textarea
                            {...register("message", { required: "Por favor, cuéntanos tu idea" })}
                            rows="5"
                            placeholder="Cuéntanos qué tienes en mente, cantidades, colores, etc."
                            className={`w-full px-5 py-4 rounded-xl border-2 bg-gray-50/50 focus:bg-white focus:outline-none transition-all ${errors.message ? "border-red-400" : "border-gray-200 focus:border-accent"
                                }`}
                        ></textarea>
                        {errors.message && <span className="text-red-500 text-xs ml-1">{errors.message.message}</span>}
                    </div>

                    <motion.button
                        whileHover={{ scale: 1.02 }}
                        whileTap={{ scale: 0.98 }}
                        type="submit"
                        className="w-full py-5 bg-accent-gradient text-white rounded-xl font-bold text-lg shadow-xl shadow-accent/20 transition-all"
                    >
                        Enviar Solicitud
                    </motion.button>
                </form>
            )}
        </div>
    );
};

export default ContactForm;
