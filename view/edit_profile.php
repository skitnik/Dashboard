<div id="edit_profile">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form id="edit_profile_form" method="POST" enctype="multipart/form-data">
          <h2>Промяна на потребителски данни</h2>
          <div class="form-group">
            <label for="username">Потребителско име</label>
            <input type="text" id="username" name="username"class="form-control" value="<?php echo $_SESSION['username']; ?>" required autofocus>
          </div>
          <div class="form-group">
            <label for="email">Имейл</label>
            <input type="email" id="email" name="email"class="form-control" value="">
          </div>
          <div class="form-group">
            <label for="first_name">Име</label>
            <input type="text" id="first_name" name="first_name"class="form-control" value="<?php echo $_SESSION['first_name']; ?>">
          </div>
          <div class="form-group">
            <label for="last_name">Фамилия</label>
            <input type="text" id="last_name" name="last_name"class="form-control" value="<?php echo $_SESSION['last_name']; ?>">
          </div>
          <div class="form-group">
            <label for="avatar">Профилна снимка</label>
            <input type="file" name="avatar" id="avatar">
          </div>
          <button class="btn btn-md btn-primary btn-block" type="submit" name="edit_profile">Промени</button>
      </form>
    </div>
  </div>
</div>
