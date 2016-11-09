<div id="message_form">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <form id="message_form" method="POST">
          <h2>Изпрати съобщение</h2>
          <div class="form-group">
            <label for="to">До</label>
            <input type="text" id="to" name="to"class="form-control" placeholder="Имейл" required autofocus>
          </div>
          <div class="form-group">
            <label for="title">Тема</label>
            <input type="text" id="title" name="title" class="form-control" placeholder="" required>
          </div>
          <div class="form-group">
            <label for="comment">Съобщение:</label>
            <textarea class="form-control" rows="10" id="comment" name="comment"></textarea>
          </div>
          <button class="btn btn-md btn-primary btn-block" type="submit" name="send">Изпрати</button>
      </form>
    </div>
  </div>
</div>

<?php  ?>