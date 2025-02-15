import './bootstrap';
import '../css/app.css'
import '../css/common.css'

import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
import {ZiggyVue} from '../../vendor/tightenco/ziggy'
import Layout from "./Layouts/Layout.vue";

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'

/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

/* import specific icons */
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import AdminLayout from './Layouts/BackPanel/AdminLayout.vue';

/* add icons to the library */
library.add(fas,far,fab)

createInertiaApp({
    // title: (title) => `Rolpali Sewasamaj ${title}`,
    title: (title) => `${title}`,
    resolve: (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", { eager: true });
    
        let page = pages[`./Pages/${name}.vue`];

        // Check if the page is part of the admin panel
        if (name.startsWith("BackPanel/")) {
            page.default.layout = page.default.layout || AdminLayout;
        } else {
            page.default.layout = page.default.layout || Layout; // Default layout
        }
    
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue)
            .component("Head", Head)
            .component("Link", Link)
            .component("font-awesome-icon", FontAwesomeIcon)
            .mount(el);
    },
    progress: {
        color: "#0469A8",
        includeCSS: true,
        showSpinner: false,
    },
});