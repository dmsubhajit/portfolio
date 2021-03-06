<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Subhajit Das</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap"
      rel="stylesheet"
    />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" type="text/css" href="style.css" />

    <link id="theme-style" rel="stylesheet" type="text/css" href="" />
  </head>
  <body>
    <section class="s1">
      <div class="main-container">
        <div class="greating-wrapper">
          <h1>Hi, I'm Subhajit Das</h1>
        </div>

        <div class="intro-wrapper">
          <div class="nav-wrapper">
            <div class="dots-wrapper">
              <div id="dot-1" class="browser-dot"></div>
              <div id="dot-2" class="browser-dot"></div>
              <div id="dot-3" class="browser-dot"></div>
            </div>

            <ul id="navigation">
              <li><a href="#">About</a></li>
              <li><a href="index.html#contact">Contact</a></li>
            </ul>
          </div>

          <div class="left-column">
            <img
              id="profile_pic"
              src="images/subhajit-das.jpg"
              alt="Subhajit Das"
            />
            <h5 style="text-align: center; line-height: 0">Subhajit Das</h5>

            <div id="theme-options-wrapper">
              <div data-mode="light" id="light-mode" class="theme-dot"></div>
              <div data-mode="blue" id="blue-mode" class="theme-dot"></div>
              <div data-mode="green" id="green-mode" class="theme-dot"></div>
              <div data-mode="purple" id="purple-mode" class="theme-dot"></div>
            </div>

            <p id="settings-note">
              Theme setting will be saved for<br />your next visit
            </p>
          </div>

          <div class="right-column">
            <div id="preview-shadow">
              <div id="preview">
                <div id="corner-tl" class="corner"></div>
                <div id="corner-tr" class="corner"></div>
                <h3>What i do</h3>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi,
                  esse.
                </p>
                <div id="corner-br" class="corner"></div>
                <div id="corner-bl" class="corner"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s2">
      <div class="main-container">
        <div class="about-wrapper">
          <div class="about-me">
            <h4>More about me</h4>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat,
              ipsum ea itaque exercitationem repellat sit.
            </p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio
              dolor, voluptatum aut, sunt tempore nam eligendi, fugiat nulla
              maiores accusantium at quasi consequatur illo? Ducimus!
            </p>

            <br />
            <h4>Top Expertise</h4>

            <p>
              Web Devloper with primary focus on Nodejs + React:
              <a target="_blank" href="Subhajit_Das_Resume.pdf"
                >Download Resume</a
              >
            </p>

            <div id="skills">
              <ul>
                <li>Python</li>
                <li>Java</li>
                <li>Javascript</li>
                <li>React</li>
                <li>Nodejs</li>
              </ul>

              <ul>
                <li>AWS(S3)</li>
                <li>HTML/CSS</li>
                <li>linux</li>
                <li>sql</li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="social-links">
            <img id="social_img" src="#" alt="" />
            <h3>Find me on Facebook & Youtube</h3>

            <a target="_blank" href="#">Facebook: @dmsubhajit</a>
            <br />
            <a target="_blank" href="#">Youtube: @dmsubhajit</a>
          </div>
        </div>
      </div>
    </section>

    <section class="s1">
      <div class="main-container">
        <h3 style="text-align: center">Some of my Projects</h3>

        <div class="post-wrapper">
          <div>
            <div class="post">
              <img class="thumbnail" src="./images/subhajit-das.jpg" alt="" />
              <div class="post-preview">
                <h6 class="post-title">Post Title</h6>
                <p class="post-intro">This is a sentancw.text some more</p>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>

          <div>
            <div class="post">
              <img class="thumbnail" src="./images/subhajit-das.jpg" alt="" />
              <div class="post-preview">
                <h6 class="post-title">Post Title</h6>
                <p class="post-intro">This is a sentancw.text some more</p>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>

          <div>
            <div class="post">
              <img class="thumbnail" src="./images/subhajit-das.jpg" alt="" />
              <div class="post-preview">
                <h6 class="post-title">Post Title</h6>
                <p class="post-intro">This is a sentancw.text some more</p>
                <a href="#">Read more</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="s2">
      <div class="main-container">
        <a name="contact"></a>
        <h3 style="text-align: center">Get in Touch</h3>

        <form id="contact-form" method="post" action="message.php">
          <label for="">Name</label>
          <input placeholder="Full Name" class="input-field" type="text" name="name" required autofocus/>

          <label for="">Subject</label>
          <input placeholder="Subject" class="input-field" type="text" name="subject" required/>

          <label for="">Email</label>
          <input placeholder="Email Address" class="input-field" type="email" name="email" required/>

          <label for="">Message</label>
          <textarea placeholder="Type your Message Here...." class="input-field" name="message" required></textarea>

          <input id="submit-btn" name="submit-btn" type="submit" value="send" />
        </form>
      </div>
    </section>

    <script type="text/javascript" src="script.js"></script>
  </body>
</html>
