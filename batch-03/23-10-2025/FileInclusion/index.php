<html>
<head>
    <title>File Inclusion Example</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php include 'includes/header.php'; ?>

  <?php include 'includes/common.php'; ?>
  <hr/>
  <?php include_once 'includes/common.php'; ?>
    <hr/>
  <?php include 'includes/common.php'; ?>

  <main>
    <div class="container">
      <section id="norm" class="cover-sect">
        <div class="title-text">
          <h1>NORM</h1>
          <p>~ THE INTERIOR STANDARD ~</p>
        </div>
        <div class="box-feature">
          <img class="cover-image" src="https://images2.imgbox.com/75/2b/xlGEMbdX_o.jpg" alt="Living room sample"/>
        </div>
      </section>
      
      <!--       ........ -->
      <section id="story" class="story-sect">
        <div class="section-text">
          <h2>Our Story</h2>
          <p>Furnishing your home can be quite overwhelming at times, at least that's how it was for us. <br><br>Norm was born to help others going through the maze that is interior design.<br><br>We decided to curate interior design modern trends, inspirations, tips and tricks from the vast interior collective to help you bring your home to life.</p>
        </div>
        <div class="box-feature">
          <img src="https://roohome.com/wp-content/uploads/2016/10/scandinavian-small-apartment-interior.jpg" />
        </div>
      </section>
      
      <!--       ........ -->
      <section id="designs" class="samples">
        <div class="section-text">
          <h2>Featured</h2>
          <p>Take a look at some of our featured picks that have made editorial debuts</p>
        </div>
        <div class="featured">
          <div class="cont">
            <figure>
              <img src="https://images2.imgbox.com/78/40/AXaX0dGj_o.jpg" alt="modern style living room">
              <figcaption>
                <a href="https://pixabay.com/users/jarmoluk-143740/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2094702">Image by Michal Jarmoluk from Pixabay</a>
              </figcaption>
            </figure>
          </div>
          
          <div class="cont">
            <figure>
              <img src="https://images2.imgbox.com/61/65/spezPzqR_o.jpg" alt="Grey sofa in minimalist living room">
              <figcaption>
                <a href="https://pixabay.com/users/StockSnap-894430/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2593570">Image by StockSnap from Pixabay</a> 
              </figcaption>
            </figure>
          </div>
          
          <div class="cont">
            <figure>
              <img src="https://images2.imgbox.com/08/37/9tQMXva6_o.jpg" alt="Living Room Modern Interior">
              <figcaption>
                <a href="https://pixabay.com/users/miapirttila-4257077/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1978362">Image by miapirttila from Pixabay</a>
              </figcaption>
            </figure>
          </div>
          
        </div>
        <div class="video-section">
          <iframe id="video" src="https://player.vimeo.com/video/323262733" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        </div>
      </section>
      
      
      <!--       ........ -->
      <section id="contact" class="contact-section">
        <div class="section-text">
          <h2>Get in touch</h2>
          <p>We would love to hear from you! <br><br>If you would like to receive our monthly catalogue subscribe by filling in the form with your name and email address</p>
        </div>
        <div class="contact-info">
          <div class="form-box">
            <form id="form" class="contact-form" action="https://www.freecodecamp.com/email-submit">
              <label for="name" class="form-entry">Name <br>
                <input name="name" id="name" type="text" class="txt-box" placeholder="&nbsp&nbsp;Enter name" required><br>
              </label>
              <label for="email" class="form-entry">Email <br>
                <input name="email" id="email" type="email" class="txt-box" placeholder="&nbsp&nbsp;Enter email" required><br>
              </label>
              <label for="message" class="form-entry">Message<br>
                <textarea name="message" id="message" type="textarea" class="txt-box" placeholder="&nbsp;Optional"></textarea><br>
              </label><br>
              <input class="btn" id="submit" type="submit" value="Submit">
            </form>
          </div>
        </div>
      
      </section>
    </div>
  
  </main>
  
  <?php include 'includes/footer.php'; ?>
</body>

</html>