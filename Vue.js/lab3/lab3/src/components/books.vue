<template>
  <!-- navbar -->
  <div>
    <div
      class="d-flex bg-dark text-light justify-content-between align-items-baseline p-3"
    >
      <a
        href="#"
        style="text-decoration: none"
        @click.prevent="wishListVisible = false"
        >Books</a
      >
      <div class="d-flex align-items-baseline">
        <p class="mx-2">{{ wishList.items.length }}</p>
        <button
          class="btn text-light fw-bold fs-4"
          @click="wishListVisible = !wishListVisible"
        >
          <i class="fa-regular fa-heart"></i>
        </button>
      </div>
    </div>

    <!--end navbar-->
    <!-- main -->
    <div class="row mt-1" v-show="wishListVisible == false">
      <div
        v-for="book in books"
        :key="book.id"
        class="card m-2"
        style="width: 23rem"
      >
        <img :src="book.image" class="w-100" :title="book.name" />
        <h4 class="text-center my-1">{{ book.name }}</h4>
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <div>
              <p>Category:{{ book.category }}</p>
              <p>Author:{{ book.author }}</p>
            </div>
            <div>
              <p :class="[book.pages > 50 ? 'more' : 'less']">
                Pages:{{ book.pages }}
              </p>
              <p>Price:{{ formatCurrency(book.price) }}</p>
            </div>
          </div>
        </div>
        <div class="card-footer">
          <button class="btn btn-success" @click="addWishList(book)">
            Add to wishlist
          </button>
        </div>
      </div>
    </div>
    <!--end main-->
    <!--cart-->
    <div class="row my-2" v-show="wishListVisible">
      <p
        class="text-danger text-center fw-bold"
        v-if="wishList.items.length == 0"
      >
        No Products to display
      </p>
      <div v-else>
        <div class="container my-2">
          <table class="table table-hover table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Author</th>
                <th>Category</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Actions</th>
                <th>Total Price</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="item in wishList.items" :key="item.id">
                <td>{{ item.book.id }}</td>
                <td>{{ item.book.name }}</td>
                <td>{{ item.book.author }}</td>
                <td>{{ item.book.category }}</td>
                <td>{{ formatCurrency(item.book.price) }}</td>
                <td>{{ item.quantity }}</td>
                <td>
                  <button
                    class="btn btn-success px-2 py-2 mx-2"
                    @click="increaseQuantity(item)"
                  >
                    +</button
                  >|
                  <button
                    class="btn btn-danger px-2 py-2 mx-2"
                    @click="decreaseQuantity(item)"
                  >
                    -
                  </button>
                </td>
                <td>{{ formatCurrency(item.quantity * item.book.price) }}</td>
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
    <!-- end cart -->
  </div>
</template>

<script>
import books from "../books";
export default {
  data: () => ({
    wishListVisible: false,
    books: books,
    wishList: {
      items: [],
    },
  }),
  methods: {
    checkItem(book) {
      return this.wishList.items.some((item) => item.book.id == book.id);
    },
    increaseQuantity(item) {
      item.quantity++;
    },
    decreaseQuantity(item) {
      console.log(item.quantity);

      if (item.quantity > 1) {
        item.quantity--;
      } else {
        this.wishList.items.splice(
          this.wishList.items.findIndex((item) => item.book.id === item.id),
          1
        );
      }
    },
    addWishList(book) {
      if (this.checkItem(book)) {
        this.wishList.items.find((item) => item.book.id == book.id).quantity++;
      } else {
        this.wishList.items.push({
          book: book,
          quantity: 1,
        });
      }
    },
    getTotalPrice() {
      let result = 0;
      for (let item of this.wishList.items) {
        result += item.book.price * item.quantity;
      }
      return result;
    },
    formatCurrency(value) {
      let formatter = Intl.NumberFormat("en-SA", {
        style: "currency",
        currency: "SAR",
      });
      return formatter.format(value);
    },
  },
};
</script>

<style scoped>
.less {
  color: orange;
}
.more {
  color: green;
}
</style>
