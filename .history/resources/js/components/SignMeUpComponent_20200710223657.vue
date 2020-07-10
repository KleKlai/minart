<template>
    <div>
        <div id="pattern">
            <img src="/images/spattern.png" alt="">
        </div>

        <div class="container">
            <div class="left">
                <div class="root">
                    <div class="logo">
                        <a href="/"><img src="/images/logo.png" alt="Mindanao Art Logo"></a>
                    </div>
                    <div class="form">
                        <h1><a class="link" href="/"><font-awesome-icon icon="angle-left" /></a> Register</h1>
                        <input type="text" placeholder="Fullname">
                        <input type="email" placeholder="Email">
                        <input type="text" placeholder="Gender">
                        <input type="date" placeholder="Birthday">
                        <input type="text" placeholder="What are you? (Doctor, Lawyer, etc)">
                        <p>By signing up, you agreed to receive email notification relating to the Mindanao Art Fair.</p>
                        <a class="link" href="/signmeup">SUBMIT
                            <font-awesome-icon icon="angle-right" />
                            <font-awesome-icon icon="angle-right"></font-awesome-icon>
                            <font-awesome-icon icon="angle-right" /></a>
                    </div>
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
    .container {
        display: grid;
        justify-content: start;
        gap: 30px;
        
        grid-template-areas: 
            "left picture";
    }

    #pattern {
        width: 100%;
        background: url('/images/spattern.png');
        background-repeat: repeat;
        background-size: 34px 27px;
    }

    
    .root {
        margin-top: 50px;
        display: grid;
        gap: 30px;
        grid-template-areas: 
            "logo form"
    }

    .logo { grid-area: logo;}
    .form { grid-area: form;}

    input {
        padding: 5px;
        width: 100%;
        height: 40px;
        margin-bottom: 10px;

        background-color: transparent;
        border-bottom: 2px solid black;
        border: none;
        outline: none;
        border-bottom: 1px solid gray;
    }

    .back {
        font-size: 30px;
        text-decoration: none;
    }

    .link {
        font-size: 20px;
        text-decoration: none;
        color: #b78032;
        font-weight: bold;
    }

    .link:hover{
        text-decoration: none;
        color: #5e4119;
    }
</style>