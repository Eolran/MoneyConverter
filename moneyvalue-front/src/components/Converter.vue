<script setup>
    import { reactive, ref } from "vue";
    import getCurrencies from "../services/currencies.service";
    
    const currencies = ref(null)
    getCurrencies().then((data) => {
        currencies.value = data;
    })

    function convert(curr1, curr2) {
        
    }
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
                <div class="col-2">
                <select id="selectCountry1" class="select-country">
                    <option v-for="currency in currencies">{{ currency.name }}</option>
                </select>
            </div>
                <p>EUR</p>
                <input id="currencyInput" class="currency-input">
            </div>
            <!-- input field 2 -->
            <div class="col">
                <select id="selectCountry1" class="select-country">
                    <option v-for="currency in currencies">{{ currency.name }}</option>
                </select>
                <p class="">Rate: CountryRate AUD</p>
                <input class="currency-input">
            </div>
        </div>

        <button onclick="convert()">Test</button>
    </div>
</template>