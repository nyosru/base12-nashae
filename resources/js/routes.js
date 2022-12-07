// Page Components
import Home from "./components/pages/Home";

import Vitrin from "./components/pages/Vitrin.vue";

import About from "./components/pages/About";
import Contact from "./components/pages/Contact";
import Help from "./components/pages/Help";
import Page from "./components/PageComponent.vue";

export default [

    // { path: "/", component: Home, name: 'Home' },
    // { path: "/vitrin", component: Vitrin, name: 'Vitrin' },
    // { path: "/about", component: About, name: 'About' },
    // { path: "/contact", component: Contact, name: 'Contact', params: { username: 'erina' }, meta: { type: 'page' } },
    // { path: "/contact", component: Page, name: 'Contact', params: { username: 'erina' }, meta: { type: 'page' } },
    // { path: "/contact", component: Page, name: 'Contact', meta: { type: 'page' } },

    // { path: "/", component: Page, name: 'Dobro' },
    // { path: "/dobro", component: Page, name: 'Dobro' },
    { path: "/about", component: Page, name: 'About' },
    { path: "/documents", component: Page, name: 'Documents' },
    { path: "/trebs", component: Page, name: 'Trebs' },
    { path: "/balance", component: Page, name: 'Balance' },
    { path: "/contacts", component: Page, name: 'Contact' },

    { path: "/", component: Vitrin, name: 'Vitrin' },
    { path: '/:any', redirect: { name: 'Vitrin' } }


    // { path: "/:any", component: Vitrin, name: 'Vitrin' },
    // { path: "/:any", component: Vitrin, name: 'Vitrin' },
    // { path: "/index", component: Vitrin, name: 'Vitrin2' },
    // { path: "/help", component: Help, name: 'Help' },
];