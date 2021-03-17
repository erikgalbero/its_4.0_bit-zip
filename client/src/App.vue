<template>
  <div id="app">
    
    <p>TEST DI REGISTRAZIONE</p>

    <!--Fase di registrazione-->
                <h1 class="font-bold text-3xl mb-3">Registrati</h1>
                <p class="mb-7 text-gray-400">
                  Benvenuto.<br />Inserisci le credenziali per cominciare.
                </p>
                
                <div class="mb-5">
                  <span>
                  </span>
                  <input
                    type="text"
                    name="name"
                    placeholder="NAME"
                    required
                    v-model="name"
                  />
                </div>
                <div class="mb-5">
                  <input
                    type="text"
                    placeholder="SURNAME"
                    required
                    v-model="surname"/>
                </div>

                <div class="mb-5">
                  <input
                    type="text"
                    placeholder="PHONE"
                    v-model="phone"
                  />
                </div>
                
                <div class="mb-5">
                  <input
                    type="text" v-model="email"
                  />
                </div>
                <div class="flex p-2 text-sm bg-white">
                  <input type="checkbox"/>
                    <span> Accetto i 
                      <a href="#">
                        <span>PRIVACY AGREEMENT</span>
                      </a>
                    </span>
                </div>
                  <button
                    @click="create()"
                  >
                    REGISTRATI
                  </button>
      </div>
</template>

<script>
export default {
  name: 'App',
  data() {
    return {
      name: null,
      surname: null,
      phone: null,
      email: null,
      privacy_agreement: 1,
      reason_id: '22d66437-873f-11eb-a85f-a44e3198e3e8',
      role_id: 1,
    };
  },
  methods: {
    async create() {
      const newUser = {
        name: this.name,
        surname: this.surname,
        phone: this.phone,
        email: this.email,
        privacy_agreement: this.privacy_agreement,
        reason_id: this.reason_id,
        role_id: this.role_id,
      }
      console.log(newUser);
      await this.$api.post("/registration", newUser).then(x => console.log(x));        
    }
  }
}
</script>

<style>
  