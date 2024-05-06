const { createApp } = Vue

createApp({
  data() {
    return {
        albums: []
    };
  },
  methods: {
    getContentFromApi() {
        axios.get('server.php')
        .then((response) => {
            this.albums = response.data;
            console.log(this.albums);
        });
    }
  },
  mounted () {
    this.getContentFromApi()
  }
}).mount('#app')