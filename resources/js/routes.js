// Page Components
import Home from "./components/pages/Home";
import Vitrin from "./components/pages/Vitrin";
import About from "./components/pages/About";
import Contact from "./components/pages/Contact";
import Help from "./components/pages/Help";
import Page from "./components/PageComponent";

export default [
    // { path: "/", component: Home, name: 'Home' },
    { path: "/vitrin", component: Vitrin, name: 'Vitrin' },
    // { path: "/about", component: About, name: 'About' },
    // { path: "/contact", component: Contact, name: 'Contact', params: { username: 'erina' }, meta: { type: 'page' } },
    // { path: "/contact", component: Page, name: 'Contact', params: { username: 'erina' }, meta: { type: 'page' } },
    // { path: "/contact", component: Page, name: 'Contact', meta: { type: 'page' } },

    { path: "/", component: Page, name: 'Dobro' },
    { path: "/index", component: Page, name: 'Dobro' },
    { path: "/about", component: Page, name: 'About' },
    { path: "/documents", component: Page, name: 'Documents' },
    { path: "/trebs", component: Page, name: 'Trebs' },
    { path: "/contact", component: Page, name: 'Contact' },


    // { path: "/help", component: Help, name: 'Help' },
];