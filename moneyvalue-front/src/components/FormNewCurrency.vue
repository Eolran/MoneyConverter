<script setup>
import { ref } from "vue";
import { createCurrency } from "../services/admin.service";

    const form = ref({name:null, code:null})
    function handleCreate() {
        const newCurrData = {
            "name": form.value.name,
            "code": form.value.code
        }
        createCurrency(newCurrData.name, newCurrData.code);
    }
</script>

<template>
    <div class="row main-container mx-auto">
        <div class="row title-container no-gutters">
            <div class="col-10">
                <h1 class="title">Add a new Currency</h1>
            </div>
        </div>

        <div class="row">
            <!-- input field 1 -->
            <div class="col">
                <h2>Nom de la Monnaie</h2>
                <v-text-field v-model="form.name" id="currencyName" class="currency-input" />
            </div>
            <!-- input field 2 -->
            <div class="col">
                <h2>Code de la monnaie</h2>
                <v-text-field v-model="form.code" id="currencyCode" class="currency-input" />
            </div>
        </div>

        <button v-on:click="handleCreate()">Create</button>

    </div>
</template>