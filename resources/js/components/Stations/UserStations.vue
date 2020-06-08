<template>
    <div>
        <div v-for="station in stations" :key="station.id">
            <ruby>{{ station.station.kanji }}<rt>{{ station.station.kana}}</rt></ruby> - {{station.station.romaji}}
        </div>
    </div>
</template>

<script>
    export default {
        props: ['stations'],
        mounted() {
            console.log(this.stations)
        }
    }
</script>
