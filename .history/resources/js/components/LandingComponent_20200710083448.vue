<template>
    <div>
        <div id="pattern">
                <img src="/images/spattern.png" alt="">
        </div>
        <div class="container">
            <div class="logo">
                <img src="/images/logo.png" alt="Mindanao Art Logo">
            </div>
            <div class="time">
                <h2>Living Art in New Landscape</h2>
                <countdown :time="time" :interval="100" tag="p">
                    <template slot-scope="props">
                        <div id="root">
                            <h1 class="day">{{ props.days }}</h1> <p class="col">:</p>
                            <h1 class="hour">{{ props.hours }}</h1> <p  class="col">:</p>
                            <h1 class="minute">{{ props.minutes }}</h1> <p class="col">:</p>
                            <h1 class="second">{{ props.seconds }}</h1>
                            <h4 class="dayl">dd</h4>
                            <h4 class="hourl">hh</h4>
                            <h4 class="minutel">mm</h4>
                            <h4 class="secondl">ss</h4>
                        </div>
                    </template>
                </countdown>
            </div>
            <div class="signup">
                <a class="link" href="/signmeup">
                    SIGN ME UP 
                    <font-awesome-icon icon="user-secret" />
                    <font-awesome-icon :icon="['fas', 'fa-angle-right']" />
                </a>
                <p>To get up-to-date news</p>
            </div>
            <div class="picture">
                <img src="/images/image1.png" alt="Image1">
            </div>
            <p>Copyright 2020. Mindanao Art</p>
            <!-- <div class="container">
                <p>Copyright 2020. Mindanao Art</p>
            </div> -->
        </div>
    </div>
</template>

<script>
    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faUserSecret } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    import VueCountdown from '@chenfengyuan/vue-countdown';
    Vue.component(VueCountdown.name, VueCountdown);

    library.add(fa-angle-right)
 
    Vue.component('font-awesome-icon', FontAwesomeIcon)
    
    Vue.config.productionTip = false
    
    export default {
        data: function () {
            var now = new Date();
            var newYear = new Date("2020-10-01");

            return {
            counting: false,
            time: newYear - now,
            };
        },
        methods: {
            startCountdown: function () {
            this.counting = true;
            },
            handleCountdownEnd: function () {
            this.counting = false;
            },
        },
        mounted() {
        }
    }
</script>

<style>
    .container {
        margin-top: 50px;
        display: grid;
        justify-content: stretch;
        grid-template-rows: 250px 190px auto;
        grid-template-areas: 
            "logo picture"
            "time picture"
            "signup picture";
    }

    .logo { grid-area: logo;}
    .time { grid-area: time;}
    .signup { grid-area: signup;}
    .picture { grid-area: picture; justify-self: end;}

    .col{
        color: #b78032;
        font-size: 35px;
    }

    #root {
        display: grid;
        justify-items: center;
        grid-template-columns: 100px 10px 100px 10px 100px 10px 100px;
        grid-template-areas: 
            "day column1 hour column2 minute column3 second"
            "dayl . hourl . minutel . secondl";
    }

    .day { grid-area: day; font-size: 50px;}
    .hour { grid-area: hour; font-size: 50px;}
    .minute { grid-area: minute; font-size: 50px;}
    .second { grid-area: second; font-size: 50px;}
    .dayl { grid-area: dayl;}
    .hourl { grid-area: hourl;}
    .minutel { grid-area: minutel;}
    .secondl { grid-area: secondl;}

    #pattern {
        width: 100%;
        background: url('/images/spattern.png');
        background-repeat: repeat;
        background-size: 34px 27px;
    }

    .link {
        font-size: 30px;
        text-decoration: none;
        color: #b78032;
        font-weight: bold;
    }

    .link:hover{
        text-decoration: none;
        color: #5e4119;
    }
</style>
