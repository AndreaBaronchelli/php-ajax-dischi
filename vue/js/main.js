const app = new Vue({
    el: "#app",
    data: {
        discs: [],
        databaseAPI: window.location.href + "scripts/get_albums.php",
    },
    created() {
        axios
            .get(this.databaseAPI)
            .then((res) => {
                this.discs = res.data;
            })
            .catch((err) => {
                console.log(err);
            });
    },
});
