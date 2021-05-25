<template>
  <div id="shop">
    <h1>Blog</h1>
    <div class="container-md">
      <div class="posts-list">
        <Post/>
      </div>
      <div class="post-form card text-white bg-success mb-3">
        <div class="card-header">
          <h3>Add new post</h3>
        </div>
        <div class="card-body">
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title">
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Body</label>
            <textarea class="form-control" id="body" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="userId" class="form-label">User</label>
            <input type="text" id="userId" class="form-control" value="1" readonly>
          </div>
          <button type="submit" class="btn btn-light">Submit</button>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
import Post from '@/components/Post.vue'

// !!! 
// Utilitzar NOMÉS si no us surten les peticions
import postsJSON from '@/assets/posts.json'
console.log(postsJSON);
// !!!

export default {
  name: 'Blog',
  components: {
    Post
  }
}
</script>

<style scoped>
.post-form {
  text-align: left;
}
</style>