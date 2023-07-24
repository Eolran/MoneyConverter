<script setup>
    import { ref } from "vue";
    import getPairs from "../services/currencies.service";
    
    const pairsData = ref(null);
    const rate = ref(null);
    
    getPairs().then((data) => {
        pairsData.value = data;
    })

    function convert(convertRate) {
        rate.value = convertRate;

        if (rate.value !=null) {
            const result = document.getElementById("currencyInput").value*rate.value;

            document.getElementById("resultInput").innerHTML = result;
            document.getElementById("resultDiv").style.display = "block";
        } else {
            alert("Rentrez une valeur à convertir");
        }
    }
</script>

<style>
    h2 {
        margin-top: 1em;
    }
</style>

<template>
    <div class="row main-container mx-auto">
        <div class="row title-container no-gutters">
            <div class="col-10">
                <h1 class="title">Convertisseur</h1>
            </div>
        </div>
        
        <div class="row">
            <!-- input field 1 -->
            <div class="col">
                <div class="col-2">
                    <select v-model="rate" id="selectPairs" class="select-pairs">
                        <option v-for="pairs in pairsData" :value=pairs.rate>{{ pairs.from }} - {{ pairs.to }}</option>
                    </select>
                </div>
                <h2>Montant a convertir</h2>
                <input id="currencyInput" class="currency-input" placeholder="Entrer un montant à convertir" type="number">
                <button v-on:click="convert(rate)">Convertir</button>
            </div>
            <div id="resultDiv" style="display: none;">
                <h2>Résultat</h2>
                <span style="font-size: 24px;" id="resultInput"></span>
            </div>
        </div>
    </div>
</template>