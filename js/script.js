var app = new Vue (
    {
        el: '#root',
        data: {
            albums: []
        },
        mounted: {
            getAlbumsFromAPI() {
                axios.get()
            }
        }
    }
);