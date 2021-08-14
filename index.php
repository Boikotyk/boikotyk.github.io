
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta -->
    <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Бойко М. - Портфоліо">
        <meta name="keywords" content="cv, resume, portfolio, creative, modern">
        <meta name="author" content="Бойко Микола">
    <!-- Page Title -->
    <title>Бойко М. - Портфоліо</title>
    <!-- Styles -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/tootik.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- Light & Dark Color -->
    <link rel="stylesheet" id="light-dark" href="css/colors/light.css">
    <!-- Theme Color -->
    <link rel="stylesheet" id="colors" href="css/colors/color1-0487cc.css">
    <link rel="stylesheet" id="colors" href="css/colors/dark.css">
    <!-- Responsive style -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/ico" href="images/favicon.png">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|PT+Sans+Narrow:400,700">
  </head>
  <body>

    <div class="content">
      <!-- #LOADER# --> <!-- other loader : http://tobiasahlin.com/spinkit/ -->
      <div class="loading-overlay">
        <div class="spinner">
          <div class="rect1"></div>
          <div class="rect2"></div>
          <div class="rect3"></div>
          <div class="rect4"></div>
          <div class="rect5"></div>
        </div>
      </div>
      
      <!-- #MENU# -->
      <div class="menu">
        <h2 class="logo">Меню</h2>
        <div class="menu-content">
          <ul>
            <li><a class="active" href="#" data-value="about">Про мене</a></li>
            <li><a href="#" data-value="skills">Навички</a></li>
            <li><a href="#" data-value="education">Навчання</a></li>
            <li><a href="#" data-value="experience">Досвід</a></li>
            <li><a href="#" data-value="portfolio">Портфоліо</a></li>
            <li><a href="#" data-value="interests">Зацікавлення</a></li>
            <li><a href="#" data-value="blog">Блог</a></li>
            <li><a href="#" data-value="contact-us">Зворотній зв'язок</a></li>
          </ul>
        </div>
        <div class="open-menu">
          <i class="fa fa-bars"></i>
        </div>
      </div>
      <!-- #SCROLL-TOP# -->
      <div class="scroll-top" data-tootik="TOP" data-tootik-conf="invert no-arrow no-fading">
        <i class="fa fa-arrow-up"></i>
      </div>
      <!-- #CONTAINER# -->
      <div class="container">
        <!-- #ABOUT# -->
        <section id="about" class="section section-about wow fadeInUp">
          <div class="profile">
            <div class="row">
              <div class="col-sm-4">
                <div class="photo-profile">
                  <img src="images/me.jpg" alt="Robert Smith">
                </div>
                <a href="cv/cv-1.pdf" target="cv">
                  <div class="download-resume">
                    <i class="fa fa-cloud-download" aria-hidden="true"></i>
                    <span class="text-download">Завантажити резюме</span>
                  </div>
                </a>
                <div class="available">
                  <i class="fa fa-close red_btn" aria-hidden="true"></i>
                  <span class="text-available">Закритий для пропозицій</span>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="info-profile">
                  <h2>Бойко Микола Володимирович</h2>
                  <h3>Front-end & WordPress Developer</h3>
                  <p>Привіт! Мене звуть Коля Бойко і я веб-розробник :) Окрім розробки сайтів, я ще й до всього майбутній доктор філософії і математики. Люблю годинами сидіти над кодом і доводити свої проекти до ідеалу, принаймні стараюсь 😅 Коротко про мої soft skills: - мега комунікабельний; - вмію працювати в команді; - критично мислю; - постійно креативлю; - дотримуюсь дедлайнів; - відповідальний та дисциплінований. Ознайомитися з моїм портфоліо можна тут</p>
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="ul-info">
                        <li class="li-info">
                          <span class="title-info">Вік</span>
                          <span class="info"><?php 
                            function calculate_age($birthday) {
                              $birthday_timestamp = strtotime($birthday);
                              $age = date('Y') - date('Y', $birthday_timestamp);
                              if (date('md', $birthday_timestamp) > date('md')) {
                                $age--;
                              }
                              return $age;
                            }
                            echo calculate_age('1996-04-26');
                          ?></span>
                        </li>
                        <li class="li-info">
                          <span class="title-info">Адреса</span>
                          <span class="info">вул, Соборна, Софіївська Борщагівка, Київська обл. </span>
                        </li>
                        <li class="li-info">
                          <span class="title-info">Email</span>
                          <span class="info">boikotwork@gmail.com</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="ul-info">
                        <li class="li-info">
                          <span class="title-info">Телефон</span>
                          <span class="info">+38 068 35 95 745</span>
                        </li>
                        <li class="li-info">
                          <span class="title-info">Website</span>
                          <span class="info">www.robertsmith.com</span>
                        </li>
                        <li class="li-info">
                          <span class="title-info">Національність</span>
                          <span class="info nationality_info">Українець</span>
                        </li>
                      </ul>
                    </div>
                    <div class="col-sm-12">
                      <span class="title-links">Соціальні мережі</span>
                      <ul class="ul-social-links">
                        <li class="li-social-links">
                          <a href="https://www.facebook.com/fitilov" data-tootik="Facebook" data-tootik-conf="square"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <li class="li-social-links">
                          <a href="https://twitter.com/Nick4710" data-tootik="Twitter" data-tootik-conf="square"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="li-social-links">
                          <a href="#" data-tootik="Linkedin" data-tootik-conf="square"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li class="li-social-links">
                          <a href="https://www.linkedin.com/in/boic4ik" data-tootik="Dribbble" data-tootik-conf="square"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- #SKILLS# -->
        <section id="skills" class="section section-skills wow fadeInUp" data-wow-offset="40">
          <div class="header-section">
            <h2 class="h2-section">Навички</h2>
          </div>
          <div class="row">
            <div class="col-md-5">
              <div class="professional-skills">
                <div class="title-skills">
                  <h3>Професійні Навички</h3>
                </div>
                <!-- single skill -->
                <div class="skill">
                  <div class="title-progress">
                    <span class="skill-name">HTML & CSS</span>
                    <span class="skill-value">90%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress1" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                      </div>
                  </div>
                </div>
                <!-- / single skill -->
                <!-- single skill -->
                <div class="skill">
                  <div class="title-progress">
                    <span class="skill-name">WordPress</span>
                    <span class="skill-value">75%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                      </div>
                  </div>
                </div>
                <!-- / single skill -->
                <!-- single skill -->
                <div class="skill">
                  <div class="title-progress">
                    <span class="skill-name">JavaScript</span>
                    <span class="skill-value">85%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress3" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
                      </div>
                  </div>
                </div>
                <!-- / single skill -->
                <!-- single skill -->
                <div class="skill">
                  <div class="title-progress">
                    <span class="skill-name">Laravel</span>
                    <span class="skill-value">70%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress4" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                      </div>
                  </div>
                </div>
                <!-- / single skill -->
                <!-- single skill -->
                <div class="skill">
                  <div class="title-progress">
                    <span class="skill-name">Photoshop</span>
                    <span class="skill-value">65%</span>
                  </div>
                  <div class="progress">
                    <div class="progress-bar progress5" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 65%;">
                      </div>
                  </div>
                </div>
                <!-- / single skill -->
              </div>
            </div>
            <div class="col-md-7">
              <div class="additional-skills">
                <div class="title-skills">
                  <h3>Додаткові Навички</h3>
                </div>
                <div class="circle-progress">
                  <div class="row">
                    <!-- single circle skill -->
                    <div class="col-sm-4">
                      <div class="circle">
                        <div class="chart-percentage">
                          <span>20%</span>
                        </div>
                        <div class="chart" data-percent="90">
                          <!-- canvas -->
                        </div>
                        <div class="name-circle">
                          <span>English</span>
                        </div>
                      </div>
                    </div>
                    <!-- / single circle skill -->
                    <!-- single circle skill -->
                    <div class="col-sm-4">
                      <div class="circle">
                        <div class="chart-percentage">
                          <span>90%</span>
                        </div>
                        <div class="chart" data-percent="80">
                          <!-- canvas -->
                        </div>
                        <div class="name-circle">
                          <span>Креативність</span>
                        </div>
                      </div>
                    </div>
                    <!-- / single circle skill -->
                    <!-- single circle skill -->
                    <div class="col-sm-4">
                      <div class="circle">
                        <div class="chart-percentage">
                          <span>65%</span>
                        </div>
                        <div class="chart" data-percent="65">
                          <!-- canvas -->
                        </div>
                        <div class="name-circle">
                          <span>Командна робота</span>
                        </div>
                      </div>
                    </div>
                    <!-- / single circle skill -->
                  </div>
                </div>
                <div class="other-skills">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="other">
                        <!-- single other skill -->
                        <div class="skill">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <span>Photography</span>
                        </div>
                        <!-- / single other skill -->
                        <!-- single other skill -->
                        <div class="skill">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <span>Mobile App Design</span>
                        </div>
                        <!-- / single other skill -->
                        <!-- single other skill -->
                        <div class="skill">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <span>Logo Design</span>
                        </div>
                        <!-- / single other skill -->
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="other">
                        <!-- single other skill -->
                        <div class="skill">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <span>3D Animation</span>
                        </div>
                        <!-- / single other skill -->
                        <!-- single other skill -->
                        <div class="skill">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <span>Audio Video Editing</span>
                        </div>
                        <!-- / single other skill -->
                        <!-- single other skill -->
                        <div class="skill">
                          <i class="fa fa-check-square-o" aria-hidden="true"></i>
                          <span>UX and UI Design</span>
                        </div>
                        <!-- / single other skill -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- #EDUCATION# -->
        <section id="education" class="section section-education wow fadeInUp" data-wow-offset="40">
          <div class="header-section">
            <h2 class="h2-section">Навчання</h2>
          </div>
          <div class="row">
            <!-- single education -->
            <div class="col-sm-4">
              <div class="education-content">
                <div class="period">
                  <h3>2019 - 2023</h3>
                </div>
                <ul class="ul-education">
                  <li class="li-specialty">
                    <div class="specialty">
                      <span class="education-icon"><i class="fa fa-file-text"></i></span>
                      <span class="specialty-name">Аспірантура "Математика"</span>
                    </div>
                  </li>
                  <li class="li-university">
                    <div class="university">
                      <span class="education-icon"><i class="fa fa-university"></i></span>
                      <span class="university-name">Прикарпатський Національний Університет ім. В. Стефаника</span>
                    </div>
                  </li>
                </ul>
                <p class="prg-education">Аспірантура, тема дисертації: "Стійкі випадкові процеси, та їх адитивні збурення".</p>
              </div>
            </div>
            <!-- / single education -->
            <!-- single education -->
            <div class="col-sm-4">
              <div class="education-content">
                <div class="period">
                  <h3>2017 - 2018</h3>
                </div>
                <ul class="ul-education">
                  <li class="li-specialty">
                    <div class="specialty">
                      <span class="education-icon"><i class="fa fa-file-text"></i></span>
                      <span class="specialty-name">Магістратура "Прикладна Математика"</span>
                    </div>
                  </li>
                  <li class="li-university">
                    <div class="university">
                      <span class="education-icon"><i class="fa fa-university"></i></span>
                      <span class="university-name">Прикарпатський Національний Університет ім. В. Стефаника</span>
                    </div>
                  </li>
                </ul>
                <p class="prg-education">Магістратура за спеціальністю Прикладна математика, поглиблені знання мов програмування Front-end</p>
              </div>
            </div>
            <!-- / single education -->
            <!-- single education -->
            <div class="col-sm-4">
              <div class="education-content">
                <div class="period">
                  <h3>2013 - 2017</h3>
                </div>
                <ul class="ul-education">
                  <li class="li-specialty">
                    <div class="specialty">
                      <span class="education-icon"><i class="fa fa-file-text"></i></span>
                      <span class="specialty-name">Бакалаврат "Прикладна Математика"</span>
                    </div>
                  </li>
                  <li class="li-university">
                    <div class="university">
                      <span class="education-icon"><i class="fa fa-university"></i></span>
                      <span class="university-name">Прикарпатський Національний Університет ім. В. Стефаника</span>
                    </div>
                  </li>
                </ul>
                <p class="prg-education">Бакалаврат на базі Прикарпатського університету, спеціальності Прикладна математика. Одержані теоретичні знання з точних математичних наук та мов програмування Asembler, C++, JS, Python</p>
              </div>
            </div>
            <!-- / single education -->
            <div class="clearfix"></div>
            <!-- single education -->
            <div class="col-sm-4">
              <div class="education-content">
                <div class="period">
                  <h3>2012 - 2013</h3>
                </div>
                <ul class="ul-education">
                  <li class="li-specialty">
                    <div class="specialty">
                      <span class="education-icon"><i class="fa fa-file-text"></i></span>
                      <span class="specialty-name">Середня повна</span>
                    </div>
                  </li>
                  <li class="li-university">
                    <div class="university">
                      <span class="education-icon"><i class="fa fa-university"></i></span>
                      <span class="university-name">Надвірнянська ЗОШ №4</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / single education -->
            <!-- single education -->
            <div class="col-sm-4">
              <div class="education-content">
                <div class="period">
                  <h3>2009 - 2012</h3>
                </div>
                <ul class="ul-education">
                  <li class="li-specialty">
                    <div class="specialty">
                      <span class="education-icon"><i class="fa fa-file-text"></i></span>
                      <span class="specialty-name">Середня базова освіта</span>
                    </div>
                  </li>
                  <li class="li-university">
                    <div class="university">
                      <span class="education-icon"><i class="fa fa-university"></i></span>
                      <span class="university-name">Прикарпатський військово-спортивний ліцей</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / single education -->
            <!-- single education -->
            <div class="col-sm-4">
              <div class="education-content">
                <div class="period">
                  <h3>2002 - 2009</h3>
                </div>
                <ul class="ul-education">
                  <li class="li-specialty">
                    <div class="specialty">
                      <span class="education-icon"><i class="fa fa-file-text"></i></span>
                      <span class="specialty-name">Молодша школа</span>
                    </div>
                  </li>
                  <li class="li-university">
                    <div class="university">
                      <span class="education-icon"><i class="fa fa-university"></i></span>
                      <span class="university-name">Гвіздська ЗОШ</span>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / single education -->
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- #EXPERIENCE# -->
        <section id="experience" class="section section-experience wow fadeInUp" data-wow-offset="40">
          <div class="header-section">
            <h2 class="h2-section">Досвід</h2>
          </div>
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <span class="icon-experience">
                <i class="fa fa-briefcase"></i>
              </span>
              <div class="all-experience">
                <!-- single experience -->
                <div class="experience-content">
                  <span class="period-experience">Сер 2021 - Current</span>
                  <h3 class="specialty-name">Wordpress Developer</h3>
                  <h3 class="company-name">ОNEPLUSONE SOLUTIONS</h3>
                  <p class="prg-experience">Натягування готової верстки на CMS WordPress, використання плагіну ACF, Contact 7, налаштування багатомовності сайту та переробку плагіна під потреби веб ресурсу</p>
                </div>
                <!-- / single experience -->
                <!-- single experience -->
                <div class="experience-content">
                  <span class="period-experience">Жов 2020 - Гру 2020</span>
                  <h3 class="specialty-name">WordPress Developer</h3>
                  <h3 class="company-name">FLYFOX DESIGN STUDIO</h3>
                  <p class="prg-experience">Натягування готової верстки на CMS WordPress, використання плагіну ACF, Contact 7, налаштування багатомовності сайту та переробку плагіна під потреби веб ресурсу</p>
                </div>
                <!-- / single experience -->
                <!-- single experience -->
                <div class="experience-content">
                  <span class="period-experience">Вер 2019 - Вер 2020</span>
                  <h3 class="specialty-name">Front-end & WordPress Developer</h3>
                  <h3 class="company-name">LETDA — ВЕБ СТУДІЯ В ІВАНО-ФРАНКІВСЬКУ</h3>
                  <p class="prg-experience">Розробка дизайну сайту, натягування, готової верстки на CMS WordPress, робота з WordPress-плагінами</p>
                </div>
                <!-- / single experience -->
              </div>
            </div>
          </div>
        </section>
        <!-- #PORTFOLIO# -->
        <section id="portfolio" class="section section-portfolio wow fadeInUp" data-wow-offset="40">
          <div class="header-section">
            <h2 class="h2-section">Портфоліо</h2>
          </div>
          <div class="filter-portfolio">
            <ul>
              <li class="active filter" data-filter="all">All</li>
              <li class="filter" data-filter=".term1">Web Design</li>
              <li class="filter" data-filter=".term2">Photography</li>
              <li class="filter" data-filter=".term3">Development</li>
            </ul>
          </div>
          <div class="row">
            <!-- single work -->
            <div class="col-sm-4">
              <div class="item-portfolio term3">
                <div class="item-overlay">
                  <div class="item-content">
                    <span class="icon-search">
                      <a class="work-popup" href="images/portfolio/item1.jpg" data-group="1"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </span>
                    <span class="icon-plus">
                      <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </span>
                    <h3>AWESOME TITLE PORTFOLIO</h3>
                  </div>
                </div>
                <img src="images/portfolio/item1.jpg" alt="">
              </div>
            </div>
            <!-- / single work -->
            <!-- single work -->
            <div class="col-sm-4">
              <div class="item-portfolio term1">
                <div class="item-overlay">
                  <div class="item-content">
                    <span class="icon-search">
                      <a class="work-popup" href="images/portfolio/item2.jpg" data-group="1"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </span>
                    <span class="icon-plus">
                      <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </span>
                    <h3>AWESOME TITLE PORTFOLIO</h3>
                  </div>
                </div>
                <img src="images/portfolio/item2.jpg" alt="">
              </div>
            </div>
            <!-- / single work -->
            <!-- single work -->
            <div class="col-sm-4">
              <div class="item-portfolio term2">
                <div class="item-overlay">
                  <div class="item-content">
                    <span class="icon-search">
                      <a class="work-popup" href="images/portfolio/item3.jpg" data-group="1"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </span>
                    <span class="icon-plus">
                      <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </span>
                    <h3>AWESOME TITLE PORTFOLIO</h3>
                  </div>
                </div>
                <img src="images/portfolio/item3.jpg" alt="">
              </div>
            </div>
            <!-- / single work -->
            <div class="clearfix"></div>
            <!-- single work -->
            <div class="col-sm-4">
              <div class="item-portfolio term2">
                <div class="item-overlay">
                  <div class="item-content">
                    <span class="icon-search">
                      <a class="work-popup" href="images/portfolio/item4.jpg" data-group="1"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </span>
                    <span class="icon-plus">
                      <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </span>
                    <h3>AWESOME TITLE PORTFOLIO</h3>
                  </div>
                </div>
                <img src="images/portfolio/item4.jpg" alt="">
              </div>
            </div>
            <!-- / single work -->
            <!-- single work -->
            <div class="col-sm-4">
              <div class="item-portfolio term1">
                <div class="item-overlay">
                  <div class="item-content">
                    <span class="icon-search">
                      <a class="work-popup" href="images/portfolio/item5.jpg" data-group="1"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </span>
                    <span class="icon-plus">
                      <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </span>
                    <h3>AWESOME TITLE PORTFOLIO</h3>
                  </div>
                </div>
                <img src="images/portfolio/item5.jpg" alt="">
              </div>
            </div>
            <!-- / single work -->
            <!-- single work -->
            <div class="col-sm-4">
              <div class="item-portfolio term3">
                <div class="item-overlay">
                  <div class="item-content">
                    <span class="icon-search">
                      <a class="work-popup" href="images/portfolio/item6.jpg" data-group="1"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </span>
                    <span class="icon-plus">
                      <a href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                    </span>
                    <h3>AWESOME TITLE PORTFOLIO</h3>
                  </div>
                </div>
                <img src="images/portfolio/item6.jpg" alt="">
              </div>
            </div>
            <!-- / single work -->
            <div class="clearfix"></div>
          </div>
        </section>
        <!-- #INTERESTS# -->
        <section id="interests" class="section section-interests wow fadeInUp" data-wow-offset="40">
          <div class="header-section">
            <h2 class="h2-section">Захоплення</h2>
          </div>
          <div class="text-interests">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
          </div>
          <!-- more icons for interests : https://www.iconfinder.com/ -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/travel_icon.png" alt="Travel">
                      </div>
                      <h4>Travel</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/music_icon.png" alt="Music">
                      </div>
                      <h4>Music</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/gaming_icon.png" alt="Gaming">
                      </div>
                      <h4>Gaming</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/swiming_icon.png" alt="Swiming">
                      </div>
                      <h4>Swiming</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/movies_icon.png" alt="Movies">
                      </div>
                      <h4>Movies</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/shopping_icon.png" alt="Shopping">
                      </div>
                      <h4>Shopping</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/bicycling_icon.png" alt="Bicycling">
                      </div>
                      <h4>Bicycling</h4>
                    </div>
                    <div class="swiper-slide">
                      <div>
                        <img src="images/interests/cooking_icon.png" alt="Cooking">
                      </div>
                      <h4>Cooking</h4>
                    </div>
                </div>
            </div>
        </section>
        <!-- #CONTACT_US# -->
        <section id="contact-us" class="section section-contact-us wow fadeInUp" data-wow-offset="40">
          <div class="header-section">
            <h2 class="h2-section">CONTACT US</h2>
          </div>
          <div class="row">
            <div class="col-sm-7">
              <div class="form-content">
                <form id="contactForm" data-toggle="validator">
                  <input type="text" id="name" placeholder="Ім'я" required>
                  <input type="email" id="email" placeholder="Email" required>
                  <textarea id="message" placeholder="Повідомлення" required></textarea>
                  <input type="submit" id="form-submit" value="Відправити">
                  <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                </form>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="info-content">
                <div class="email">
                  <span class="info-icon"><i class="fa fa-envelope"></i></span>
                  <span class="info-text">boikotwork@gmail.com</span>
                </div>
                <div class="telephone">
                  <span class="info-icon"><i class="fa fa-phone"></i></span>
                  <span class="info-text">+38 068 35 95 745</span>
                </div>
<!--                 <div class="website">
                  <span class="info-icon"><i class="fa fa-link"></i></span>
                  <span class="info-text">www.robertsmith.com</span>
                </div> -->
              </div>
            </div>
          </div>
          <div class="social-links">
            <ul>
              <li class="li-social-links">
                <a href="https://www.facebook.com/fitilov" data-tootik="Facebook" data-tootik-conf="square"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              </li>
              <li class="li-social-links">
                <a href="https://twitter.com/Nick4710" data-tootik="Twitter" data-tootik-conf="square"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              </li>
              <li class="li-social-links">
                <a href="https://www.linkedin.com/in/boic4ik" data-tootik="Linkedin" data-tootik-conf="square"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </section>
      </div>
    </div>

    <!-- #JQUERY-PLUGINS# -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/jquery.easypiechart.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/validator.min.js"></script>
      <script src="js/form-scripts.js"></script>
    <script src="js/script.js"></script>
    <script>
    /**** EasyPieChart Circle Progress ****/
    $(function() {
      //circle progress additional skills
        $('.chart').easyPieChart({
            barColor: '#757575',
            trackColor: 'rgba(255,255,255,0)',
            scaleColor: 'rgba(255,255,255,0)',
            lineWidth: '10',
            lineCap: 'square'
        });
    });
    </script>

  </body>
</html>