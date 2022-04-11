<template>
  <h1>CRM</h1>
  <div id="donnees">
    <button v-on:click="buttonClick" class="btn btn-primary">Récupérer les clients</button>
    <br>
    <br>
    <div class="container-modifier" id="modifier" hidden>
      <div class="names">
        <label for="nom">Nom : </label>
        <input id="nom" type="text">
        <br>
        <label for="prenom">Prénom : </label>
        <input id="prenom" type="text">
      </div>
      <br>
      <div class="adresse">
        <label>Adresse : </label>
        <input id="adresse" type="text">
        <br>
        <label>Ville : </label>
        <input id="ville" type="text">
        <br>
        <label>Code Postale : </label>
        <input id="cp" type="text">
      </div>
      <br>
      <div class="communication">
        <label>Téléphone : </label>
        <input id="tel" type="text">
        <br>
        <label>email : </label>
        <input id="email" type="text">
      </div>
    </div>
    <table class="table">
      <thead>
      <tr>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Adresse</th>
        <th>Ville</th>
        <th>Code Postal</th>
        <th>Telephone</th>
        <th>Email</th>
        <th></th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="client in clients">
        <td>{{ client.nom }}</td>
        <td>{{ client.prenom }}</td>
        <td>{{ client.adresse }}</td>
        <td>{{ client.ville }}</td>
        <td>{{ client.cp }}</td>
        <td>{{ client.telephone }}</td>
        <td>{{ client.email }}</td>
        <td>
          <button v-on:click="infoClient(client)">Modifier</button>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      clients: {},
      client: {},
    }
  },
  methods: {
    buttonClick: function () {
      axios.get('http://127.0.0.1:8000/api/clients')
          .then((res) => {
            console.log(res.data)
            this.clients = res.data
            console.log(this.clients)
          })
          .catch((err) => {
            console.log(err)
          })
    },
    infoClient: function (client) {
      this.client = client;
      document.getElementById('modifier').removeAttribute('hidden');
      document.getElementById('nom').value = client.nom;
      document.getElementById('prenom').value = client.prenom;
      document.getElementById('adresse').value = client.adresse;
      document.getElementById('cp').value = client.cp;
      document.getElementById('ville').value = client.ville;
      document.getElementById('email').value = client.email;
      document.getElementById('tel').value = client.telephone;
    }
  }
}
</script>

<style>
.container-modifier{
  display: flex;
  flex-direction: column;
  align-items: center;
  border-radius: 5%;
  background: lightblue;
}
.names{
  display: flex;
  flex-direction: row;
  align-items: center;
}
.adresse{
  display: flex;
  flex-direction: row;
  align-items: center;
}
.communication{
  display: flex;
  flex-direction: row;
  align-items: center;
}

</style>