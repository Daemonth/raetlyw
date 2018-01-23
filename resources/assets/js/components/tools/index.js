import dropdown from './global/dropdown'
import item from './global/dropdown/item.vue'

import mymenu from './global/sidebar/src/my-menu.vue'
import menuitem from './global/sidebar/src/menu-item.vue'
import mysubmenu from './global/sidebar/src/my-submenu.vue'
import BackTop from './global/backtop/src/main.vue'

const components = [
    dropdown,
    item,
    mymenu,
    menuitem,
    mysubmenu,
    BackTop
]

const install = (Vue, OPts) => {
    if (install.installed) {
        return
    }
    components.map(component => {
        Vue.component(component.name, component)
})
}

export default {
    version: '0.0.1',
    author: 'kimmy',
    install,
    dropdown,
    item,
    mymenu,
    menuitem,
    mysubmenu,
    BackTop
}
