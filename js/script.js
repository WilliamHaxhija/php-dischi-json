const { createApp } = Vue

createApp({
  data() {
    return {
        albums: [],
        singleAlbum: {}
    };
  },
  methods: {
    getContentFromApi() {
        axios.get('server.php')
        .then((response) => {
            this.albums = response.data;
        });
    },
    getSingleContentFromApi(index) {
        const queryParams = {
            discIndex: index
        }
        axios.get('server.php', {
            params: queryParams
        }).then((response) => {
            this.singleAlbum = response.data;
        });
    },
    showClickedAlbum() {
        this.clickedAlbum = document.querySelector('#active');
        this.clickedAlbum.classList.add('d-flex');
        this.clickedAlbum.classList.remove('d-none');
    },
    hideClickedAlmbum() {
        this.clickedAlbum = document.querySelector('#active');
        this.clickedAlbum.classList.add('d-none');
        this.clickedAlbum.classList.remove('d-flex');
    }
  },
  mounted () {
    this.getContentFromApi()
  }
}).mount('#app')