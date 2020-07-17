<template>
    <div>
        <div id="pattern">
                <img src="/images/spattern.png" alt="">
        </div>
        <div id="data" class="container">
            <div class="row">
                <div class="col-md">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="/images/logo.png" alt="Mindanao Art Logo">
                            </div>
                            <div class="w-100"></div>
                            <div class="col">
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
                            <div class="w-100"></div>
                            <div class="col">
                                <a class="link" href="/signmeup">
                                    SIGN ME UP  
                                    <font-awesome-icon icon="angle-right" />
                                    <font-awesome-icon icon="angle-right" />
                                    <font-awesome-icon icon="angle-right" />
                                </a>
                                <p>To get up-to-date news</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <img src="/images/image1.png" alt="Image1">
                </div>
            </div>
        </div>
        <div class="container">
            <p>Copyright 2020. Mindanao Art</p>
        </div>
    </div>
</template>



<script>
    import VueCountdown from '@chenfengyuan/vue-countdown';
    Vue.component(VueCountdown.name, VueCountdown);

    import { library } from '@fortawesome/fontawesome-svg-core'
    import { faAngleRight } from '@fortawesome/free-solid-svg-icons'
    import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

    library.add(faAngleRight)
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
    #pattern {
        width: 100%;
        background: url('/images/spattern.png');
        background-repeat: repeat;
        background-size: 34px 27px;
    }

    /* #data {
        margin-top: 50px;
        display: grid;
        grid-template-rows: 220px 190px auto;
        grid-template-areas: 
            "logo picture"
            "time picture"
            "signup picture";
    }

    .logo { grid-area: logo;}
    .time { grid-area: time;}
    .signup { grid-area: signup;}
    .picture { grid-area: picture; justify-self: end;} */

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

    /* @media (max-width: 991.98px) { 
        #data {
            margin-top: 50px;
            display: grid;
            gap: 15px;
            grid-template-rows: 120px 100px auto;
            grid-template-areas: 
                "logo time"
                "logo signup"
                "logo picture";
        }

        .logo { grid-area: logo;}
        .time { grid-area: time; width: 40%;}
        .signup { grid-area: signup;}
        .picture {grid-area: picture; width: 40%;  justify-self: start;}

        #root {
            display: grid;
            justify-items: center;
            grid-template-columns: 30px 10px 30px 10px 30px 10px 30px;
            grid-template-areas: 
                "day column1 hour column2 minute column3 second"
                "dayl . hourl . minutel . secondl";
        }

        .day { grid-area: day; font-size: 25px; margin: 0;}
        .hour { grid-area: hour; font-size: 25px; margin: 0;}
        .minute { grid-area: minute; font-size: 25px; margin: 0;}
        .second { grid-area: second; font-size: 25px; margin: 0;}
        .dayl { grid-area: dayl; font-size: 10px; margin: 0;}
        .hourl { grid-area: hourl; font-size: 10px; margin: 0;}
        .minutel { grid-area: minutel; font-size: 10px; margin: 0;}
        .secondl { grid-area: secondl; font-size: 10px; margin: 0;}

        .col{
            color: #b78032;
            font-size: 15px;
            margin: 0;
        }

        .link {
            font-size: 20px;
        }
    } */
</style>
