<template>
  <div class="container">
    <navbarComponent />
    <router-view></router-view>
  </div>
  <!-- </div> -->
</template>

<script>
import HelloWorld from "./components/HelloWorld.vue";
import footerComponent from "./components/footer.vue";
import headerComponent from "./components/header.vue";
import sideComponent from "./components/sidebar.vue";
import studentsComponent from "./components/students.vue";
import booksComponent from "./components/books.vue";
import navbarComponent from "./components/lab3/navbar.vue";

export default {
  name: "landing",
  components: {
    HelloWorld,
    footerComponent,
    headerComponent,
    sideComponent,
    studentsComponent,
    booksComponent,
    navbarComponent,
  },
};
</script>

<style></style>
