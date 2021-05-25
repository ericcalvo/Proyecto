<template>
  <div id="guide">
    <h1>Welcome to {{ test }}</h1>
    <p>You have {{time}} to finish.</p>
    <h2>Documentation</h2>
    <ul>
      <li><a href="https://v3.vuejs.org/" target="_blank" rel="noopener">vue3</a></li>
      <li><a href="https://cli.vuejs.org" target="_blank" rel="noopener">vue-cli</a></li>
      <li><a href="https://next.router.vuejs.org/" target="_blank" rel="noopener">vue-router</a></li>
      <li><a href="https://next.vuex.vuejs.org/" target="_blank" rel="noopener">vuex</a></li>
      <li><a href="https://getbootstrap.com/docs/5.0/" target="_blank" rel="noopener">bootstrap-v5</a></li>
    </ul>
    <h2>Backend API</h2>
    <ul>
      <li><a href="https://jsonplaceholder.typicode.com/guide/" target="_blank" rel="noopener">guide</a></li>
      <li><a href="https://jsonplaceholder.typicode.com/posts" target="_blank" rel="noopener">/posts</a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'Guide',
  props: {
    test: String,
    time: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
