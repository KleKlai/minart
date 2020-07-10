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
            </div>

            <countdown :time="time" :interval="100" tag="p">
                <template slot-scope="props">New Year Countdown：{{ props.days }} days, {{ props.hours }} hours, {{ props.minutes }} minutes, {{ props.seconds }}.{{ Math.floor(props.milliseconds / 100) }} seconds.</template>
            </countdown>

            <countdown :time="time" tag="p">
                <template slot-scope="props">Christmas Time Remaining: {{ props.totalDays }} days / {{ props.totalHours }} hours / {{ props.totalMinutes }} minutes / {{ props.totalSeconds }} seconds / {{ props.totalMilliseconds }} milliseconds.</template>
            </countdown>

            <button type="button" class="btn btn-secondary" :disabled="counting" @click="startCountdown">
                <countdown v-if="counting" :time="60000" @end="handleCountdownEnd">
                <template slot-scope="props">Fetch again {{ props.totalSeconds }} seconds later</template>
                </countdown>
                <span v-else>Fetch Verification Code</span>
            </button>


            <div class="signup">
                <a href="/signmeup">SIGN ME UP > > ></a>
                <p>To get up-to-date news</p>
            </div>
            <div class="picture">
                <img src="/images/image1.png" alt="Image1">
            </div>
            <p>Copyright 2020. Mindanao Art</p>
        </div>
    </div>
</template>

<script>
    export default {
        data: function () {
            var now = new Date();
            var newYear = new Date(now.getFullYear() + 1, 0, 1);

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
            // var today = new Date();
            // const cmas=new Date(today.getFullYear(), 11, 25);
            // if (today.getMonth()==11 && today.getDate()>25) 
            // {
            // cmas.setFullYear(cmas.getFullYear()+1); 
            // }  
            // const one_day=1000*60*60*24;
            // console.log(`${Math.ceil((cmas.getTime()-today.getTime())/(one_day))} days left until Christmas!`);
        }
    }
</script>

<style>
    .container {
        margin-top: 50px;
        display: grid;
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

    a {
        font-size: 30px;
        text-decoration: none;
        color: #b78032;
        font-weight: bold;
    }
</style>
