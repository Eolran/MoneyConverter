<script setup>
    import { ref } from "vue";
    import getPairs, { getCurrencies } from "../services/currencies.service";
    import { deleteCurr, deletePair, updatePair } from "../services/admin.service";
import router from "../router";
    
    const currenciesData = ref(null)
    getCurrencies().then((data) => {
        currenciesData.value = data;
    })
    const pairsData = ref(null)
    getPairs().then((data) => {
        pairsData.value = data;
    })


    function handleCurrDelete(id) {
        deleteCurr(id);
        console.log(id);
    }
    function handlePairDelete(id) {
        deletePair(id);
        console.log(id);
    }
    function handlePairUpdate(id) {
        router.push(`/admin/form/update?=${id}`)
    }

    function Logout() {
        sessionStorage.clear()
        location.href = "/"
    }
</script>

<style>
    table {
        width: 100%;
        border: 1px solid black;
        padding: 1em;
        text-align: left;
    }

    thead {
        border: 1px solid black;
        width: 100%;
    }

    tbody {
        border: 1px solid black;
        width: 100%;
    }

    td {
        margin: 10px;
    }

    button {
        background-color: gray;
        padding: 5px;
        color: rgb(240, 240, 240);
        border-radius: 5px;
        border: 1px gray solid;
    }
    button:hover {
        transition: 1s;
        background-color: white;
        color: black;
        border: 1px black solid;
    }

</style>

<template>
    <div class="row main-container mx-auto">
        <div class="row title-container no-gutters">
            <div style="display: flex; flex-direction: row; justify-content: space-between;" class="col-10">
                <h1 class="title">Admin</h1>
                <button v-on:click="Logout()">
                    Déconnexion
                </button>
            </div>
        </div>
        
        <div class="row">
            <div style="margin-bottom: 15px;">
                <table>
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Code</th>   
                            <th>ADMIN</th>
                        </tr>
                    </thead>
                    <tbody v-for="currency in currenciesData">
                        <tr>
                            <td>{{ currency.name }}</td>
                            <td>{{ currency.currency }}</td>
                            <td><button v-on:click="handleCurrDelete(currency.id)">Supprimer</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Paire</th>
                            <th>Taux de conversion</th>
                            <th>Décompte</th>
                            <th>ADMIN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="pair in pairsData">
                            <td>{{ pair.from }} - {{ pair.to }}</td>
                            <td>{{ pair.rate }}</td>
                            <td>{{ pair.count }}</td>
                            <td><button v-on:click="handlePairUpdate(pair.id)">Modifier</button></td>
                            <td><button v-on:click="handlePairDelete(pair.id)">Supprimer</button></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="/admin/form/create"><button style="margin: 15px;">Ajouter une paire</button></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>