<script setup>
    import router from "../router";
    import login from "../services/admin.service";

    function handleLogin() {
        const dataLogin = {
            usrnm: document.getElementById("userInput").value,
            pwrd: document.getElementById("passwordInput").value
        }
        login(dataLogin.usrnm, dataLogin.pwrd).then((response) => {
            sessionStorage.setItem("authToken", response)
            location.reload();
            }
        )
    }

    //admin@admin.com
</script>

<template>
    <div class="row main-container mx-auto">
        <div class="row title-container no-gutters">
            <div class="col-10">
                <h1 class="title">Currency Converter</h1>
            </div>
        </div>
        
        <div class="row">
            <!-- input field 1 -->
            <div class="col">
                <h2>Login</h2>
                <input type="email" id="userInput" class="currency-input">
            </div>
            <!-- input field 2 -->
            <div class="col">
                <h2>Password</h2>
                <input type="password" id="passwordInput" class="currency-input">
            </div>
        </div>

        <button v-on:click=handleLogin()>Login</button>
    </div>
</template>