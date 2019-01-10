<template id="post-edit">
  <div>
      <h3>Edit Post</h3>
      <form v-on:submit.prevent = "updatePost">
        <div class="form-group">
            <label for="edit-title">Title</label>
            <input id="edit-title" type="text" v-model="post.title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="edit-body">Body</label>
            <textarea v-model="post.body" row="10" class="form-control" required></textarea>
        </div>

        <button type="submit" class="btn btn-xs btn-primary">Update Post</button>
        <router-link class="btn btn-xs btn-warning" v-bind:to="'/'">Cancel</router-link>
      </form>
  </div>
</template>

<script>
    export default{
      data: function(){
        return {post: {title: '', body: ''}}
      },
      created: function(){
        let uri = 'http://127.0.0.1:8000/posts/'+this.$route.params.id+'/edit';
        Axios.get(uri).then((response) => {
          this.post = response.data;
        });
      },
      methods: {
        updatePost: function() {
          let uri = 'http://127.0.0.1:8000/posts/'+this.$route.params.id;
          Axios.patch(uri, this.post).then((response) => {
            this.$router.push({name: 'Listposts'})
          })
        }
      }
    }
</script>
