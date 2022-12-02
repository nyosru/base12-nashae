// Page Components
import Home from "./views/pages/Home";
import Vitrin from "./views/pages/Vitrin";
import About from "./views/pages/About";
import Contact from "./views/pages/Contact";
import Help from "./views/pages/Help";

export default [
    { path: "/", component: Home, name: 'Home' },
    { path: "/vitrin", component: Vitrin, name: 'Vitrin' },
    { path: "/about", component: About, name: 'About' },
    { path: "/contact", component: Contact, name: 'Contact' },
    { path: "/help", component: Help, name: 'Help' },
];