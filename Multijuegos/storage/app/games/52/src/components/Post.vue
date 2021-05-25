<template>
  <div class="post card">
    <div class="card-body">
      <h5 class="card-title">POST TITLE</h5>
      <h6 class="card-subtitle mb-2 text-muted">Posted by: <a href="#" class="author">USER ID</a></h6>
      <p class="card-text">POST BODY</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Post'
}
</script>

<style scoped>
.post {
  text-align: left;
  margin-bottom: 10px;
}
  .author {
    font-style: italic;
  }
</style>