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
                <h3>Living Art in New Landscape</h3>
                <countdown :time="time" :interval="100" tag="p">
                    <template slot-scope="props">
                        <div id="root">
                            <h1 class="day">{{ props.days }}</h1> <p class="column1 col">:</p>
                            <h1 class="hour">{{ props.hours }}</h1> <p  class="column2 col">:</p>
                            <h1 class="minute">{{ props.minutes }}</h1> <p class="column3 col">:</p>
                            <h1 class="second">{{ props.seconds }}</h1>
                        </div>
                    </template>
                </countdown>
            </div>
            <div class="signup">
                <a class="link" href="/signmeup">SIGN ME UP > > ></a>
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
    import VueCountdown from '@chenfengyuan/vue-countdown';
    Vue.component(VueCountdown.name, VueCountdown);
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
        font-size: 20;
    }

    #root {
        display: grid;
        justify-items: center;
        grid-template-areas: 
            "day column1 hour column2 minute column3 second"
            "dayl . hourl . minutel . secondl";
    }

    .day { grid-area: day;}
    .column1 { grid-area: column1;}
    .hour { grid-area: hour;}
    .column2 { grid-area: column2;}
    .minute { grid-area: minute;}
    .column3 { grid-area: column3;}
    .second { grid-area: second;}

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
</style>
