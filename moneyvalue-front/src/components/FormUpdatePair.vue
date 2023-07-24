<script setup>
import { ref } from 'vue';
import { updatePair } from '../services/admin.service';

    const form = ref({rate:null})
    const updateId = location.href.split("?=")[1];
    
    function handleUpdate(id, rate) {
        updatePair(id, rate)

        setTimeout(2000, location.href = "/admin");
    }    
</script>

<style>

</style>

<template>
    <div class="row main-container mx-auto">
        <div class="row title-container no-gutters">
            <div class="col-10">
                <h1 class="title">Mettre à jour le taux de conversion d'une paire.</h1>
            </div>
        </div>
        
        <div class="row">
            <!-- input field 1 -->
            <div class="col">
                <h2>Modifier le taux</h2>
                <input v-model="form.rate" id="rateUpdate" class="currency-input">
            </div>
        </div>

        <button v-on:click="handleUpdate(updateId, form.rate)">Modifier</button>
    </div>
</template>