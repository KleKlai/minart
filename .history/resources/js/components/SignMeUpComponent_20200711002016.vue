<template>
    <div>
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <div class="container">
            <div class="left">
                <div class="root">
                </div>
            </div>
            <div class="picture">
                <img src="/images/image1.png" alt="Image1">
            </div>
        </div>
        

        <div class="container">
            <p>Copyright 2020. Mindanao Art</p>
        </div>
    </div>
</template>

<script>
    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faAngleRight } from '@fortawesome/free-solid-svg-icons'
    import { faAngleLeft } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faAngleRight)
    library.add(faAngleLeft)
    Vue.component('font-awesome-icon', FontAwesomeIcon)
    Vue.config.productionTip = false
    export default {
    }
</script>

<style lang="scss" scoped>
    
</style>