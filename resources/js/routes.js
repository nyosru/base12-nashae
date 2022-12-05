// Page Components
import Home from "./components/pages/Home";
import Vitrin from "./components/pages/Vitrin";
import About from "./components/pages/About";
import Contact from "./components/pages/Contact";
import Help from "./components/pages/Help";

export default [
    { path: "/", component: Home, name: 'Home' },
    { path: "/vitrin", component: Vitrin, name: 'Vitrin' },
    { path: "/about", component: About, name: 'About' },
    { path: "/contact", component: Contact, name: 'Contact' },
    { path: "/help", component: Help, name: 'Help' },
];