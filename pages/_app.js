import { Poppins, Roboto } from "next/font/google";
import "@/styles/globals.css";
import Header from "@/components/Header";
import Footer from "@/components/Footer";

// FontAwesome CSS fix for Next.js
import "@fortawesome/fontawesome-svg-core/styles.css";
import { config } from "@fortawesome/fontawesome-svg-core";
config.autoAddCss = false;

const poppins = Poppins({
    variable: "--font-heading",
    subsets: ["latin"],
    weight: ["700"],
});

const roboto = Roboto({
    variable: "--font-body",
    subsets: ["latin"],
    weight: ["400", "500"],
});

export default function App({ Component, pageProps }) {
    return (
        <div className={`${poppins.variable} ${roboto.variable} font-body antialiased bg-light min-h-screen flex flex-col`}>
            <Header />
            <Component {...pageProps} />
            <Footer />
        </div>
    );
}
