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
                <h1>Living Art in New Landscape</h1>
                <countdown :time="time" :interval="100" tag="p">
                    <template slot-scope="props"><h1>{{ props.days }} : {{ props.hours }} : {{ props.minutes }} : {{ props.seconds }}</h1></template>
                </countdown>
            </div>
            <div class="signup">
                <a class="link" href="/signmeup">SIGN ME UP > > ></a>
                <p>To get up-to-date news</p>
            </div>
            <div class="picture">
                <img src="/images/image1.png" alt="Image1">
            </div>
            <!-- <p>Copyright 2020. Mindanao Art</p> -->
            <div class="container">
                <p>Copyright 2020. Mindanao Art</p>
            </div>
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
        justify-items: stretch;
        grid-template-areas: 
            "logo picture"
            "time picture"
            "signup picture";
    }

    .logo { grid-area: logo;}
    .time { grid-area: time;}
    .signup { grid-area: signup;}
    .picture { grid-area: picture;}

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
