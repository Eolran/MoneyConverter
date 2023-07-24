<script setup>
import Login from '../../components/Login.vue'
import Admin from '../../components/Admin.vue'

let authCheck = null;
if (sessionStorage.getItem("authToken") === null) {
    sessionStorage.setItem("authToken", "")
} else {
    authCheck = sessionStorage.getItem("authToken");
}
</script>

<template>
    <main v-if="authCheck == 'err failed' || authCheck == '' || authCheck == null ">
        <Login />
    </main>
    <main v-else>
        <Admin />
    </main>
</template>