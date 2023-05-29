/**
 * Здесь определяется коллекция Vue компонентов для модуля vueInvoker
 * Помимо "статичных" компонентов возможна также загрузка динамических "по требованию"
 *
 * import StaticComponent from './components/StaticComponent'
 * export default {
 *  StaticComponent,
 *  DynamicComponent: () => import('./components/DynamicComponent.vue')
 * };
 *
 */

import DemoApp from './components/DemoApp.vue';

export default {
    DemoApp,
};