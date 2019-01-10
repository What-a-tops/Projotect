<template id="register_page" >
  <div class="container" style="margin-top:10%">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card card-default">
                  <div class="card-header" style="margin-bottom:20px"><center><h1>Register</h1></center></div>

                  <div class="card-body">
                      <form method="POST" v-on:submit.prevent = "createUser">
                          <div class="form-group row">
                              <label for="email" class="col-sm-4 col-form-label text-md-right">Name:</label>
                              <div class="input-group col-md-6">
                                <input id="name" v-model="user.name" type="text" class="form-control" name="name"  placeholder="Name" required autofocus>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="email" class="col-sm-4 col-form-label text-md-right">Email:</label>
                              <div class="input-group col-md-6">
                                <input id="email" v-model="user.email" type="email" class="form-control" name="email"  placeholder="Email" required autofocus>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password:</label>
                              <div class="input-group col-md-6">
                                <input id="password" v-model="user.password" type="password" class="form-control" name="password" placeholder="Password" required>
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Confirm Password:</label>
                              <div class="input-group col-md-6">
                                <input id="cpassword" v-model="user.cpassword" type="password" class="form-control" name="cpassword" placeholder="Confirm Password" required>
                              </div>
                          </div>

                          <div class="form-group row mb-0">
                              <div class="col-md-8 offset-md-4" style="margin-bottom:13px">
                                  <button type="submit" class="btn-sm btn btn-outline-primary">
                                      Save
                                  </button>

                                  <router-link class="btn-sm btn btn btn-outline-danger" v-bind:to="{path: '/'}">
                                      <span class="glyphicon glyphicon-plus"></span>
                                      Back
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
      return {user: {name:'', email: '', password: ''}}
    },
    methods: {
      createUser: function(){
        let uri = 'http://127.0.0.1:8000/user';
        Axios.post(uri, this.user).then((response) => {
          this.$router.push({name: 'Login_page'})
        }).catch(function (error){
          console.log(error);
        });
      }
    }
  }
</script>
