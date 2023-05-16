<template>
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>City</th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="student in students" :key="student.id">
        <td>{{ student.id }}</td>
        <td>{{ student.name }}</td>
        <td>{{ student.city }}</td>
      </tr>
    </tbody>
    <tfoot>
      <button
        type="button"
        class="btn btn-primary mt-3"
        data-bs-toggle="modal"
        data-bs-target="#exampleModal"
        data-bs-whatever="@mdo"
      >
        Add Student
      </button>

      <div
        class="modal fade"
        id="exampleModal"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Student</h5>
              <button
                type="button"
                class="btn-close"
                data-bs-dismiss="modal"
                aria-label="Close"
              ></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="mb-3">
                  <label for="name" class="col-form-label">Name:</label>
                  <input
                    type="text"
                    class="form-control"
                    v-model="name"
                    id="name"
                  />
                </div>
                <div class="mb-3">
                  <label for="city" class="col-form-label">City:</label>
                  <input class="form-control" v-model="city" id="city" />
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-secondary"
                data-bs-dismiss="modal"
              >
                Close
              </button>
              <button
                type="button"
                class="btn btn-primary"
                @click="addStudent(name, city)"
              >
                Save
              </button>
            </div>
          </div>
        </div>
      </div>
    </tfoot>
  </table>
</template>

<script>
import students from "../students";
export default {
  name: "studentComponent",
  data: () => ({
    students,
  }),
  methods: {
    addStudent(name, city) {
      this.students.push({
        id: this.students.length + 1,
        name,
        city,
      });
    },
  },
};
</script>

<style></style>
