<div id="edit_sidebar_folder">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <form id="edit_sidebar_folder" method="POST">
          <h2>Редактиране на папка</h2>
          <div class="form-group">
            <label for="catName">Име</label>
            <input type="text" id="catName" name="folder_name"class="form-control" value="<?php echo $_GET['name'];  ?>" required autofocus>
          </div>
          <div class="form-group">
            <label for="access">Ниво на видимост:</label>
            <select class="form-control" id="access" name="access">
              <option value="0">Всички</option>
              <option value="1">Модератор</option>
              <option value="2">Админ</option>
            </select>
          </div>
          <button class="btn btn-md btn-primary btn-block" type="submit" name="edit_sidebar_folder">Промени</button>
      </form>
    </div>
  </div>
</div>

