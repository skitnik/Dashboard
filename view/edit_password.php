<div id="edit_password">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form id="edit_password_form" method="POST" enctype="multipart/form-data">
          <h2>Промяна на парола</h2>
          <div class="form-group">
            <label for="password">Парола</label>
            <input type="password" id="password" name="password"class="form-control" placeholder="Моля въведете вашата парола" required autofocus>
          </div>
          <div class="form-group">
            <label for="newPassword">Нова парола</label>
            <input type="password" id="newPassword" name="newPassword" class="form-control" placeholder="Моля въведете вашата нова парола" required>
          </div>
          <button class="btn btn-md btn-primary btn-block" type="submit" name="edit_password">Промени</button>
      </form>
    </div>
  </div>
</div>
