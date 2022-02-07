require('./bootstrap');

    window.Vue = require('vue');
    const app = new Vue({
        el: '#app',

        data: window.analytics
    });
    Echo.channel('analytics')
    .listen('AnalyticsUpdated', (event) => {
        Object.keys(event.analytics).forEach(stat => {
            window.analytics[stat] = event.analytics[stat];
        })
    });
