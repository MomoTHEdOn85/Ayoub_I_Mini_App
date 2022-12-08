export default {
  name: 'TheLightboxComponent',

  props: ['item'],

  emits: ['closelightbox'],

  template: `
  <section class="lightbox">
      <img @click="closeLB" href="#" src="images/closeIcon.png" class="lightbox_close">
      
      <section class="one-itemLB">
              <h2 class="underlineWhite font white lbTitle borderBottom">{{ item.name }}</h2>
              <img class="lbImg topPad" :src='"images/" + item.image' alt="Mini Img">
              <p class="lbFont">Item Specs:</p>
              <p class="lbFont">Item Specs:{{ item.specs }}</p>
              <p class="lbprice">Overall Price:{{ item.price }}</p>
              <p class="lbFontP">Lease Rate:{{ item.lease }}</p>
              <p class="lbFontP">Monthly Lease:{{ item.lease_monthly }}</p>
              <p class="lbFontP">Finance Rate:{{ item.finance }}</p>
              <p class="lbFontP">Monthly Finance:{{ item.finance_monthly }}</p>
  </section>
  `,

  methods: {
      closeLB() {
          this.$emit('closelightbox');
      }
  }
}