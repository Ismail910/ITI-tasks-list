<template>
  <div>
    <div class="row mt-1" v-show="!wishListVisible">
      <div
        v-for="book in books"
        :key="book.id"
        class="card m-2"
        style="width: 23rem"
      >
        <img :src="book.image" class="w-100" :title="book.name" />
        <h4 class="text-center my-1">{{ book.name }}</h4>
        <p class="text-center">{{ book.author }}</p>
        <p class="text-center">{{ book.numberofpage }}</p>
        <div class="card-footer">
          <button
            class="btn btn-success"
            :disabled="book.itemExist == true"
            @click="addToWishList(book)"
          >
            Add To Cart
          </button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: () => ({
    books: [],
    wishList: [],
  }),
  async created() {
    let res = await fetch("http://localhost:3000/books");
    let resObject = await res.json();
    this.books = resObject;
    let data = await fetch("http://localhost:3000/wishlist");
    let dataObject = await data.json();
    this.wishList = dataObject;
    console.log(this.wishList);
  },
  methods: {
    addToWishList(book) {
      book.itemExist = true;
      const wishlistItem = {
        book: { ...book }, // Make a copy of the book object
      };
      fetch("http://localhost:3000/wishlist", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(wishlistItem),
      })
        .then((response) => response.json())
        .then((data) => {
          // Handle the response if needed
          console.log(data);
        })
        .catch((error) => {
          // Handle the error if needed
          console.error(error);
        });
    },
  },
};
</script>

<style scoped>
/* Your styles here */
</style>
