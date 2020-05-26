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
                <select
                  class="form-control"
                  id="exampleFormControlSelect1"
                  v-model="selectedPrefecture"
                >
                  <option value="0">全国</option>
                  <option
                    v-for="prefecture in prefectures"
                    :key="prefecture.id"
                    :value="prefecture.id"
                  >{{ prefecture.kanji }}</option>
                </select>
                {{ selectedPrefecture }}
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example multiple select</label>
                <select class="form-control" id="exampleFormControlSelect1" v-model="selectedCity">
                  <option value="0">全て</option>
                  <option
                    v-for="city in filteredCities"
                    :key="city.id"
                    :value="city.id"
                  >{{ city.kanji }}</option>
                </select>
                {{ selectedCity }}
              </div>
              <div class="form-group">
                <label for="exampleFormControlSelect1">Example multiple select</label>
                <select
                  class="form-control"
                  id="exampleFormControlSelect1"
                  v-model="selectedStation"
                >
                  <option value="0">全て</option>
                  <option
                    v-for="station in filteredStations"
                    :key="station.id"
                    :value="station.id"
                  >{{ station.kanji }}</option>
                </select>
                {{ selectedStation }}
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
  data() {
    return {
      selectedPrefecture: 0,
      selectedCity: 0,
      selectedStation: 0
    };
  },
  props: ["prefectures", "cities", "stations"],
  mounted() {},
  computed: {
    filteredCities: function() {
      const selectedIndex = Number(this.selectedPrefecture);
      if (selectedIndex === 0 || selectedIndex > 47) {
        return this.cities;
      } else {
        return this.cities.filter(city => city.prefecture_id === selectedIndex);
      }
    },
    filteredStations: function() {
      const selectedPrefecture = Number(this.selectedPrefecture);
      const selectedCity = Number(this.selectedCity);
      if (selectedPrefecture > 0 && selectedCity > 0) {
        return this.stations.filter(
          station =>
            station.prefecture_id === selectedPrefecture &&
            station.city_id === selectedCity
        );
      } else if (selectedPrefecture > 0) {
          return this.stations.filter(station => station.prefecture_id === selectedPrefecture)
      } else if (selectedCity > 0) {
          return this.stations.filter(station => station.city_id === selectedCity)
      } else {
          return this.stations
      }
    }
  },
  watch: {}
};
</script>
