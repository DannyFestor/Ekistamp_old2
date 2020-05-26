<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Select Prefecture</div>

          <div class="card-body">
            <form>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example multiple select</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option v-for="prefecture in prefectures" :key="prefecture.id" :value="prefecture.id">{{ prefecture.kanji }}</option>
                </select>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["prefectures"],
  mounted() {
    console.log("Component mounted.");
    console.log(this.prefectures);
  }
};
</script>
