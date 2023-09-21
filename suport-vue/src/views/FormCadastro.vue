<template>
  <div>
    <TheHeaderEmpresa />

    <div class="container-sm">
      <div class="row">
        <div class="col"></div>
        <div class="col">
          <form class="form-control" @submit.prevent="submitCreate()">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Nome Completo</label
              >
              <input
                v-model="usuario.nome"
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="nome completo"
              />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >CPF</label
              >
              <input
                v-model="usuario.cpf"
                type="text"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="CPF"
              />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Email</label
              >
              <input
                v-model="usuario.email"
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder="name@example.com"
              />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Senha</label
              >
              <input
                v-model="usuario.senha"
                type="password"
                class="form-control"
                id="exampleFormControlInput1"
              />
            </div>
            <div class="mb-3">
              <select v-model="usuario.tipo" class="form-select">
                <option value="CLI">CLIENTE</option>
                <option value="COL">COLABORADOR</option>
              </select>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
        <div class="col">
          <p>{{ usuario.tipo }}</p>
          <p>{{ usuario.nome }}</p>
          <p>{{ usuario.cpf }}</p>
          <p>{{ usuario.email }}</p>
        </div>
      </div>
    </div>
  </div>
</template>



  <script>
import TheHeaderEmpresa from "@/components/TheHeaderEmpresa.vue";
import { UsuarioService } from "@/Services/UsuarioService";

export default {
  name: "FormCadastro",

  components: {
    TheHeaderEmpresa,
  },

  data: function () {
    return {
      ErrorExist: false,
      usuario: {
        nome: "",
        cpf: "",
        email: "",
        senha: "",
      },

      errorMessage: {
        nome: "",
        cpf: "",
        email: "",
        senha: "",
      },
    };
  },
  created: async function () {},

  methods: {
    submitCreate: async function () {
      try {
        let response = await UsuarioService.createUsuario(this.usuario);
        if (response) {
          return this.$router.push("/login");
        } else {
          return this.$router.push("/cadastro");
        }
      } catch (error) {
        this.errorMessage = {
          nome: error.response.data.errors.nome[0],
          cpf: error.response.data.errors.cpf[0],
          email: error.response.data.errors.email[0],
        };
      }
    },
  },
};
</script>