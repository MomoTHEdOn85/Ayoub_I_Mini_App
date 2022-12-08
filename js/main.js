import MiniThumb from './components/MiniThumbnail.js';
import LightBox from './components/Lightbox.js';

(() => {
    // this imports the Vue library as a variable called Vue
  const { createApp } = Vue

  createApp({
    created() {
      // fetch the remote data here and pass it to the data object
      // './data.json' './scripts/json.php'
      fetch('./data.json')
        .then(res => res.json())
        .then(data => this.miniData = data)
          .catch(error => console.error(error));
    },

    data() {
      return {
        miniData: {},
        lbData: {},
        showLB: false
      }
    },

    components: {
      theminithumb: MiniThumb,
      thelightbox: LightBox
  },

    methods: {
      loadLightbox(mini) {
        this.lbData = mini;
        this.showLB = true;
        }
        
    }
  }).mount('#app');
})();