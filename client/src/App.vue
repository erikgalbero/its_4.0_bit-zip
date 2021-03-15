<template>
  <div id="app">
    
    <p>TEST DI REGISTRAZIONE</p>

    <!--Fase di registrazione-->
              <form
                method="POST"
                class=""
                action="#"  
              >
                <h1 class="font-bold text-3xl mb-3">Registrati</h1>
                <p class="mb-7 text-gray-400">
                  Benvenuto.<br />Inserisci le credenziali per cominciare.
                </p>
                
                <div class="mb-5">
                  <span
                    class="color_custom z-10 h-10 leading-snug font-normal absolute text-center absolute bg-transparent rounded text-base items-center justify-center w-9 pl-3 py-3"
                  >
                  </span>
                  <input
                    type="text"
                    name="name"
                    placeholder="NAME"
                    required
                    class="px-3 py-3 block w-full p-2.5 rounded-full bg-white border border-indigo-600 relative focus:outline-none focus:shadow-outline w-full pl-10"
                    v-model="name"
                  />
                </div>
                <div class="mb-5">
                  <input
                    type="text"
                    name="surname"
                    placeholder="SURNAME"
                    required
                    v-model="surname"
                    class="px-3 py-3 block w-full p-2.5 rounded-full bg-white border border-indigo-600 relative focus:outline-none focus:shadow-outline w-full pl-10"
                  />
                </div>

                <div class="mb-5">
                  <input
                    type="text"
                    name="phone"
                    placeholder="PHONE"
                    required
                    class="px-3 py-3 block w-full p-2.5 rounded-full bg-white border border-indigo-600 relative focus:outline-none focus:shadow-outline w-full pl-10"
                    v-model="phone"
                  />
                </div>
                
                <div class="mb-5">
                  <input
                    type="text"
                    name="email"
                    placeholder="EMAIL"
                    required
                    class="px-3 py-3 block w-full p-2.5 rounded-full bg-white border border-indigo-600 relative focus:outline-none focus:shadow-outline w-full pl-10"
                    v-model="email"
                  />
                </div>
                <div class="flex p-2 text-sm bg-white">
                  <input
                    type="checkbox"
                    required
                    class="form-checkbox h-5 w-5 text-gray-600 z-50"
                  /><span class="ml-3 text-gray-700"
                    >Accetto i
                    <a href="#"
                      ><span class="color_custom font-medium underline"
                        >PRIVACY AGREEMENT</span
                      ></a
                    ></span
                  >
                </div>
                <div class="flex justify-center">
                  <button
                    @click="create()"
                    class="active p-2 mt-4 text-white text-lg rounded-full shadow focus:outline-none"
                  >
                    REGISTRATI
                  </button>
                </div>
              </form>
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
      reason_id: '12f0b292-8322-11eb-b3ec-c85b76c9eb36',
      role_id: 1,
    };
  },
  methods: {
    async create() {
                await this.$api.post("registration", {
                  name: this.name,
                  surname: this.surname,
                  phone: this.phone,
                  email: this.email,
                  privacy_agreement: this.privacy_agreement,
                  reason_id: this.reason_id,
                  role_id: this.role_id,
                });        
          }
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
  