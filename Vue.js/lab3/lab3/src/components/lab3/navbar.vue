<template>
  <div>
    <div
      class="d-flex bg-dark text-light justify-content-between align-items-baseline p-3"
    >
      <router-link :to="'/'" style="text-decoration: none">Books</router-link>
      <div class="d-flex align-items-baseline">
        <!-- <p class="mx-2">{{ wishList.items.length }}</p> -->
        <router-link :to="'/cart'" class="btn text-light fw-bold fs-4">
          <i class="fa-regular fa-heart"></i>
        </router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {},
  props: ["itemsssss"],
  // wishListVisible: {
  //   type: Boolean,
  //   required: true,
  // },
  // wishList: {
  //   type: Object,
  //   required: true,
  // },
};
</script>

<style scoped>
/* Your styles here */
</style>
