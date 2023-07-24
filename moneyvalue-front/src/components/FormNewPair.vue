<script setup>
    import { ref } from 'vue';
    import { getCurrencies } from "../services/currencies.service";
    import { createPair } from "../services/admin.service";
import router from '../router';

    const currenciesData = ref(null)
    getCurrencies().then((data) => {
        currenciesData.value = data;
    })

    const form = ref({from:null, to:null, rate:null})
    function handleCreate() {
        const newPairData = {
            "from": form.value.from,
            "to": form.value.to,
            "rate": form.value.rate
        }
        createPair(newPairData.from, newPairData.to, newPairData.rate);

        setTimeout(2000, location.href = "/admin");
    }
    
</script>

<style>
    button {
        margin-top: 15px;
    }

    select {
        width: 50%;
        border: 1px #CCC solid;
        border-radius: 10px;
        height: 3em;
        padding: 0.5em;
    }

    input {
        padding: 0.5em;
    }
</style>

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
                <div class="col-2">
                    <h2>From</h2>
                    <select v-model="form.from" id="selectFromCurrency" class="select-currency">
                        <option v-for="currency in currenciesData">{{ currency.currency }}</option>
                    </select>
                    <h2>To</h2>
                    <select v-model="form.to" id="selectToCurrency" class="select-currency">
                        <option v-for="currency in currenciesData">{{ currency.currency }}</option>
                    </select>
                    <h2>Conversion Rate</h2>
                    <input v-model="form.rate" id="currencyRate" class="currency-input" />
            </div>
            
            </div>
        </div>

        <button v-on:click="handleCreate()">Ajouter une paire</button>
    </div>
</template>