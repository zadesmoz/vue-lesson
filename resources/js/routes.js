import Logo from "./components/Logo";
import LogoSymbol from "./components/LogoSymbol";
import Colors from "./components/Colors";
import Typography from "./components/Typography";
import Mascot from "./components/Mascot";
import Illustrations from "./components/Illustrations";
import LoadersAndAnimations from "./components/LoadersAndAnimations";
import Wallpapers from "./components/Wallpapers";
import NotFound from "./components/NotFound";

export default {
    mode: "history",

    linkActiveClass: "font-bold",

    routes: [
        {
            path: "*",
            component: NotFound
        },
        {
            path: "/",
            component: Logo
        },

        {
            path: "/logo-symbol",
            component: LogoSymbol,
            name: "logosymbol"
        },
        {
            path: "/colors",
            component: Colors,
            name: "colors"
        },
        {
            path: "/typography",
            component: Typography,
            name: "typography"
        },
        {
            path: "/mascot",
            component: Mascot,
            name: "mascot"
        },
        {
            path: "/illustrations",
            component: Illustrations,
            name: "illustrations"
        },
        {
            path: "/loadersAndAnimations",
            component: LoadersAndAnimations,
            name: "loadersAndAnimations"
        },
        {
            path: "/wallpapers",
            component: Wallpapers,
            name: "wallpapers"
        }
    ]
};
