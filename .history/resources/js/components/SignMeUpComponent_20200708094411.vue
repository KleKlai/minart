<template>
        <div class="root">
            <div id="pattern">
                <img src="/images/spattern.png" alt="">
            </div>
            <div class="container">
                <div class="logo">
                    <a href="/"><img src="/images/logo.png" alt="Mindanao Art Logo"></a>
                </div>
                <div class="form">
                    <h1>Register</h1>
                    <input type="text" placeholder="Fullname">
                    <input type="email" placeholder="Email">
                    <input type="text" placeholder="Gender">
                    <input type="date" placeholder="Birthday">
                    <input type="text" placeholder="What are you? (Doctor, Lawyer, etc)">
                    <p>By signing up, you agreed to receive email notification relating to the Mindanao Art Fair.</p>
                    <button>SUBMIT >>></button>
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
    }
</script>

<style lang="scss" scoped>
    .container {
        display: grid;
        grid-template-areas: 
            "logo form picture";
    }

    .logo { grid-area: logo;}
    .form { grid-area: form;}
    .picture { grid-area: picture;}

    #pattern {
        width: 100%;
        background: url('/images/spattern.png');
        background-repeat: repeat;
        background-size: 20px 10px;
    }
</style>