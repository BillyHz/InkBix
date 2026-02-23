export async function POST(request) {
    try {
        const data = await request.json();

        // In a real scenario, you would send an email or save to DB here.
        console.log("Contact API received:", data);

        return new Response(
            JSON.stringify({
                success: true,
                message: "¡Mensaje recibido! Nos pondremos en contacto pronto."
            }),
            {
                status: 200,
                headers: { "Content-Type": "application/json" }
            }
        );
    } catch (error) {
        return new Response(
            JSON.stringify({ success: false, message: "Error al procesar el mensaje." }),
            {
                status: 500,
                headers: { "Content-Type": "application/json" }
            }
        );
    }
}
