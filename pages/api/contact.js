export default async function handler(req, res) {
    if (req.method !== "POST") {
        return res.status(405).json({ message: "Method Not Allowed" });
    }

    try {
        const data = req.body;

        // In a real scenario, you would send an email or save to DB here.
        console.log("Contact API received:", data);

        res.status(200).json({
            success: true,
            message: "¡Mensaje recibido! Nos pondremos en contacto pronto."
        });
    } catch (error) {
        res.status(500).json({ success: false, message: "Error al procesar el mensaje." });
    }
}
