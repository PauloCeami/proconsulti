
<template>
  <div>
    <TheHeaderEmpresa />

    <div class="container-sm">
      <div class="row">
        <div class="col"></div>
        <div class="col">
          <form class="form-control">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Email</label
              >
              <input
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
                type="password"
                class="form-control"
                id="exampleFormControlInput1"
              />
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
        <div class="col"></div>
      </div>
    </div>
  </div>
</template>

<script>
import TheHeaderEmpresa from "@/components/TheHeaderEmpresa.vue";

export default {
  name: "FormLoginVue",

  components: {
    TheHeaderEmpresa,
  },
};
</script>