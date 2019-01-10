<template id="post-list">
    <div class="row">
        <div class="pull-right" style="margin-left:15px">
            <b-link class="btn btn-xs btn-primary" v-bind:to="{path: '/add-post'}">
                <span class="glyphicon glyphicon-plus"></span>
                Add new Post
            </b-link>
        </div>
        </br></br>

        <b-container class="bv-example-row">
            <b-row>
              <div v-for="(post, index) in filteredPosts">
                <b-col>
                    <b-card title=""
                            img-src="https://lorempixel.com/600/300/food/5/"
                            img-alt="Image"
                            img-top
                            tag="article"
                            style="max-width: 20rem;"
                            class="mb-2">
                        <p class="card-text">
                          {{post.body}}
                        </p>
                        <b-button href="#" variant="primary" v-b-tooltip.hover title="View" v-bind:to="{name: 'Viewpost', params: {id: post.id}}"><span class="glyphicon glyphicon-eye-open"></span></b-button>
                        <b-button class="btn btn-warning btn-xs" v-b-tooltip.hover title="Edit" v-bind:to="{name: 'Editpost', params: {id: post.id}}"><span class="glyphicon glyphicon-pencil"></span></b-button>
                        <b-button class="btn btn-danger btn-xs" v-b-tooltip.hover title="Delete" v-bind:to="{name: 'Deletepost', params: {id: post.id}}"><span class="glyphicon glyphicon-trash"></span></b-button>
                    </b-card>
                </b-col>
              </div>
            </b-row>
        </b-container>

        <!-- <table class="table table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th class="text-center" width="20%">Post Title</th>
                <th class="text-center" width="20%">Post Body</th>
                <th class="text-center" width="20%">Created At</th>
                <th class="text-center" width="20%">Updated At</th>
                <th class="col-md-2 text-center">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(post, index) in filteredPosts">
                <td align="center">{{index + 1}}</td>
                <td align="center">{{post.title}}</td>
                <td align="center">{{post.body}}</td>
                <td align="center">{{post.created_at}}</td>
                <td align="center">{{post.updated_at}}</td>
                <td align="center">
                    <router-link class="btn btn-info btn-xs" v-b-tooltip.hover title="View" v-bind:to="{name: 'Viewpost', params: {id: post.id}}"><span class="glyphicon glyphicon-eye-open"></span></router-link>
                    <router-link class="btn btn-warning btn-xs" v-b-tooltip.hover title="Edit" v-bind:to="{name: 'Editpost', params: {id: post.id}}"><span class="glyphicon glyphicon-pencil"></span></router-link>
                    <router-link class="btn btn-danger btn-xs" v-b-tooltip.hover title="Delete" v-bind:to="{name: 'Deletepost', params: {id: post.id}}"><span class="glyphicon glyphicon-trash"></span></router-link>
                </td>
              </tr>
            </tbody>
        </table> -->
    </div>
</template>

<script>
  export default {
    data:function() {
      return {posts: ''};
    },
    created: function() {
      let uri = 'http://127.0.0.1:8000/posts';
      Axios.get(uri).then((response) => {
        this.posts = response.data;
      });
    },
    computed: {
      filteredPosts: function(){
        if (this.posts.length) {
          return this.posts;
        }
      }
    }
  }
</script>
