<template id="login_page" >
  <div class="container" style="margin-top:20%">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card card-default">
                  <div class="card-header" style="margin-bottom:20px"><center><h1>Login</h1></center></div>

                  <div class="card-body">
                      <form method="POST" v-on:submit.prevent = "loginUser">
                          <div class="form-group row">
                              <label for="email" class="col-sm-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="input-group col-md-6">
                                <span class="input-group-addon"><span class="oi oi-dashboard"></span></span>
                                <input id="email" v-model="login.email" type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="input-group col-md-6">
                                <span class="input-group-addon"><span class="fi-briefcase"></span></span>
                                <input id="password" v-model="login.password" type="password" class="form-control"  placeholder="Password" name="password" required>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4" style="margin-bottom:13px">
                                  <button type="submit" class="btn-sm btn btn-outline-primary">
                                      Login
                                  </button>

                                  <router-link class="btn-sm btn btn btn-outline-info" v-bind:to="{path: '/register_page'}">
                                      <span class="glyphicon glyphicon-plus"></span>
                                      Register
                                  </router-link>

                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
</template>

<script>
export default{
  data: function() {
    return {login: {email: '', password: ''}}
  },
  methods: {
    loginUser: function(){
      let uri = 'http://127.0.0.1:8000/login';
      Axios.post(uri, this.login).then((response) => {
        this.$router.push({name: 'Listposts'})
      }).catch(function (error){
        console.log(error);
      });
    }
  }
}
</script>
