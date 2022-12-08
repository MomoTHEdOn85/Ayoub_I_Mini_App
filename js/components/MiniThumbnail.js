export default {
  name: "TheMiniThumb",

  emits: ['loadlbdata'],

  props: {
      mini: Object
  },

  template: `
  <li @click="loadLBData"><a href="#top">
      <img :src='"images/" + mini.image' alt="Mini img" style="width: 300px"></a>
      <h4 class="font white textCenter">{{mini.name}}</h4>
  </li>
  `,

  methods: {
      loadLBData() {
          this.$emit('loadlbdata', this.mini);
      }
  }
}