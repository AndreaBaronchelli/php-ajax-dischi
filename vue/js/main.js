const app = new Vue({
    el: "#app",
    data: {
        discs: [],
        databaseAPI: window.location.href + "scripts/get_albums.php",
        filterText: "All",
        authors: [],
    },
    created() {
        axios
            .get(this.databaseAPI)
            .then((res) => {
                this.discs = res.data;
                res.data.forEach((el) => {
                    if (!this.authors.includes(el.author)) {
                        this.authors.push(el.author);
                    }
                });
            })
            .catch((err) => {
                console.log(err);
            });
    },
    methods: {
        filtering(value) {
            axios
                .get(this.databaseAPI, {
                    params: {
                        query: value,
                    },
                })
                .then((res) => {
                    this.discs = res.data;
                })
                .catch((err) => {
                    console.log(err);
                });
        },
    },
});
