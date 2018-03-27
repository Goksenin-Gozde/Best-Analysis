<?php include 'header.php' ?>

<section id="ContactContent">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="contact_area">
        <h1>Iletisim</h1>
        <p>Bizlerle iletisime geçmek için aşağıdaki formu doldurabilirsiniz</p>
        <div class="contact_bottom">
          <div class="contact_us wow fadeInRightBig">
            <h2>Bize Ulasın</h2>
            <form action="mail.php" class="contact_form" method = "post">
              <input class="form-control" type="text" name = "ad" placeholder="Adınız(Gerekli)">
              <input class="form-control" type="email" name="eposta" placeholder="Mail Adresiniz (Gerekli)">
              <input class="form-control" type="text" name="konu" placeholder="Konu">
              <textarea class="form-control" cols="30" rows="10" name="mesaj" placeholder="Mesaj (Gerekli)"></textarea>
              <input type="submit" value="Send">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php include 'footer.php' ?>
