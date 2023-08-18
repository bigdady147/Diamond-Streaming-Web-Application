<template>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li v-for="(item,index) in items" :class="active ? 'active' : '' " class="breadcrumb-item"><a
                :href="_.get(item,'url','#')" v-text="_.get(item,'text','')"></a></li>
        </ol>
    </nav>
</template>

<script>
export default {
    name: 'Breadcrumb',
    props: {
        items: {
            type: Array,
            required: true,
            default: () => [
                {
                    text: 'Home',
                    active: false,
                    url: '{{route(\'admin-list-supporters\')}}',
                }
            ]
        }
    },
    data() {
        return {
            // Khai báo biến data
        }
    },
    computed: {
        // Khai báo các computed properties
    },
    watch: {
        // Khai báo các watch properties
    },
    mounted() {
        // Khai báo các logic khi component được mounted
    },
    methods: {
        // Khai báo các methods
    }
}
</script>

<style scoped>
/* Khai báo các style cho component */
</style>
