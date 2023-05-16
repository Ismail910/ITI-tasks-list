<template>
  <!-- <div class="container my-3">
    <header-component />
    <div class="row">
      <div class="col-4">
        <side-component />
      </div>
      <div class="col-8">
        <students-component />
      </div>
    </div>
    <footer>
      <footer-component />
    </footer> -->

  <div class="container">
    <navbarComponent items="" />
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
  name: "App",
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
