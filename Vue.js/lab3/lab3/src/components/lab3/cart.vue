<template>
  <div>
    <div class="row my-2">
      <p class="text-danger text-center fw-bold">No Products to display</p>
      <div>
        <div class="container my-2">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Category</th>
                <th>Price</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in wishList" :key="item.id">
                <td>{{ item.book.id }}</td>
                <td>{{ item.book.name }}</td>
                <td>{{ item.book.author }}</td>
                <td>{{ item.book.category }}</td>
                <td>{{ formatCurrency(item.book.price) }}</td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th colspan="4">Total Price</th>
                <th colspan="2">{{ formatCurrency(getTotalPrice()) }}</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    wishList: [],
  }),
  async created() {
    let res = await fetch("http://localhost:3000/wishlist");
    let resObject = await res.json();
    this.wishList = resObject;
    console.log(resObject);
  },
  methods: {
    formatCurrency(value) {
      const formatter = Intl.NumberFormat("en-SA", {
        style: "currency",
        currency: "SAR",
      });
      return formatter.format(value);
    },
    getTotalPrice() {
      let totalPrice = 0;
      for (const item of this.wishList) {
        totalPrice += item.book.price;
      }
      return totalPrice;
    },
  },
};
</script>

<style scoped>
/* Your styles here */
</style>
