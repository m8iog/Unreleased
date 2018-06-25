<template>
    <div class="artist-selector">

        <input type="text" ref="input" class="form-control" placeholder="Headhunterz, Kasparov etc" v-model="search">

        <div class="w-100 list-group-dropdown" ref="dropdown" v-if="isOpen">
            <ul class="list-group">
                <li class="list-group-item d-flex align-items-center justify-content-between pointer"
                    @click="selectArtist" v-for="artist in artists" v-if="artists.length">
                    <strong>{{ artist.stage_name }}</strong>
                    <small>{{ artist.real_name }}</small>
                </li>
                <li class="list-group-item d-flex align-items-center justify-content-between pointer"
                    @click="createNewArtist" v-if="search.length > minLength">
                    <span>Create new artist "<strong>{{ search }}</strong>"..</span>
                    <i class="fas fa-fw fa-plus-circle"></i>
                </li>
            </ul>
        </div>
    </div>
</template>
<style>
    .artist-selector {
        position: relative;
    }

    .list-group-dropdown {
        z-index: 100;
        text-align: left;
    }
</style>
<script>
    export default {
        data() {
            return {
                minLength: 3,
                loading: false,
                search: "",
                selectedArtist: null,
                artists: [
                    {id: 1, stage_name: "Headhunterz", real_name: "Willem Rebergen"},
                    {id: 2, stage_name: "Noisecontrollers", real_name: "Bas Oskam"},
                    {id: 3, stage_name: "Killer Clown", real_name: "Bas Oskam"},
                ],

            }
        },
        mounted() {
            new Popper(this.$refs.input, this.$refs.dropdown, {
                placement: 'bottom',
                modifiers: {
                    offset: {
                        enabled: true,
                        offset: '0,5'
                    }
                }
            });
        },
        methods: {
            selectArtist(artist) {
                this.selectedArtist = artist;
                this.search = null;
            },
            createNewArtist() {
                this.loading = true;
                axios
                    .post("/api/artists", {
                        q: this.search
                    })
                    .then(response => {
                        this.selectedArtist = response.data;
                        this.loading = false;
                    });
            },
            searchForArtists() {
                this.loading = true;
                axios
                    .get("/api/artists", {
                        q: this.search
                    })
                    .then(response => {
                        this.artists = response.data;
                        this.loading = false;
                    });
            }
        },
        computed: {
            isOpen() {
                return (this.search.length > this.minLength) && !this.selectedArtist;
            }
        }
    }
</script>
