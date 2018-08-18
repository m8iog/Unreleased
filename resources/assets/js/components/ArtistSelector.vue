<template>
    <div class="artist-selector">

        <input type="hidden" name="artist_id" :value="selectedArtist.id" v-if="selectedArtist">

        <button type="button" ref="input" class="btn btn-block text-left" @click="toggleSearch">
            {{ buttonText }}
        </button>

        <div class="w-100 list-group-dropdown shadow-sm" ref="dropdown" v-show="isOpen">
            <ul class="list-group">
                <li class="list-group-item">
                    <input type="text" class="form-control" placeholder="Search for artist..." v-model="search">
                </li>
                <li class="list-group-item text-center" v-show="loading">
                    <i class="fas fa-fw fa-cog fa-spin"></i> Searching
                </li>

                <li class="list-group-item d-flex align-items-center justify-content-between pointer"
                    @click="selectArtist(artist)" v-for="artist in artists" v-if="artists.length">
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
    }
</style>
<script>
    export default {
        data() {
            return {
                isOpen: false,
                minLength: 3,
                loading: false,
                search: "",
                selectedArtist: null,
                artists: [],
            }
        },
          props: ['preselected_artist'],
        mounted() {
            new Popper(this.$refs.input, this.$refs.dropdown, {
                placement: 'bottom',
                modifiers: {
                    offset: {
                        enabled: true,
                        offset: '-200,10'
                    }
                }
            });
            if(!(this.preselected_artist === undefined)) {
              this.selectedArtist = JSON.parse(this.preselected_artist)
            }
        },
        methods: {
            toggleSearch() {
                this.isOpen = !this.isOpen;
            },
            openSearch() {
                this.isOpen = true;
            },
            closeSearch() {
                this.isOpen = false;
            },
            selectArtist(artist) {
                this.selectedArtist = artist;
                this.search = "";
                this.closeSearch();
            },
            createNewArtist() {
                this.loading = true;
                axios
                    .post("/api/artists", {
                        stage_name: this.search
                    })
                    .then(response => {
                        this.selectArtist(response.data);
                        this.loading = false;
                    });
            },
            searchForArtists: _.debounce(function () {
                this.loading = true;
                axios
                    .get("/api/artists", {
                        params: {
                            q: this.search
                        }
                    })
                    .then(response => {
                        this.artists = response.data;
                        this.loading = false;
                    });
            }, 250)
        },
        watch: {
            search(newValue, oldValue) {
                this.searchForArtists();
            }
        },
        computed: {
            buttonText() {
                if (this.selectedArtist) {
                    return this.selectedArtist.stage_name;
                }

                return "Select artist";
            }
        }
    }
</script>
