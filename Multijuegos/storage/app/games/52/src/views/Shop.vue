<template>
  <div id="shop">
    <h1>Shop</h1>
    <div class="container-md">
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col" colspan="3">Products</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>🍎</td>
              <td>Red Apple</td>
              <td><input type="number" class="form-control" placeholder="0"></td>
            </tr>
            <tr>
              <td>🍋</td>
              <td>Lemon</td>
              <td><input type="number" class="form-control" placeholder="0"></td>
            </tr>
            <tr>
              <td>🥝</td>
              <td>Kiwi</td>
              <td><input type="number" class="form-control" placeholder="0"></td>
            </tr>
          </tbody>
        </table>
      </div>
      <h2>🛒 0 products <button type="submit" class="btn btn-primary mb-3">Buy</button></h2>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Products successfully saved. Go to <a href="#" class="alert-link">Cart</a> page.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Zero products</strong> selected!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    </div>
  </div>
</template>

<script>
// @ is an alias to /src
export default {
  name: 'Shop',
  components: {
  }
}
</script>