<?php

/** @var yii\web\View $this */

$this->title = 'Coders Ready';
?>
<body id="body"  class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu" data-aos-easing="ease-in-out" data-aos-duration="600" data-aos-delay="0">
    <script>
    function mouseOver() {
      const list = document.getElementById("body").classList;
      list.add("scrolled");
    }
    </script>
    <script>
function mouseOut() {
  document.getElementById("body").classList.remove("scrolled");
}
</script>


<!-- <script>
document.getElementById("header").onmouseover = function() {mouseOver()};
document.getElementById("header").onmouseout = function() {mouseOut()};

function mouseOver() {
  document.getElementById("header").style.backgroundColor = "white";
}

function mouseOut() {
  document.getElementById("header").style.backgroundColor = ;
}
</script> -->

  <main id="main">
    

<!-- Hero Section - Home Page -->
    






  <section id="testimonials" class="testimonials" style="padding-top: 0px;padding-bottom: 0px;">
      
<div class="container-fluid">

  <div class="row align-items-center">

    <div class="col-lg-12 " data-aos="fade-up" data-aos-delay="200" style="padding-left: calc(var(--bs-gutter-x) * 0.0);padding-right: calc(var(--bs-gutter-x) * 0.0);">

    <!-- <img src="img/carousel-1.jpg" class="testimonial-img flex-shrink-0" style="max-width:100%;" alt=""> -->

      <div class="swiper">
        <template class="swiper-config">
          {
          "loop": true,
          "speed" : 2000,
          "autoplay": {
          "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
          }
          }
        </template>
        <div class="swiper-wrapper">

           <div class="swiper-slide">
            <div class="testimonial-item" style="margin-top: 0px;margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
                <!-- <img src="img/mpgc_hp1.jpg" class="testimonial-img-sldr" alt=""> -->


                <section id="hero" class="hero" style="padding-top:100px;">

                <img src="img/web_banner.png"  alt="" data-aos="fade-in">

                <div class="container">
                  
                   <div class="row justify-content-start">
                    <div class="col-lg-6">
                      <h2 class="display-1 text-center badge  text-wrap"  data-aos="fade-up" >Your Online Presence With  Professional Web Design Services </h2>
                      
                      <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="100"><i class="bi bi-code-slash"></i><i class="bi bi-arrow-bar-right"></i>End-to-End web development services.</h3>

                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="200"><i class="bi bi-browser-safari"></i><i class="bi bi-arrow-bar-right"></i>Top-Tier Websites at Unbeatable Prices!</h3>

                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="300"><i class="bi bi-aspect-ratio"></i><i class="bi bi-arrow-bar-right"></i>User-friendly and result-driven websites</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="400"><i class="bi bi-person-workspace"></i><i class="bi bi-arrow-bar-right"></i>User-Centric Approach</h3>
                          
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="500"><i class="bi bi-pc-display-horizontal"></i><i class="bi bi-arrow-bar-right"></i>Using Modern Web Technologies</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="600"><i class="bi bi-activity"></i><i class="bi bi-arrow-bar-right"></i>Pro-active SEO.</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="700"><i class="bi bi-clock"></i><i class="bi bi-arrow-bar-right"></i>Timely delivery of the project</h3>

                          
                        </div>
                      </div>
                      

                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-md-4" data-aos="fade-left" data-aos-delay="300"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><path fill="#F44336" d="M23.65,24.898c-0.998-1.609-1.722-2.943-2.725-5.455C19.229,15.2,31.24,11.366,26.37,3.999c2.111,5.089-7.577,8.235-8.477,12.473C17.07,20.37,23.645,24.898,23.65,24.898z"/><path fill="#F44336" d="M23.878,17.27c-0.192,2.516,2.229,3.857,2.299,5.695c0.056,1.496-1.447,2.743-1.447,2.743s2.728-0.536,3.579-2.818c0.945-2.534-1.834-4.269-1.548-6.298c0.267-1.938,6.031-5.543,6.031-5.543S24.311,11.611,23.878,17.27z"/><g><path fill="#1565C0" d="M32.084 25.055c1.754-.394 3.233.723 3.233 2.01 0 2.901-4.021 5.643-4.021 5.643s6.225-.742 6.225-5.505C37.521 24.053 34.464 23.266 32.084 25.055zM29.129 27.395c0 0 1.941-1.383 2.458-1.902-4.763 1.011-15.638 1.147-15.638.269 0-.809 3.507-1.638 3.507-1.638s-7.773-.112-7.773 2.181C11.683 28.695 21.858 28.866 29.129 27.395z"/><path fill="#1565C0" d="M27.935,29.571c-4.509,1.499-12.814,1.02-10.354-0.993c-1.198,0-2.974,0.963-2.974,1.889c0,1.857,8.982,3.291,15.63,0.572L27.935,29.571z"/><path fill="#1565C0" d="M18.686,32.739c-1.636,0-2.695,1.054-2.695,1.822c0,2.391,9.76,2.632,13.627,0.205l-2.458-1.632C24.271,34.404,17.014,34.579,18.686,32.739z"/><path fill="#1565C0" d="M36.281,36.632c0-0.936-1.055-1.377-1.433-1.588c2.228,5.373-22.317,4.956-22.317,1.784c0-0.721,1.807-1.427,3.477-1.093l-1.42-0.839C11.26,34.374,9,35.837,9,37.017C9,42.52,36.281,42.255,36.281,36.632z"/><path fill="#1565C0" d="M39,38.604c-4.146,4.095-14.659,5.587-25.231,3.057C24.341,46.164,38.95,43.628,39,38.604z"/></g></svg>
                        </div>
                        <div class="col-md-4" data-aos="fade-left" data-aos-delay="400">
                          <?xml version="1.0" encoding="UTF-8"?><!-- Generator: Adobe Illustrator 12.0.1, SVG Export Plug-In . SVG Version: 6.00 Build 51448)  --><!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.0//EN" "http://www.w3.org/TR/2001/REC-SVG-20010904/DTD/svg10.dtd">
                        <svg version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="60" viewBox="0 0 504.09 215.994" overflow="visible" enable-background="new 0 0 504.09 215.994" xml:space="preserve">
                        <path fill="#092E20" d="M504.09,187.994c0,15.464-12.536,28-28,28H28c-15.464,0-28-12.536-28-28V28C0,12.536,12.536,0,28,0h448.09  c15.464,0,28,12.536,28,28V187.994z"/>
                        <g>
                          <g>
                            <path fill="#FFFFFF" d="M86.945,33.919h23.872v110.496c-12.246,2.325-21.237,3.255-31.002,3.255    c-29.142,0-44.333-13.174-44.333-38.443c0-24.336,16.122-40.147,41.078-40.147c3.875,0,6.82,0.311,10.386,1.239V33.919z     M86.945,89.539c-2.79-0.929-5.115-1.239-8.06-1.239c-12.091,0-19.067,7.441-19.067,20.46c0,12.713,6.666,19.688,18.912,19.688    c2.634,0,4.805-0.155,8.215-0.618V89.539z"/>
                            <path fill="#FFFFFF" d="M148.793,70.783v55.341c0,19.065-1.395,28.21-5.58,36.117c-3.876,7.596-8.992,12.399-19.532,17.67    l-22.167-10.541c10.541-4.96,15.656-9.297,18.911-15.966c3.411-6.819,4.497-14.727,4.497-35.498V70.783H148.793z M124.922,34.046    h23.871v24.493h-23.871V34.046z"/>
                            <path fill="#FFFFFF" d="M163.212,76.209c10.542-4.961,20.617-7.13,31.623-7.13c12.246,0,20.306,3.255,23.872,9.611    c2.014,3.564,2.634,8.214,2.634,18.137v48.517c-10.697,1.552-24.182,2.636-34.102,2.636c-19.996,0-28.988-6.977-28.988-22.476    c0-16.744,11.936-24.493,41.234-26.975v-5.271c0-4.339-2.17-5.888-8.216-5.888c-8.835,0-18.756,2.479-28.058,7.285V76.209z     M200.57,114.187c-15.812,1.552-20.927,4.031-20.927,10.231c0,4.65,2.946,6.821,9.456,6.821c3.566,0,6.82-0.311,11.471-1.084    V114.187z"/>
                            <path fill="#FFFFFF" d="M232.968,74.505c14.105-3.722,25.731-5.426,37.512-5.426c12.246,0,21.082,2.788,26.354,8.216    c4.96,5.113,6.509,10.693,6.509,22.632v46.813h-23.871v-45.884c0-9.145-3.1-12.557-11.625-12.557c-3.255,0-6.2,0.311-11.007,1.706    v56.734h-23.871V74.505z"/>
                            <path fill="#FFFFFF" d="M312.623,159.761c8.372,4.339,16.742,6.354,25.577,6.354c15.655,0,22.321-6.354,22.321-21.546    c0-0.154,0-0.31,0-0.467c-4.65,2.326-9.301,3.257-15.5,3.257c-20.927,0-34.26-13.797-34.26-35.652    c0-27.128,19.688-42.473,54.564-42.473c10.232,0,19.688,1.084,31.159,3.407l-8.174,17.222c-6.356-1.241-0.509-0.167-5.312-0.632    v2.48l0.309,10.074l0.154,13.022c0.155,3.253,0.155,6.51,0.311,9.764c0,2.945,0,4.342,0,6.512c0,20.462-1.705,30.073-6.82,37.977    c-7.441,11.627-20.307,17.362-38.598,17.362c-9.301,0-17.36-1.396-25.732-4.651V159.761z M360.057,88.455c-0.31,0-0.619,0-0.774,0    h-1.706c-4.649-0.155-10.074,1.084-13.796,3.409c-5.734,3.257-8.681,9.146-8.681,17.518c0,11.937,5.892,18.756,16.432,18.756    c3.255,0,5.891-0.62,8.99-1.55v-1.705v-6.51c0-2.79-0.154-5.892-0.154-9.146l-0.154-11.006l-0.156-7.905V88.455z"/>
                            <path fill="#FFFFFF" d="M433.543,68.77c23.871,0,38.443,15.037,38.443,39.371c0,24.957-15.19,40.613-39.373,40.613    c-23.873,0-38.599-15.036-38.599-39.216C394.015,84.424,409.207,68.77,433.543,68.77z M433.076,129.533    c9.147,0,14.573-7.596,14.573-20.773c0-13.019-5.271-20.771-14.415-20.771c-9.457,0-14.884,7.598-14.884,20.771    C418.351,121.938,423.777,129.533,433.076,129.533z"/>
                          </g>
                        </g>
                        </svg>
                          
                        </div>
                        <div class="col-md-4 ml-auto"data-aos="fade-left" data-aos-delay="400">
                          <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><linearGradient id="QzbsZZGqvt5vTzXzFrTWxa" x1="19.369" x2="32.915" y1="6.256" y2="43.472" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#dfe9f2"/><stop offset=".391" stop-color="#d6e0e9"/><stop offset="1" stop-color="#bfc8d1"/></linearGradient><path fill="url(#QzbsZZGqvt5vTzXzFrTWxa)" d="M22.959,2.339L5.285,8.49c-1.333,0.464-2.163,1.795-1.992,3.197l2.828,23.187  c0.117,0.963,0.693,1.809,1.545,2.273l14.85,8.072c0.897,0.487,1.98,0.485,2.875-0.005l14.952-8.195  c0.847-0.464,1.419-1.309,1.536-2.268l2.826-23.174c0.172-1.41-0.668-2.747-2.013-3.204L24.91,2.332  C24.277,2.117,23.59,2.119,22.959,2.339z"/><linearGradient id="QzbsZZGqvt5vTzXzFrTWxb" x1="24" x2="24" y1="2.152" y2="39.957" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f44f5a"/><stop offset=".443" stop-color="#ee3d4a"/><stop offset="1" stop-color="#e52030"/></linearGradient><path fill="url(#QzbsZZGqvt5vTzXzFrTWxb)" d="M42.62,12.14L39.96,34 c-0.08,0.64-0.46,1.2-1.03,1.51L24.94,43c-0.3,0.16-0.62,0.23-0.94,0.23c-0.05,0-0.09-0.01-0.14-0.01c-0.27-0.01-0.54-0.08-0.8-0.22 L9.07,35.64c-0.56-0.31-0.95-0.88-1.03-1.52L5.38,12.24c-0.12-0.93,0.44-1.82,1.32-2.13l16.62-5.87c0.18-0.06,0.36-0.1,0.54-0.1 c0.05-0.01,0.09-0.01,0.14-0.01c0.22,0,0.44,0.04,0.66,0.11c1.58,0.57,6.2,2.23,16.62,5.76C42.17,10.31,42.74,11.2,42.62,12.14z"/><path fill="#fff" d="M11.013,34h4.409L24,15.504V5.996L11.013,34z"/><path fill="#fff" d="M18,24h6v4h-6V24z"/><path fill="#b31523" d="M42.62,12.14L39.96,34c-0.08,0.64-0.46,1.2-1.03,1.51L24.94,43c-0.3,0.16-0.62,0.23-0.94,0.23V4.13 c0.22,0,0.44,0.04,0.66,0.11c1.58,0.57,6.2,2.23,16.62,5.76C42.17,10.31,42.74,11.2,42.62,12.14z"/><path fill="#bfc8d1" d="M24,6v9.508l8.578,18.496h4.409L24,6z"/><path fill="#bfc8d1" d="M24,24.004h6v4h-6V24.004z"/><path d="M24,5.996V6l12.987,28.004h-4.409l-2.783-6H24V28h-5.795l-2.783,6h-4.409L24,5.996 M20.06,24H24v0.004h3.94L24,15.508 v-0.004L20.06,24 M25,1.467l-1.907,4.108L10.106,33.579L9.447,35h1.566h4.409h0.639l0.269-0.579L18.843,29H23l1,0.004h5.157 l2.514,5.421l0.269,0.579h0.639h4.409h1.566l-0.659-1.421L25,5.779V1.467L25,1.467z M21.626,23l2.373-5.117l2.375,5.121H25L24,23 H21.626L21.626,23z" opacity=".05"/><path d="M24,5.996V6l12.987,28.004h-4.409l-2.783-6H24V28h-5.795l-2.783,6h-4.409L24,5.996 M20.06,24H24v0.004h3.94L24,15.508 v-0.004L20.06,24 M24.5,3.733l-0.954,2.052L10.559,33.79L10.23,34.5h0.783h4.409h0.319l0.134-0.29l2.648-5.71H23.5l0.5,0.004 h5.476l2.648,5.71l0.134,0.29h0.319h4.409h0.783l-0.329-0.71L24.5,5.89V3.733L24.5,3.733z M20.843,23.5l3.156-6.806l3.158,6.81 H24.5L24,23.5H20.843L20.843,23.5z" opacity=".07"/></svg></div>
                      </div>
                      <div class="row">
                        <div class="col-md-3 ml-md-auto"data-aos="fade-left" data-aos-delay="500"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><path fill="#388e3c" d="M17.204 19.122l-4.907 2.715C12.113 21.938 12 22.126 12 22.329v5.433c0 .203.113.39.297.492l4.908 2.717c.183.101.41.101.593 0l4.907-2.717C22.887 28.152 23 27.965 23 27.762v-5.433c0-.203-.113-.39-.297-.492l-4.906-2.715c-.092-.051-.195-.076-.297-.076-.103 0-.205.025-.297.076M42.451 24.013l-.818.452c-.031.017-.049.048-.049.082v.906c0 .034.019.065.049.082l.818.453c.031.017.068.017.099 0l.818-.453c.03-.017.049-.048.049-.082v-.906c0-.034-.019-.065-.05-.082l-.818-.452C42.534 24.004 42.517 24 42.5 24S42.466 24.004 42.451 24.013"/><path fill="#37474f" d="M35.751,13.364l-2.389-1.333c-0.075-0.042-0.167-0.041-0.241,0.003 c-0.074,0.044-0.12,0.123-0.12,0.209L33,20.295l-2.203-1.219C30.705,19.025,30.602,19,30.5,19c-0.102,0-0.205,0.025-0.297,0.076 h0.001l-4.907,2.715C25.113,21.892,25,22.08,25,22.282v5.433c0,0.203,0.113,0.39,0.297,0.492l4.908,2.717 c0.183,0.101,0.41,0.101,0.593,0l4.907-2.717C35.887,28.106,36,27.918,36,27.715V13.788C36,13.612,35.904,13.45,35.751,13.364z M32.866,26.458l-2.23,1.235c-0.083,0.046-0.186,0.046-0.269,0l-2.231-1.235C28.051,26.412,28,26.326,28,26.234v-2.47 c0-0.092,0.051-0.177,0.135-0.224l2.231-1.234h-0.001c0.042-0.023,0.088-0.034,0.135-0.034c0.047,0,0.093,0.012,0.135,0.034 l2.23,1.234C32.949,23.587,33,23.673,33,23.765v2.47C33,26.326,32.949,26.412,32.866,26.458z"/><path fill="#2e7d32" d="M17.204,19.122L12,27.762c0,0.203,0.113,0.39,0.297,0.492l4.908,2.717 c0.183,0.101,0.41,0.101,0.593,0L23,22.329c0-0.203-0.113-0.39-0.297-0.492l-4.906-2.715c-0.092-0.051-0.195-0.076-0.297-0.076 c-0.103,0-0.205,0.025-0.297,0.076"/><path fill="#4caf50" d="M17.204,19.122l-4.907,2.715C12.113,21.938,12,22.126,12,22.329l5.204,8.642 c0.183,0.101,0.41,0.101,0.593,0l4.907-2.717C22.887,28.152,23,27.965,23,27.762l-5.203-8.64c-0.092-0.051-0.195-0.076-0.297-0.076 c-0.103,0-0.205,0.025-0.297,0.076"/><path fill="#37474f" d="M47.703 21.791l-4.906-2.715C42.705 19.025 42.602 19 42.5 19c-.102 0-.205.025-.297.076h.001l-4.907 2.715C37.114 21.892 37 22.084 37 22.294v5.411c0 .209.114.402.297.503l4.908 2.717c.184.102.409.102.593 0l2.263-1.253c.207-.115.206-.412-.002-.526l-4.924-2.687C40.052 26.412 40 26.325 40 26.231v-2.466c0-.092.05-.177.13-.221l2.235-1.236h-.001c.042-.023.088-.034.135-.034.047 0 .093.012.135.034l2.235 1.237c.08.044.13.129.13.221v2.012c0 .086.046.166.121.209.075.042.167.042.242-.001l2.398-1.393c.148-.086.24-.245.24-.417v-1.88C48 22.085 47.886 21.892 47.703 21.791zM10.703 21.791l-4.906-2.715C5.705 19.025 5.602 19 5.5 19c-.102 0-.205.025-.297.076h.001l-4.907 2.715C.114 21.892 0 22.084 0 22.294v7.465c0 .086.046.166.121.209.075.042.167.042.242-.001l2.398-1.393C2.909 28.488 3 28.329 3 28.157v-4.393c0-.092.05-.177.13-.221l2.235-1.236H5.365c.042-.023.088-.034.135-.034.047 0 .093.012.135.034l2.235 1.237C7.95 23.588 8 23.673 8 23.765v4.393c0 .172.091.331.24.417l2.398 1.393c.075.043.167.043.242.001C10.954 29.925 11 29.845 11 29.759v-7.464C11 22.085 10.886 21.892 10.703 21.791z"/></svg>
                        </div>
                        <div class="col-md-3 ml-md-auto"data-aos="fade-left" data-aos-delay="600">
                        <i class="bi bi-wordpress" style="font-size:40px;"></i>
                      </div>
                        <div class="col-md-3 ml-md-auto"data-aos="fade-left" data-aos-delay="700">
                          <svg style="max-width:50%;max-height:50%;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="120" width="240"><defs><clipPath id="A"><path d="M166.826 402.017c5.768-17.646 7.956-49.126 24.83-49.126 1.284 0 2.582.126 3.886.374-15.34 3.576-17.16 34.714-26.52 50.838a72.74 72.74 0 0 1-2.197-2.086"/></clipPath><clipPath id="B"><path d="M195.484 352.88h-28.716v51.212h28.716V352.88z"/></clipPath><clipPath id="C"><path d="M195.484 404.093V352.88h-28.716v51.212h28.716z"/></clipPath><clipPath id="D"><path d="M169.023 404.103c9.36-16.124 11.178-47.262 26.52-50.838 1.203.222 2.413.556 3.623.98-13.77 6.747-17.576 36.98-28.205 51.537-.644-.536-1.3-1.095-1.937-1.678"/></clipPath><clipPath id="E"><path d="M199.257 353.196h-30.14v52.517h30.14v-52.517z"/></clipPath><clipPath id="F"><path d="M199.257 405.713v-52.517h-30.14v52.517h30.14z"/></clipPath><clipPath id="G"><path d="M141.147 415.526h89.5v-31.384h-89.5v31.384z"/></clipPath><clipPath id="H"><path d="M140.174 416.526h91.464v-33.374h-91.464v33.374z"/></clipPath><clipPath id="I"><path d="M141.147 384.142h89.48v31.373h-89.48v-31.373z"/></clipPath><clipPath id="J"><path d="M141.147 415.526h89.5v-31.384h-89.5v31.384z"/></clipPath><clipPath id="K"><path d="M141.147 384.142h89.48v31.373h-89.48v-31.373z"/></clipPath><clipPath id="L"><path d="M141.162 415.515h89.462v-31.373h-89.462v31.373z"/></clipPath><clipPath id="M"><path d="M230.638 384.152h-89.464v31.374h89.464v-31.374z"/></clipPath><clipPath id="N"><path d="M230.638 415.526v-31.374h-89.464v31.374h89.464z"/></clipPath><linearGradient id="O" spreadMethod="pad" y2="384.152" x2="185.906" y1="415.525" x1="185.906" xlink:href="#CP"><stop offset="0" stop-color="#231f20"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="P" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#G)"><g clip-path="url(#H)"><g clip-path="url(#I)"><g clip-path="url(#J)"><g clip-path="url(#K)"><g clip-path="url(#L)"><g clip-path="url(#M)"><g clip-path="url(#N)"><path d="M230.638 384.152h-89.464v31.374h89.464v-31.374z" fill="url(#O)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="Q"><path d="M185.528 413.668h28.657V360.46h-28.657v53.207z"/></clipPath><clipPath id="R"><path d="M185.532 360.462h28.6v53.206h-28.6v-53.206z"/></clipPath><clipPath id="S"><path d="M209.912 360.462l4.235 3.7c-5.864 17.564-7.963 49.496-24.955 49.496a19.81 19.81 0 0 1-3.664-.343c15.477-3.846 17.46-37.523 24.384-52.863"/></clipPath><clipPath id="T"><path d="M185.566 413.666h28.62V360.46h-28.62v53.205z"/></clipPath><clipPath id="U"><path d="M185.566 360.46v53.205h28.62V360.46h-28.62z"/></clipPath><clipPath id="V"><path d="M141.147 415.526h89.5v-31.384h-89.5v31.384z"/></clipPath><clipPath id="W"><path d="M140.174 416.526h91.464v-33.374h-91.464v33.374z"/></clipPath><clipPath id="X"><path d="M141.147 384.142h89.48v31.373h-89.48v-31.373z"/></clipPath><clipPath id="Y"><path d="M141.147 415.526h89.5v-31.384h-89.5v31.384z"/></clipPath><clipPath id="Z"><path d="M141.147 384.142h89.48v31.373h-89.48v-31.373z"/></clipPath><clipPath id="a"><path d="M141.162 415.515h89.462v-31.373h-89.462v31.373z"/></clipPath><clipPath id="b"><path d="M230.638 384.152h-89.464v31.374h89.464v-31.374z"/></clipPath><clipPath id="c"><path d="M230.638 415.526v-31.374h-89.464v31.374h89.464z"/></clipPath><mask id="d" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#V)"><g clip-path="url(#W)"><g clip-path="url(#X)"><g clip-path="url(#Y)"><g clip-path="url(#Z)"><g clip-path="url(#a)"><g clip-path="url(#b)"><g clip-path="url(#c)"><path d="M230.638 384.152h-89.464v31.374h89.464v-31.374z" fill="url(#O)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="e"><path d="M182.5 413.692h6.682v-.367H182.5v.367z"/></clipPath><clipPath id="f"><path d="M182.52 413.325h6.668v.367h-6.668v-.367z"/></clipPath><clipPath id="g"><path d="M181.57 412.222c13.863-7.25 15.067-40.086 26.13-53.42.74.522 1.475 1.076 2.2 1.66-6.923 15.34-8.905 49.02-24.38 52.863-1.322-.246-2.64-.6-3.96-1.103"/></clipPath><clipPath id="h"><path d="M209.982 358.734h-28.34v54.526h28.34v-54.526z"/></clipPath><clipPath id="i"><path d="M209.982 413.26v-54.526h-28.34v54.526h28.34z"/></clipPath><clipPath id="j"><path d="M170.96 405.78c10.63-14.556 14.435-44.8 28.205-51.537 2.83.998 5.678 2.532 8.535 4.557-11.063 13.335-12.267 46.17-26.13 53.42-3.52-1.308-7.054-3.488-10.6-6.44"/></clipPath><clipPath id="k"><path d="M207.683 354.228h-36.74v57.98h36.74v-57.98z"/></clipPath><clipPath id="l"><path d="M207.683 412.207v-57.98h-36.74v57.98h36.74z"/></clipPath><clipPath id="m"><path d="M107.023 417.34h89.588v-76.127h-89.588v76.127z"/></clipPath><clipPath id="n"><path d="M106.14 418.335h91.47v-78.123h-91.47v78.123z"/></clipPath><clipPath id="o"><path d="M107.028 341.218h89.456v76.12h-89.456v-76.12z"/></clipPath><clipPath id="p"><path d="M107.023 417.34h89.588v-76.127h-89.588v76.127z"/></clipPath><clipPath id="q"><path d="M107.028 341.218h89.456v76.12h-89.456v-76.12z"/></clipPath><clipPath id="r"><path d="M196.495 341.218h-89.472v76.12h89.472v-76.12z"/></clipPath><clipPath id="s"><path d="M107.14 417.335h89.47v-76.122h-89.47v76.122z"/></clipPath><clipPath id="t"><path d="M107.14 341.213v76.123h89.47v-76.123h-89.47z"/></clipPath><linearGradient id="u" spreadMethod="pad" y2="417.334" x2="151.875" y1="341.213" x1="151.875" xlink:href="#CP"><stop offset="0" stop-color="#231f20"/><stop offset=".462" stop-color="#231f20"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="v" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#m)"><g clip-path="url(#n)"><g clip-path="url(#o)"><g clip-path="url(#p)"><g clip-path="url(#q)"><g clip-path="url(#r)"><g clip-path="url(#s)"><g clip-path="url(#t)"><path d="M107.14 417.335h89.47v-76.122h-89.47v76.122z" fill="url(#u)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="w"><path d="M154.597 406.73h12.227v-19.47h-12.227v19.47z"/></clipPath><clipPath id="x"><path d="M154.605 387.26h12.206v19.472h-12.206V387.26z"/></clipPath><clipPath id="y"><path d="M204.64 416.495h89.5v-54.65h-89.5v54.65z"/></clipPath><clipPath id="z"><path d="M203.64 417.495h91.47v-56.65h-91.47v56.65z"/></clipPath><clipPath id="AA"><path d="M204.647 361.844h89.482v54.648h-89.482v-54.648z"/></clipPath><clipPath id="AB"><path d="M204.64 416.495h89.5v-54.65h-89.5v54.65z"/></clipPath><clipPath id="AC"><path d="M204.647 361.844h89.482v54.648h-89.482v-54.648z"/></clipPath><clipPath id="AD"><path d="M204.657 416.492h89.47v-54.648h-89.47v54.648z"/></clipPath><clipPath id="AE"><path d="M294.1 361.846h-89.47v54.65h89.47v-54.65z"/></clipPath><clipPath id="AF"><path d="M294.1 416.495v-54.65h-89.47v54.65h89.47z"/></clipPath><linearGradient id="AG" spreadMethod="pad" y2="361.846" x2="249.375" y1="416.494" x1="249.375" xlink:href="#CP"><stop offset="0" stop-color="#2e2a2b"/><stop offset=".731" stop-color="#fff"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="AH" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#y)"><g clip-path="url(#z)"><g clip-path="url(#AA)"><g clip-path="url(#AB)"><g clip-path="url(#AC)"><g clip-path="url(#AD)"><g clip-path="url(#AE)"><g clip-path="url(#AF)"><path d="M294.1 361.846h-89.47v54.65h89.47v-54.65z" fill="url(#AG)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="AI"><path d="M221.458 415.068h49.877v-62.164h-49.877v62.164z"/></clipPath><clipPath id="AJ"><path d="M221.504 352.904h49.826v62.132h-49.826v-62.132z"/></clipPath><clipPath id="AK"><path d="M262.806 415.036c-7.84-30.236-24.22-54.525-37.95-60.648-.008-.006-.02-.01-.023-.01a21.68 21.68 0 0 0-.742-.316c-.032-.01-.062-.024-.1-.036-.07-.03-.14-.052-.2-.08-.033-.008-.064-.025-.093-.037l-.345-.123c-.048-.015-.095-.033-.14-.048-.053-.014-.1-.038-.17-.056-.05-.022-.105-.037-.163-.058-.05-.015-.102-.027-.146-.048-.1-.03-.194-.054-.294-.087-.043-.01-.08-.025-.124-.035-.062-.018-.133-.035-.198-.053-.048-.012-.086-.025-.134-.035-.07-.023-.148-.04-.216-.058l-.264-.055a5.53 5.53 0 0 1 1.964-.347c13.022 0 26.147 23.333 47.87 62.132h-8.53z"/></clipPath><clipPath id="AL"><path d="M221.457 415.068h49.83v-62.132h-49.83v62.132z"/></clipPath><clipPath id="AM"><path d="M221.458 352.935v62.133h49.83v-62.133h-49.83z"/></clipPath><clipPath id="AN"><path d="M85.885 420.357h89.473v-76.144H85.885v76.144z"/></clipPath><clipPath id="AO"><path d="M84.892 421.33h91.466v-78.117H84.892v78.117z"/></clipPath><clipPath id="AP"><path d="M85.887 344.24h89.457v76.116H85.887V344.24z"/></clipPath><clipPath id="AQ"><path d="M85.885 420.357h89.473v-76.144H85.885v76.144z"/></clipPath><clipPath id="AR"><path d="M85.887 344.24h89.457v76.116H85.887V344.24z"/></clipPath><clipPath id="AS"><path d="M175.35 344.24H85.885v76.116h89.466V344.24z"/></clipPath><clipPath id="AT"><path d="M85.892 420.33h89.466v-76.117H85.892v76.117z"/></clipPath><clipPath id="AU"><path d="M85.892 344.213v76.118h89.467v-76.118H85.892z"/></clipPath><linearGradient id="AV" spreadMethod="pad" y2="420.329" x2="130.625" y1="344.213" x1="130.625" xlink:href="#CP"><stop offset="0" stop-color="#231f20"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="AW" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#AN)"><g clip-path="url(#AO)"><g clip-path="url(#AP)"><g clip-path="url(#AQ)"><g clip-path="url(#AR)"><g clip-path="url(#AS)"><g clip-path="url(#AT)"><g clip-path="url(#AU)"><path d="M85.892 420.33h89.466v-76.117H85.892v76.117z" fill="url(#AV)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="AX"><path d="M111.2 413.692h45.352V351.26H111.2v62.433z"/></clipPath><clipPath id="AY"><path d="M111.217 351.26h45.347v62.434h-45.347V351.26z"/></clipPath><clipPath id="AZ"><path d="M120.886 365.985c13.37 25.763 19.705 42.07 30.884 46.48-11.526-4.512-24.5-21.528-30.884-46.48"/></clipPath><clipPath id="Aa"><path d="M120.87 412.433h30.885V365.95H120.87v46.482z"/></clipPath><clipPath id="Ab"><path d="M120.87 365.952v46.48h30.885v-46.48H120.87z"/></clipPath><clipPath id="Ac"><path d="M64.298 437.096h135.628v-137.4H64.298v137.4z"/></clipPath><clipPath id="Ad"><path d="M63.298 438.096h137.628v-139.4H63.298v139.4z"/></clipPath><clipPath id="Ae"><path d="M98.22 328.665h67.698v79.73H98.22v-79.73z"/></clipPath><clipPath id="Af"><path d="M64.298 437.096h135.628v-137.4H64.298v137.4z"/></clipPath><clipPath id="Ag"><path d="M98.22 328.665h67.698v79.73H98.22v-79.73z"/></clipPath><clipPath id="Ah"><path d="M98.234 346.8l32.406-18.126 35.3 61.6-32.403 18.132-35.294-61.605z"/></clipPath><clipPath id="Ai"><path d="M199.926 389.262l-50.094-89.575-85.534 47.834 50.093 89.575 85.535-47.834z"/></clipPath><clipPath id="Aj"><path d="M199.926 389.262l-50.093-89.575-85.535 47.834 50.093 89.575 85.535-47.834z"/></clipPath><linearGradient id="Ak" spreadMethod="pad" y2="289.807" x2="88.162" y1="393.9" x1="146.375" xlink:href="#CP"><stop offset="0" stop-color="#231f20"/><stop offset=".129" stop-color="#fff"/><stop offset=".4" stop-color="#fff"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="Al" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#Ac)"><g clip-path="url(#Ad)"><g clip-path="url(#Ae)"><g clip-path="url(#Af)"><g clip-path="url(#Ag)"><g clip-path="url(#Ah)"><g clip-path="url(#Ai)"><g clip-path="url(#Aj)"><path d="M199.926 389.262l-50.094-89.575-85.534 47.834 50.093 89.575 85.535-47.834z" fill="url(#Ak)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="Am"><path d="M125.885 387.26h28.722V351.3h-28.722v35.97z"/></clipPath><clipPath id="An"><path d="M125.895 351.3h28.7v35.97h-28.7V351.3z"/></clipPath><clipPath id="Ao"><path d="M126.956 351.382l-.242-.028c-.02-.004-.032-.004-.047-.007l-.206-.02c-.01 0-.023-.003-.033-.003l-.493-.035h-.05c13.532.38 19.718 7.154 22.785 16.98l5.93 19c-5.668-7.977-11.362-17.484-17.087-28.14-2.76-5.135-6.96-7.28-10.557-7.737"/></clipPath><clipPath id="Ap"><path d="M125.894 387.258h28.714v-35.97h-28.714v35.97z"/></clipPath><clipPath id="Aq"><path d="M125.893 351.287v35.97h28.714v-35.97h-28.714z"/></clipPath><clipPath id="Ar"><path d="M126.956 351.387v-.005c3.598.458 7.798 2.6 10.557 7.737 5.725 10.65 11.422 20.163 17.082 28.14 2.062 6.468 3.76 11.417 5.43 15.182-11.286-10.742-22.617-28.606-33.068-51.054"/></clipPath><clipPath id="As"><path d="M127.028 402.367h33.068v-51.06h-33.068v51.06z"/></clipPath><clipPath id="At"><path d="M127.028 351.307v51.06h33.068v-51.06h-33.068z"/></clipPath><clipPath id="Au"><path d="M156.1 413.58c-.04-.008-.07-.01-.1-.013-.06-.012-.125-.023-.188-.028l-.113-.012-.2-.035c-.032-.002-.063-.008-.088-.01l-.435-.077c-.018-.003-.036-.008-.05-.008l-.2-.04-.106-.03-.205-.04-.096-.023-.717-.186c-.02-.008-.053-.014-.083-.025-.07-.017-.14-.042-.216-.066l-.098-.027-.215-.065c-.026-.007-.05-.02-.075-.02l-.497-.172-.24-.086-.096-.04c-.072-.02-.146-.05-.2-.075-.023-.012-.052-.022-.07-.035-11.18-4.412-17.514-20.718-30.884-46.48a123.95 123.95 0 0 1-2.819-14.716h.717l6.663.01h.063l.425.01.493.035c.01 0 .023.003.03.003.07.01.14.015.206.02.018.003.028.003.05.007.073.007.16.016.242.028v.005c10.45 22.448 21.782 40.312 33.068 51.054 1.242 2.813 2.464 4.96 3.805 6.585-.785 1.326-1.642 2.43-2.6 3.236-.01.005-.02.008-.028.018-.052.022-.105.047-.158.075a3.34 3.34 0 0 1-.158.081c-.05.02-.106.047-.154.075a.94.94 0 0 0-.18.08c-.05.016-.093.04-.14.06a6.14 6.14 0 0 0-.297.123l-.126.05a2.23 2.23 0 0 0-.22.087c-.038.01-.078.026-.12.038-.106.035-.206.073-.304.106-.017.005-.023.005-.027.01-.12.037-.235.067-.355.1-.028.013-.05.018-.08.026-.106.028-.2.058-.296.084-.025.003-.05.01-.07.016a9.25 9.25 0 0 1-.744.163c-.023.002-.053.01-.078.016l-.322.05c-.02.01-.04.01-.063.014l-.383.05c-.02.003-.042.008-.067.008-.1.016-.196.023-.292.032-.163-.012-.316-.027-.47-.042"/></clipPath><clipPath id="Av"><path d="M119.313 343.45l-12.043 68.3 55.044 9.705 12.043-68.3-55.044-9.706z"/></clipPath><clipPath id="Aw"><path d="M119.313 343.45l-12.043 68.3 55.043 9.706 12.043-68.3-55.044-9.706z"/></clipPath><clipPath id="Ax"><path d="M232.177 398.296l-6.468-20.63c7.06 9.714 14.012 21.93 20.63 36.033-7.72-2.427-11.84-7.976-14.163-15.402"/></clipPath><clipPath id="Ay"><path d="M225.748 413.707h20.63v-36.032h-20.63v36.032z"/></clipPath><clipPath id="Az"><path d="M225.748 377.675v36.033h20.63v-36.033h-20.63z"/></clipPath><clipPath id="BA"><path d="M207.146 420.525h89.495v-31.198h-89.495v31.198z"/></clipPath><clipPath id="BB"><path d="M206.17 421.525h91.47V388.35h-91.47v33.176z"/></clipPath><clipPath id="BC"><path d="M207.146 389.327h89.48v31.176h-89.48v-31.176z"/></clipPath><clipPath id="BD"><path d="M207.146 420.525h89.495v-31.198h-89.495v31.198z"/></clipPath><clipPath id="BE"><path d="M207.146 389.327h89.48v31.176h-89.48v-31.176z"/></clipPath><clipPath id="BF"><path d="M207.146 420.503h89.472v-31.176h-89.472v31.176z"/></clipPath><clipPath id="BG"><path d="M296.64 389.35h-89.47v31.176h89.47V389.35z"/></clipPath><clipPath id="BH"><path d="M296.64 420.525V389.35h-89.47v31.176h89.47z"/></clipPath><linearGradient id="BI" spreadMethod="pad" y2="389.349" x2="251.906" y1="420.525" x1="251.906" xlink:href="#CP"><stop offset="0" stop-color="#231f20"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="BJ" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#BA)"><g clip-path="url(#BB)"><g clip-path="url(#BC)"><g clip-path="url(#BD)"><g clip-path="url(#BE)"><g clip-path="url(#BF)"><g clip-path="url(#BG)"><g clip-path="url(#BH)"><path d="M296.64 389.35h-89.47v31.176h89.47V389.35z" fill="url(#BI)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="BK"><path d="M214.456 421.616h58.7v-73.628h-58.7v73.628z"/></clipPath><clipPath id="BL"><path d="M224.852 354.388h37.957v60.648h-37.957v-60.648z"/></clipPath><clipPath id="BM"><path d="M225.933 354.903l-1.076-.515c13.73 6.123 30.108 30.412 37.95 60.648h-1.6c-18.014-32.18-23.808-53.72-35.283-60.133"/></clipPath><clipPath id="BN"><path d="M273.147 413.298l-11.516-65.3-47.175 8.318 11.516 65.3 47.175-8.318z"/></clipPath><clipPath id="BO"><path d="M273.147 413.298l-11.516-65.3-47.175 8.318 11.516 65.3 47.175-8.318z"/></clipPath><clipPath id="BP"><path d="M256.184 415.036h-6.678c-.225 0-.445-.005-.665-.008l-.628-.007h-.015l-1.267-.06-.6-1.262c-6.62-14.102-13.572-26.32-20.63-36.033-3.32-10.214-5.754-16.413-8.74-20.06 1.278-2.177 2.76-3.708 4.53-4.36.052.017.092.024.137.033.01.007.02.007.03.007.03.005.063.018.095.02.073.017.15.033.22.058l.134.035c.065.018.136.035.198.05.04.018.08.027.124.037.103.033.195.055.294.087.044.02.093.036.146.048.055.02.113.036.163.06.06.018.118.03.17.053.046.012.096.033.14.053.115.04.228.075.347.12.03.01.06.028.093.034.07.03.143.05.2.084.028.01.058.023.1.033a21.68 21.68 0 0 1 .742.316c.002 0 .015.005.023.01.357.158.716.332 1.073.515 11.478 6.412 17.272 27.952 35.286 60.133h-5.032z"/></clipPath><clipPath id="BQ"><path d="M261.187 353.24h-44.25v61.8h44.25v-61.8z"/></clipPath><clipPath id="BR"><path d="M261.187 415.03v-61.8h-44.25v61.8h44.25z"/></clipPath><clipPath id="BS"><path d="M143.566 416.188h37.986v-8.76h-37.986v8.76z"/></clipPath><clipPath id="BT"><path d="M142.566 417.18h39.976v-10.752h-39.976v10.752z"/></clipPath><clipPath id="BU"><path d="M143.568 407.435h37.98v8.753h-37.98v-8.753z"/></clipPath><clipPath id="BV"><path d="M143.566 416.188h37.986v-8.76h-37.986v8.76z"/></clipPath><clipPath id="BW"><path d="M143.568 407.435h37.98v8.753h-37.98v-8.753z"/></clipPath><clipPath id="BX"><path d="M181.552 407.435h-37.976v8.753h37.976v-8.753z"/></clipPath><clipPath id="BY"><path d="M143.566 416.18h37.976v-8.753h-37.976v8.753z"/></clipPath><clipPath id="BZ"><path d="M143.566 407.428v8.752h37.976v-8.752h-37.976z"/></clipPath><linearGradient id="Ba" spreadMethod="pad" y2="416.181" x2="162.555" y1="407.428" x1="162.555" xlink:href="#CP"><stop offset="0" stop-color="#fff"/><stop offset=".363" stop-color="#fff"/><stop offset="1" stop-color="#918f90"/></linearGradient><mask id="Bb" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#BS)"><g clip-path="url(#BT)"><g clip-path="url(#BU)"><g clip-path="url(#BV)"><g clip-path="url(#BW)"><g clip-path="url(#BX)"><g clip-path="url(#BY)"><g clip-path="url(#BZ)"><path d="M143.566 416.18h37.976v-8.753h-37.976v8.753z" fill="url(#Ba)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="Bc"><path d="M154.208 420.9h30.08v-18.168h-30.08V420.9z"/></clipPath><clipPath id="Bd"><path d="M155.173 407.816h27.347v5.876h-27.347v-5.876z"/></clipPath><clipPath id="Be"><path d="M156.56 413.622l1.087.046c3.112 0 5.8-.963 8.192-2.65 2.515 1.98 5.553 2.674 9.773 2.674h-20.437c.47 0 .932-.026 1.385-.07"/></clipPath><clipPath id="Bf"><path d="M158.155 420.9l18.385-7.625-3.947-9.516-18.385 7.626 3.947 9.515z"/></clipPath><clipPath id="Bg"><path d="M158.155 420.9l18.385-7.626-3.947-9.516-18.385 7.626 3.947 9.516z"/></clipPath><clipPath id="Bh"><path d="M175.613 413.692c-4.22 0-7.258-.693-9.773-2.674.835-.592 1.64-1.276 2.402-2.038 3.497 2.226 6.963 3.698 10.38 4.34 1.305.246 2.606.37 3.888.37h-6.897z"/></clipPath><clipPath id="Bi"><path d="M164.075 412.92l15.6 7.07 4.614-10.177-15.6-7.07-4.614 10.177z"/></clipPath><clipPath id="Bj"><path d="M164.075 412.92l15.6 7.072 4.613-10.177-15.6-7.072-4.613 10.177z"/></clipPath><clipPath id="Bk"><path d="M186.546 410.283h89.5V361.15h-89.5v49.133z"/></clipPath><clipPath id="Bl"><path d="M185.578 411.246h91.47V360.15h-91.47v51.096z"/></clipPath><clipPath id="Bm"><path d="M186.546 361.187h89.482v49.096h-89.482v-49.096z"/></clipPath><clipPath id="Bn"><path d="M186.546 410.283h89.5V361.15h-89.5v49.133z"/></clipPath><clipPath id="Bo"><path d="M186.546 361.187h89.482v49.096h-89.482v-49.096z"/></clipPath><clipPath id="Bp"><path d="M276.023 361.187h-89.47v49.096h89.47v-49.096z"/></clipPath><clipPath id="Bq"><path d="M186.578 410.246h89.47V361.15h-89.47v49.095z"/></clipPath><clipPath id="Br"><path d="M186.58 361.15v49.095h89.47V361.15h-89.47z"/></clipPath><linearGradient id="Bs" spreadMethod="pad" y2="410.247" x2="231.313" y1="361.15" x1="231.313" xlink:href="#CP"><stop offset="0" stop-color="#231f20"/><stop offset="1" stop-color="#fff"/></linearGradient><mask id="Bt" height="1" width="1" y="0" x="0" maskUnits="userSpaceOnUse"><g clip-path="url(#Bk)"><g clip-path="url(#Bl)"><g clip-path="url(#Bm)"><g clip-path="url(#Bn)"><g clip-path="url(#Bo)"><g clip-path="url(#Bp)"><g clip-path="url(#Bq)"><g clip-path="url(#Br)"><path d="M186.578 410.246h89.47V361.15h-89.47v49.095z" fill="url(#Bs)" stroke="none"/></g></g></g></g></g></g></g></g></mask><clipPath id="Bu"><path d="M214.165 414.975h32.908v-50.787h-32.908v50.787z"/></clipPath><clipPath id="Bv"><path d="M214.167 364.188h32.753v50.772h-32.753v-50.772z"/></clipPath><clipPath id="Bw"><path d="M225.7 377.66l6.473 20.636c2.32 7.428 6.433 12.977 14.158 15.402l.593 1.262c-12.6-.753-18.473-7.16-21.435-16.642-5.178-16.558-8.314-27.292-11.333-34.13 3.857 3.688 7.712 8.214 11.544 13.472"/></clipPath><clipPath id="Bx"><path d="M247.073 364.203h-32.77v50.772h32.77v-50.772z"/></clipPath><clipPath id="By"><path d="M247.073 414.974v-50.77h-32.77v50.77h32.77z"/></clipPath><linearGradient id="Bz" spreadMethod="pad" y2="337.71" x2="181.125" y1="414.088" x1="181.125" xlink:href="#CP"><stop offset="0" stop-color="#0994dc"/><stop offset=".11" stop-color="#0994dc"/><stop offset=".35" stop-color="#66cef5"/><stop offset=".45" stop-color="#66cef5"/><stop offset=".846" stop-color="#127bca"/><stop offset="1" stop-color="#127bca"/></linearGradient><linearGradient id="CA" spreadMethod="pad" y2="337.638" x2="184.188" y1="415.963" x1="184.188" xlink:href="#CP"><stop offset="0" stop-color="#0e76bc"/><stop offset=".176" stop-color="#0e76bc"/><stop offset=".36" stop-color="#36aee8"/><stop offset=".52" stop-color="#36aee8"/><stop offset=".846" stop-color="#00adef"/><stop offset="1" stop-color="#00adef"/></linearGradient><linearGradient id="CB" spreadMethod="pad" y2="416.972" x2="199.875" y1="354.65" x1="199.875" xlink:href="#CP"><stop offset="0" stop-color="#1c63b7"/><stop offset=".5" stop-color="#33bdf2"/><stop offset="1" stop-color="#33bdf2"/></linearGradient><linearGradient id="CC" spreadMethod="pad" y2="342.579" x2="195.813" y1="423.9" x1="195.813" xlink:href="#CP"><stop offset="0" stop-color="#166ab8"/><stop offset=".099" stop-color="#166ab8"/><stop offset=".4" stop-color="#36aee8"/><stop offset=".516" stop-color="#36aee8"/><stop offset=".846" stop-color="#0798dd"/><stop offset="1" stop-color="#0798dd"/></linearGradient><linearGradient id="CD" spreadMethod="pad" y2="337.051" x2="189.313" y1="423.525" x1="189.313" xlink:href="#CP"><stop offset="0" stop-color="#124379"/><stop offset=".11" stop-color="#124379"/><stop offset=".39" stop-color="#1487cb"/><stop offset=".52" stop-color="#1487cb"/><stop offset=".78" stop-color="#165197"/><stop offset="1" stop-color="#165197"/></linearGradient><linearGradient id="CE" spreadMethod="pad" y2="416.954" x2="246.375" y1="356.244" x1="246.375" xlink:href="#CP"><stop offset="0" stop-color="#136ab4"/><stop offset=".315" stop-color="#59caf5"/><stop offset=".6" stop-color="#59caf5"/><stop offset="1" stop-color="#59caf5"/></linearGradient><linearGradient id="CF" spreadMethod="pad" y2="416.813" x2="136.313" y1="354.65" x1="136.313" xlink:href="#CP"><stop offset="0" stop-color="#318ed5"/><stop offset=".675" stop-color="#38a7e4"/><stop offset="1" stop-color="#38a7e4"/></linearGradient><linearGradient id="CG" spreadMethod="pad" y2="414.888" x2="140.25" y1="354.463" x1="140.25" xlink:href="#CP"><stop offset="0" stop-color="#05a1e6"/><stop offset="1" stop-color="#05a1e6"/></linearGradient><linearGradient id="CH" spreadMethod="pad" y2="402.367" x2="143.563" y1="351.307" x1="143.563" xlink:href="#CP"><stop offset="0" stop-color="#1959a6"/><stop offset=".154" stop-color="#1959a6"/><stop offset=".484" stop-color="#05a1e6"/><stop offset=".5" stop-color="#05a1e6"/><stop offset=".918" stop-color="#7ec5ea"/><stop offset="1" stop-color="#7ec5ea"/></linearGradient><linearGradient id="CI" spreadMethod="pad" y2="410.014" x2="135.55" y1="354.65" x1="145.313" xlink:href="#CP"><stop offset="0" stop-color="#165096"/><stop offset=".104" stop-color="#165096"/><stop offset="1" stop-color="#0d82ca"/></linearGradient><linearGradient id="CJ" spreadMethod="pad" y2="414.896" x2="236.063" y1="385.963" x1="236.063" xlink:href="#CP"><stop offset="0" stop-color="#05a1e6"/><stop offset=".649" stop-color="#05a1e6"/><stop offset=".874" stop-color="#0495d6"/><stop offset="1" stop-color="#0495d6"/></linearGradient><linearGradient id="CK" spreadMethod="pad" y2="350.933" x2="237.83" y1="417.65" x1="249.594" xlink:href="#CP"><stop offset="0" stop-color="#38a7e4"/><stop offset=".357" stop-color="#38a7e4"/><stop offset=".962" stop-color="#0e88d3"/><stop offset="1" stop-color="#0e88d3"/></linearGradient><linearGradient id="CL" spreadMethod="pad" y2="352.093" x2="239.063" y1="415.213" x1="239.063" xlink:href="#CP"><stop offset="0" stop-color="#168cd4"/><stop offset=".5" stop-color="#1c87cc"/><stop offset="1" stop-color="#154b8d"/></linearGradient><linearGradient id="CM" spreadMethod="pad" y2="410.471" x2="173.102" y1="416.502" x1="158.563" xlink:href="#CP"><stop offset="0" stop-color="#97d6ee"/><stop offset=".703" stop-color="#55c1ea"/><stop offset="1" stop-color="#55c1ea"/></linearGradient><linearGradient id="CN" spreadMethod="pad" y2="414.512" x2="178.479" y1="409.307" x1="166.996" xlink:href="#CP"><stop offset="0" stop-color="#7accec"/><stop offset=".335" stop-color="#7accec"/><stop offset=".841" stop-color="#3fb7ed"/><stop offset="1" stop-color="#3fb7ed"/></linearGradient><linearGradient id="CO" spreadMethod="pad" y2="350.007" x2="230.688" y1="411.744" x1="230.688" xlink:href="#CP"><stop offset="0" stop-color="#1da7e7"/><stop offset="1" stop-color="#37abe7"/></linearGradient><linearGradient id="CP" gradientUnits="userSpaceOnUse"/></defs><g transform="matrix(.327726 0 0 .327726 -39.858395 170.97773)"><g transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#A)"><g clip-path="url(#B)"><g clip-path="url(#C)"><path d="M195.484 352.88h-28.716v51.212h28.716V352.88z" fill="url(#Bz)"/></g></g></g><g clip-path="url(#D)"><g clip-path="url(#E)"><g clip-path="url(#F)"><path d="M199.257 353.196h-30.14v52.517h30.14v-52.517z" fill="url(#CA)"/></g></g></g></g><path d="M228.138-468.115c-1.602 0-3.23.156-4.86.468-4.268.804-8.604 2.64-12.975 5.423 1.195 1.18 2.33 2.526 3.397 4 4.445-3.7 8.86-6.416 13.263-8.055a29.76 29.76 0 0 1 4.947-1.375 15.24 15.24 0 0 0-3.773-.46" fill="#14559a"/><g mask="url(#P)" transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#Q)"><g clip-path="url(#R)"><g clip-path="url(#S)"><g clip-path="url(#T)"><g clip-path="url(#U)"><path d="M185.566 413.666h28.62V360.46h-28.62v53.205z" fill="url(#CB)"/></g></g></g></g></g></g><g mask="url(#d)"><g clip-path="url(#e)" transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#f)"><path d="M185.528 413.325c-.954.242-1.957.367-3.018.367l6.682-.024a19.81 19.81 0 0 1-3.664-.343" fill="#3092c4"/></g></g></g><path d="M262.02-396.912c-.83-.794-1.618-1.66-2.394-2.6-3.57 2.53-7.132 4.45-10.67 5.696 1.257.616 2.577 1.07 3.976 1.355 1.084.224 2.2.336 3.4.336 3.967 0 7.104-.473 9.776-1.75-1.47-.796-2.82-1.826-4.08-3.047" fill="#1969bc"/><g transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#g)"><g clip-path="url(#h)"><g clip-path="url(#i)"><path d="M209.982 358.734h-28.34v54.526h28.34v-54.526z" fill="url(#CC)"/></g></g></g><g clip-path="url(#j)"><g clip-path="url(#k)"><g clip-path="url(#l)"><path d="M207.683 354.228h-36.74v57.98h36.74v-57.98z" fill="url(#CD)"/></g></g></g></g><g mask="url(#v)"><g clip-path="url(#w)" transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#x)"><path d="M160.024 402.44c-1.668-3.765-3.367-8.717-5.427-15.182 4.094 5.765 8.173 10.735 12.227 14.758-.56 1.717-1.157 3.302-1.803 4.713-1.66-1.27-3.33-2.7-4.997-4.3" fill="#33bdf2"/></g></g></g><path d="M208.12-460.77l-1.844 1.358c.808 1.764 1.555 3.745 2.254 5.9l2.75-2.607c-.983-1.686-2.024-3.246-3.16-4.64" fill="#2b74b1"/><path d="M210.303-462.225l-2.183 1.455c1.132 1.395 2.176 2.955 3.16 4.64l2.42-2.098c-1.07-1.472-2.202-2.82-3.397-4" fill="#125a9e"/><g mask="url(#AH)" transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#AI)"><g clip-path="url(#AJ)"><g clip-path="url(#AK)"><g clip-path="url(#AL)"><g clip-path="url(#AM)"><path d="M221.457 415.068h49.83v-62.132h-49.83v62.132z" fill="url(#CE)"/></g></g></g></g></g></g><g mask="url(#AW)"><g clip-path="url(#AX)" transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#AY)"><path d="M151.77 412.466c.008.008.02.013.024.013a.19.19 0 0 0 .03.011l.228.088c.018.004.028.01.04.014a.5.5 0 0 1 .052.023l.23.08.5.18c.026 0 .05.012.075.02l.215.065c.033.012.068.018.098.03l.216.063.083.025.717.184.096.025.208.04.103.03.2.04c.018 0 .03.005.05.008l.435.077a.57.57 0 0 0 .088.011l.198.035.114.012.193.028a.68.68 0 0 1 .106.013l.47.042-1.385.07c-14.664 0-34.863-27.203-43.965-62.433l1.754.008c2.915 5.192 5.53 10.106 7.92 14.718 6.375 24.953 19.355 41.972 30.884 46.48" fill="#05a1e6"/></g></g></g><g fill="#0d82ca"><path d="M200.03-454.05c2.084-1.988 4.17-3.775 6.246-5.36l-1.5-2.873c-1.676 2.034-3.206 4.717-4.756 8.234"/><path d="M201.535-466.325c1.2 1.004 2.27 2.385 3.25 4.04l.945-1.06c-1.36-1.27-2.83-2.314-4.43-3.1l.197.094c.01.012.023.02.035.025"/></g><g clip-path="url(#AZ)" transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#Aa)"><g clip-path="url(#Ab)"><path d="M120.87 412.433h30.885V365.95H120.87v46.482z" fill="url(#CF)"/></g></g></g><path d="M205.73-463.345l-.945 1.06c.525.877 1.013 1.835 1.5 2.873l1.844-1.358c-.756-.934-1.555-1.798-2.4-2.575" fill="#127bca"/><g transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g mask="url(#Al)"><g clip-path="url(#Am)"><g clip-path="url(#An)"><g clip-path="url(#Ao)"><g clip-path="url(#Ap)"><g clip-path="url(#Aq)"><path d="M125.894 387.258h28.714v-35.97h-28.714v35.97z" fill="url(#CG)"/></g></g></g></g></g></g><g clip-path="url(#Ar)"><g clip-path="url(#As)"><g clip-path="url(#At)"><path d="M127.028 402.367h33.068v-51.06h-33.068v51.06z" fill="url(#CH)"/></g></g></g></g><path d="M151.108-408.48c-3 5.765-6.262 11.908-9.9 18.397l6.377-.002c.843-6.446 2.04-12.595 3.524-18.395" fill="#05a1e6"/><g transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#Au)"><g clip-path="url(#Av)"><g clip-path="url(#Aw)"><path d="M119.313 343.45l-12.043 68.3 55.044 9.705 12.043-68.3-55.044-9.706z" fill="url(#CI)"/></g></g></g><g clip-path="url(#Ax)"><g clip-path="url(#Ay)"><g clip-path="url(#Az)"><path d="M225.748 413.707h20.63v-36.032h-20.63v36.032z" fill="url(#CJ)"/></g></g></g><g mask="url(#BJ)"><g clip-path="url(#BK)"><g clip-path="url(#BL)"><g clip-path="url(#BM)"><g clip-path="url(#BN)"><g clip-path="url(#BO)"><path d="M273.147 413.298l-11.516-65.3-47.175 8.318 11.516 65.3 47.175-8.318z" fill="url(#CK)"/></g></g></g></g></g></g></g><path d="M271.2-398.006c3.734-4.56 6.778-12.308 10.926-25.075-4.788 6.58-9.6 12.232-14.434 16.846-.006.014-.006.026-.016.042 1.053 3.15 2.208 5.938 3.524 8.186" fill="#079ae1"/><path d="M271.2-398.006c-1.27 1.553-2.615 2.73-4.115 3.606l-.995.535a14.49 14.49 0 0 0 5.235 1.65h.013l.855.076h.054l.4.02h.056l.423.006.455-.006.14-.01.32-.01.158-.02.3-.02c.016 0 .025 0 .035-.01.04 0 .077-.006.116-.006l.334-.035c.01 0 .015-.004.03-.004.03-.007.067-.012.1-.016l.36-.052c.036 0 .067-.01.106-.015l.403-.066h.022c.01-.007.027-.007.036-.01l.803-.17c-2.214-.8-4.067-2.725-5.665-5.446" fill="#1969bc"/><g fill="#1e5cb3"><path d="M239.57-392.114a25.98 25.98 0 0 0 4.858-.467c1.504-.278 3.016-.695 4.53-1.224a16.58 16.58 0 0 0 3.976 1.358c1.084.22 2.2.334 3.4.334H239.57z"/><path d="M256.324-392.114c3.967 0 7.107-.467 9.776-1.75a14.43 14.43 0 0 0 5.235 1.65h.013l.855.076h.054l.4.02h.056l.423.006h-16.824z"/></g><path d="M273.148-392.114l.455-.006.14-.01.32-.01.157-.02.3-.02c.016 0 .022 0 .035-.006.04 0 .077-.01.12-.01l.33-.035c.01 0 .015-.004.03-.004.03-.007.068-.012.1-.016l.36-.053a.45.45 0 0 0 .106-.015l.402-.066h.02c.015-.007.03-.007.04-.01l.804-.17a7 7 0 0 0 2.455.43l-6.185.016z" fill="#1d60b5"/><path d="M267.686-406.192c0-.007-.006-.016-.006-.022l-5.3 4.637-2.765 2.076 2.394 2.6c1.26 1.22 2.6 2.25 4.08 3.047l.995-.535c1.5-.876 2.846-2.054 4.115-3.606-1.314-2.25-2.47-5.035-3.524-8.186" fill="#175fab"/><g transform="matrix(1.25 0 0 -1.25 0 49.00003)"><g clip-path="url(#BP)"><g clip-path="url(#BQ)"><g clip-path="url(#BR)"><path d="M261.187 353.24h-44.25v61.8h44.25v-61.8z" fill="url(#CL)"/></g></g></g><g mask="url(#Bb)"><g clip-path="url(#Bc)"><g clip-path="url(#Bd)"><path d="M156.56 413.622l.084-.01a1.54 1.54 0 0 0 .208-.023c.025 0 .047-.005.067-.008l.383-.05c.022-.005.043-.005.063-.012l.322-.053a.38.38 0 0 1 .08-.016l.742-.163.068-.016.3-.084c.03-.008.053-.013.08-.026l.355-.1c.004-.006.01-.006.024-.01l.3-.106.12-.04.22-.1c.04-.01.083-.026.126-.043l.294-.123.143-.062.18-.076c.05-.028.107-.052.156-.075l.158-.08c1.278-.628 2.455-1.462 3.543-2.48a11.69 11.69 0 0 0 1.255 1.142c-2.38 1.687-5.08 2.65-8.192 2.65a12.05 12.05 0 0 1-1.087-.046" fill="#7dcbec"/><path d="M164.585 409.876c.667-.622 1.306-1.313 1.9-2.06l1.746 1.164c-.762.762-1.567 1.446-2.402 2.038-.434-.34-.852-.72-1.255-1.142" fill="#5ec5ed"/><g clip-path="url(#Be)"><g clip-path="url(#Bf)"><g clip-path="url(#Bg)"><path d="M158.155 420.9l18.385-7.625-3.947-9.516-18.385 7.626 3.947 9.515z" fill="url(#CM)"/></g></g></g><g clip-path="url(#Bh)"><g clip-path="url(#Bi)"><g clip-path="url(#Bj)"><path d="M164.075 412.92l15.6 7.07 4.614-10.177-15.6-7.07-4.614 10.177z" fill="url(#CN)"/></g></g></g></g></g></g><g mask="url(#Bt)"><g clip-path="url(#Bu)"><g clip-path="url(#Bv)"><g clip-path="url(#Bw)"><g clip-path="url(#Bx)"><g clip-path="url(#By)"><path d="M247.073 364.203h-32.77v50.772h32.77v-50.772z" fill="url(#CO)"/></g></g></g></g></g></g></g><path d="M305.738-393.33l-.244.617h-.024c-.035-.137-.1-.34-.226-.604l-1.538-3.5h-.776v5.017h.56v-3.36l-.025-.983h.012c.054.24.105.413.153.52l1.715 3.825h.286l1.708-3.854c.047-.1.096-.26.157-.5h.01l-.046.974v3.37h.585v-5.017h-.74l-1.57 3.488zm-7.077-2.954h1.446v4.484h.6v-4.484h1.44v-.534h-3.48v.534zm36.454-2.74a3.75 3.75 0 0 0-2.805 1.188c-.768.795-1.15 1.75-1.15 2.88 0 1.1.38 2.055 1.15 2.86s1.704 1.207 2.805 1.207a3.89 3.89 0 0 0 2.881-1.207c.794-.804 1.2-1.757 1.2-2.86s-.395-2.06-1.2-2.864a3.87 3.87 0 0 0-2.881-1.204m98.914-38.84h14.895v46.144h6.048v-46.144h14.867v-5.47h-35.8v5.47zm-27 22.64h18.642v-5.47H407.03v-17.17h20.12v-5.47H401v51.614h27.355v-5.47h-21.3v-18.035zm-23.486 8.244l.363 7.587h-.14c-.36-.7-1.06-1.842-2.1-3.45l-25.84-40.5H348v51.614h6.05V-429l-.288-7.087h.22c.455 1.175.993 2.252 1.615 3.24l26.637 41.14h7.34v-51.614h-6v36.353zm71.475-46.675c0 2.764 1.225 4.147 3.68 4.147.875 0 1.58-.15 2.114-.455v-1.92c-.412.303-.896.455-1.455.455-.75 0-1.283-.2-1.608-.602-.322-.4-.478-1.066-.478-2v-7.93h3.54v-1.907h-3.54v-4.16l-2.254.73v3.43h-2.414v1.907h2.414v8.316zm-9.2 3.835h2.25v-12.15h3.295v-1.907h-3.295v-2.166c0-1.986.782-2.98 2.358-2.98a3.02 3.02 0 0 1 1.495.37v-2.032c-.394-.16-.936-.244-1.63-.244-1.2 0-2.2.377-3.036 1.14-.965.875-1.437 2.1-1.437 3.634v2.28h-2.4v1.907h2.4v12.15zm-15.342-6.95c0-1.794.44-3.176 1.325-4.156.844-.915 1.966-1.373 3.365-1.373 1.416 0 2.522.452 3.308 1.358.814.944 1.22 2.316 1.22 4.118 0 1.72-.38 3.044-1.14 3.982-.776.96-1.905 1.44-3.387 1.44-1.428 0-2.566-.474-3.424-1.422-.845-.944-1.266-2.264-1.266-3.946m9.63 5.256c1.26-1.35 1.9-3.15 1.9-5.4 0-2.277-.595-4.07-1.767-5.37-1.18-1.294-2.812-1.946-4.9-1.946-2.134 0-3.838.625-5.106 1.865-1.37 1.34-2.06 3.226-2.06 5.67 0 2.144.606 3.868 1.813 5.173 1.233 1.354 2.9 2.03 5.025 2.03 2.14 0 3.843-.678 5.104-2.03m-15.455.796a3.65 3.65 0 0 0 1.293-2.863c0-1.046-.346-1.906-1.034-2.58-.526-.535-1.392-1.056-2.594-1.556-1.067-.455-1.778-.847-2.1-1.17-.374-.345-.564-.83-.564-1.45a1.75 1.75 0 0 1 .676-1.417c.446-.363 1.045-.545 1.8-.545 1.204 0 2.264.332 3.2 1.002v-2.267c-.886-.44-1.886-.658-3.005-.658-1.457 0-2.645.385-3.57 1.164s-1.386 1.745-1.386 2.9c0 1.043.3 1.9.894 2.54.493.55 1.332 1.077 2.5 1.594 1.142.502 1.913.93 2.306 1.3s.593.8.593 1.358c0 1.308-.892 1.965-2.675 1.965-1.335 0-2.55-.45-3.655-1.346v2.42c1 .566 2.156.846 3.5.846 1.622 0 2.914-.4 3.855-1.235m-20.062-10.2c.84-.915 1.96-1.373 3.36-1.373 1.42 0 2.52.452 3.3 1.358.8.944 1.22 2.316 1.22 4.118 0 1.72-.38 3.044-1.14 3.982-.776.96-1.9 1.44-3.387 1.44-1.43 0-2.57-.474-3.416-1.422-.853-.944-1.275-2.264-1.275-3.946 0-1.794.444-3.176 1.33-4.156m3.194 11.444c2.14 0 3.842-.678 5.1-2.03s1.9-3.15 1.9-5.4c0-2.277-.6-4.07-1.76-5.37-1.18-1.294-2.817-1.946-4.914-1.946-2.13 0-3.83.625-5.1 1.865-1.375 1.34-2.06 3.226-2.06 5.67 0 2.144.605 3.868 1.8 5.173 1.233 1.354 2.9 2.03 5.023 2.03M396.44-463.37c-.684.56-1.192 1.347-1.524 2.376h-.056v-2.9h-2.248v14.06h2.248v-7.17c0-1.63.35-2.905 1.06-3.83.623-.822 1.4-1.232 2.304-1.232.752 0 1.322.147 1.72.45v-2.334c-.305-.126-.75-.2-1.348-.2-.796 0-1.516.256-2.154.768m-11.086 13.873c1.486 0 2.772-.328 3.85-1v-2.14c-1.08.806-2.228 1.2-3.46 1.2-1.455 0-2.6-.475-3.476-1.427s-1.3-2.248-1.3-3.885c0-1.702.478-3.067 1.416-4.087.903-.998 2.067-1.498 3.5-1.498 1.2 0 2.302.364 3.35 1.1v-2.3c-.945-.472-2.03-.714-3.252-.714-2.233 0-4 .7-5.33 2.127-1.326 1.418-1.986 3.28-1.986 5.583 0 2.052.606 3.73 1.8 5.025 1.24 1.336 2.86 2.004 4.877 2.004m-12.423-.338h2.245v-14.06h-2.245v14.06zm1.15-17.626c.412 0 .764-.143 1.05-.428s.433-.63.433-1.043a1.4 1.4 0 0 0-.433-1.035 1.44 1.44 0 0 0-1.049-.418c-.4 0-.75.137-1.038.418a1.39 1.39 0 0 0-.428 1.035c0 .433.144.783.428 1.058s.636.413 1.038.413m-23.864 4.433l-.107-3.84h.05c.2.924.4 1.6.586 2.02l6.728 15.016h1.126l6.714-15.126c.174-.395.373-1.03.588-1.9h.054l-.192 3.815v13.22h2.3v-19.685h-2.9l-6.167 13.67c-.24.53-.55 1.336-.944 2.413h-.096c-.142-.536-.437-1.322-.894-2.356l-6.04-13.728h-3.047v19.685h2.226v-13.194zm113.586-2.426c.63-.634 1.42-.95 2.37-.95a3.22 3.22 0 0 1 2.342.942c.637.63.957 1.42.957 2.36s-.32 1.738-.964 2.365c-.642.64-1.424.956-2.336.956-.92 0-1.703-.312-2.34-.944-.645-.632-.972-1.43-.972-2.377 0-.93.314-1.716.94-2.353m2.353 6.053c1.064 0 1.955-.36 2.68-1.072s1.1-1.595 1.1-2.65c0-1.072-.364-1.96-1.096-2.66-.712-.684-1.592-1.03-2.644-1.03-1.07 0-1.965.36-2.685 1.08a3.6 3.6 0 0 0-1.079 2.645c0 1.067.35 1.947 1.06 2.647.707.693 1.6 1.043 2.673 1.043m-.785-5.56h.593c.4 0 .704.07.876.2.154.13.23.322.23.596 0 .545-.326.817-.985.817h-.714v-1.623zm0 2.192h.438c.308 0 .6.284.85.86l.52 1.14h.8l-.625-1.268c-.26-.524-.525-.817-.8-.88v-.02c.38-.08.68-.236.9-.468s.32-.505.32-.834a1.15 1.15 0 0 0-.39-.9c-.308-.27-.755-.4-1.353-.4h-1.34v4.765h.67v-2z" fill="#231f20"/></g></svg>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-auto mr-auto"></div>
                        <div class="col-auto"></div>
                      </div>
                      
                    </div>
                    </div>
                  
                </div>

              </section>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" style="margin-top: 0px;margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
                <!-- <img src="img/mpgc_hp1.jpg" class="testimonial-img-sldr" alt=""> -->


                <section id="hero" class="hero" style="padding-top:100px;">

                <img src="img/dsai_banner.png"  alt="" data-aos="fade-in">

                <div class="container">
                  
                   <div class="row justify-content-start">
                    <div class="col-lg-6">
                      <h2 class="display-1 text-center badge  text-wrap"  data-aos="fade-up" data-aos-delay="700">Your Data – Key of Growth , We Provide solution in</h2>
                      
                      <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">

                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="800"><i class="bi bi-code-slash"></i><i class="bi bi-arrow-bar-right"></i>End-To-End AI Solutions (AIaaS)</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="900"><i class="bi bi-clipboard-data"></i><i class="bi bi-arrow-bar-right"></i>Big Data Analytics & Visualization</h3>

                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="1000"><i class="bi bi-buildings-fill"></i><i class="bi bi-arrow-bar-right"></i>Business Intelligence (BI)</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="1100"><i class="bi bi-file-earmark-bar-graph"></i><i class="bi bi-arrow-bar-right"></i>DATA Migrtion.</h3><br>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="1200"><i class="bi bi-alexa"></i><i class="bi bi-arrow-bar-right"></i>AutoML/TinyML</h3>

                        </div>
                         <div class="col-sm-1">
                           
                         </div>
                      </div>
                      <div class="row">
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                          
                        </div>
                      </div>
                      

                    </div>
                    <div class="col-lg-6">
                      <div class="container">
                        <div class="row justify-content-start">
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1400">
                              <img src="img/icons8-chatgpt-256.png" class="flex-shrink-0" style="max-width:50%;max-height:50%;" alt="">
                            </h1>
                          </div>
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1500"><img src="img/Shutterstock_2260532809.png" class="flex-shrink-0" style="max-width:50%;max-height:50%;" alt=""></h1>
                          </div>
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1600"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><path fill="#039be5" d="M36.5,12c-1.326,0-2.59,0.256-3.758,0.705C31.321,10.48,28.836,9,26,9c-2.107,0-4.018,0.821-5.447,2.152C18.815,9.221,16.303,8,13.5,8C8.253,8,4,12.253,4,17.5c0,0.792,0.108,1.558,0.29,2.293C2.291,21.349,1,23.771,1,26.5C1,31.194,4.806,35,9.5,35c0.413,0,0.816-0.039,1.214-0.096C12.027,37.903,15.017,40,18.5,40c3.162,0,5.916-1.731,7.38-4.293C26.556,35.893,27.265,36,28,36c2.62,0,4.938-1.265,6.398-3.211C35.077,32.927,35.78,33,36.5,33C42.299,33,47,28.299,47,22.5C47,16.701,42.299,12,36.5,12z"/><path fill="#fff" d="M15.823 25c.045 0 .076-.037.076-.083C15.899 24.963 15.867 25 15.823 25L15.823 25zM21.503 23.934c.024 0 .047.008.055.013-.008-.005-.03-.013-.053-.013C21.504 23.933 21.503 23.934 21.503 23.934zM7.138 23.93c.023 0 .045.008.058.016-.013-.007-.034-.017-.056-.017C7.139 23.929 7.138 23.93 7.138 23.93zM24.126 21.909c-.016.039-.046.045-.072.043.004.001.004.003.009.003C24.086 21.954 24.112 21.944 24.126 21.909zM15.823 19c.045 0 .076.037.076.082C15.899 19.037 15.867 19 15.823 19L15.823 19zM21.359 22.185L21.359 22.185c0 .408.211.662.506.835C21.569 22.847 21.359 22.594 21.359 22.185zM38.126 24.729c.025.061-.032.087-.032.087S38.151 24.79 38.126 24.729zM8.558 21L8.558 21c.253 0 .503.034.733.093C9.061 21.034 8.811 21 8.558 21zM9.764 21.909c-.016.039-.046.045-.072.043.004.001.004.003.009.003C9.725 21.954 9.75 21.944 9.764 21.909zM35.195 24.164c.065.106.142.203.229.293s.185.169.294.237c-.109-.068-.207-.147-.294-.237C35.337 24.368 35.261 24.27 35.195 24.164zM37.83 21.797c-.012 0-.026-.002-.026-.002s.01.004.024.004C37.828 21.799 37.829 21.797 37.83 21.797zM37.832 24.189c0 0 .017-.003.034-.004-.001 0-.001-.001-.002-.001C37.846 24.184 37.832 24.189 37.832 24.189z"/><path fill="#fff" d="M6.885 24.462c-.029.07.01.084.02.096.087.058.174.1.262.146C7.636 24.933 8.08 25 8.543 25c.944 0 1.53-.462 1.53-1.207v-.014c0-.689-.662-.939-1.282-1.12L8.71 22.635c-.468-.14-.871-.261-.871-.545v-.014c0-.243.236-.422.602-.422.406 0 .888.125 1.199.283 0 0 .092.054.125-.027.018-.044.175-.434.192-.476.018-.045-.014-.08-.046-.098C9.555 21.136 9.065 21 8.558 21l-.094.001c-.864 0-1.467.481-1.467 1.17v.014c0 .726.665.962 1.289 1.126l.1.029c.454.128.846.239.846.533v.015c0 .269-.255.47-.665.47-.16 0-.667-.002-1.216-.322C7.285 24 7.247 23.975 7.196 23.946c-.027-.016-.095-.042-.124.039L6.885 24.462zM21.247 24.462c-.029.07.01.084.02.096.087.058.174.1.262.146C21.998 24.933 22.442 25 22.905 25c.944 0 1.53-.462 1.53-1.207v-.014c0-.689-.662-.939-1.282-1.12l-.081-.024c-.468-.14-.871-.261-.871-.545v-.014c0-.243.236-.422.602-.422.406 0 .888.125 1.199.283 0 0 .092.054.125-.027.018-.044.175-.434.192-.476.018-.045-.014-.08-.046-.098C23.917 21.136 23.427 21 22.92 21l-.094.001c-.864 0-1.467.481-1.467 1.17v.014c0 .726.666.962 1.289 1.126l.1.029c.454.128.846.239.846.533v.015c0 .269-.255.47-.665.47-.16 0-.667-.002-1.216-.322-.066-.036-.105-.06-.155-.09-.017-.01-.097-.039-.124.039L21.247 24.462zM31.465 22.219c-.077-.243-.198-.457-.358-.635-.16-.179-.364-.322-.605-.426C30.261 21.053 29.977 21 29.658 21c-.32 0-.604.053-.845.157s-.444.248-.604.427c-.161.178-.281.392-.358.634-.077.241-.116.505-.116.785s.039.544.116.785c.077.242.197.456.358.635.16.179.364.322.605.423S29.338 25 29.658 25c.319 0 .602-.051.844-.153.241-.102.444-.245.605-.423.16-.178.281-.392.358-.635.077-.241.116-.505.116-.785C31.581 22.724 31.542 22.46 31.465 22.219M30.677 23.004c0 .423-.085.758-.253.993-.166.233-.417.347-.767.347s-.6-.114-.763-.347c-.166-.236-.249-.57-.249-.993s.084-.756.249-.99c.164-.231.414-.343.764-.343s.6.112.767.343C30.592 22.247 30.677 22.581 30.677 23.004M37.933 24.233c-.026-.071-.101-.044-.101-.044-.114.041-.236.078-.366.097-.131.019-.276.029-.431.029-.381 0-.684-.105-.901-.313-.217-.208-.339-.544-.338-.999.001-.413.109-.724.302-.962.192-.236.485-.357.874-.357.325 0 .573.035.832.11 0 0 .062.025.091-.05.07-.178.12-.304.194-.499.021-.056-.03-.079-.049-.086-.102-.037-.343-.098-.525-.124C37.345 21.013 37.145 21 36.924 21c-.331 0-.625.053-.878.157-.252.103-.465.247-.635.426-.169.179-.297.392-.383.634-.086.241-.128.506-.128.787 0 .606.176 1.095.524 1.453C35.773 24.818 36.296 25 36.979 25c.404 0 .817-.076 1.116-.184 0 0 .057-.026.032-.087L37.933 24.233zM41.963 22.081c-.067-.235-.233-.471-.341-.579-.172-.172-.34-.292-.506-.358C40.898 21.057 40.638 21 40.352 21c-.333 0-.635.052-.88.159-.245.107-.452.253-.614.435-.162.181-.283.397-.361.642-.078.243-.117.509-.117.789 0 .285.041.551.121.79.081.241.211.453.386.629.176.177.401.315.671.412.268.096.594.146.968.145.77-.002 1.176-.161 1.343-.247.03-.016.057-.042.023-.119l-.175-.453c-.026-.067-.1-.043-.1-.043-.191.066-.462.184-1.095.183-.414-.001-.72-.113-.912-.291-.197-.181-.294-.447-.31-.822l2.666.002c0 0 .07-.001.078-.065C42.045 23.119 42.134 22.637 41.963 22.081M39.311 22.597c.038-.235.107-.431.216-.583.163-.231.412-.359.762-.359.35 0 .581.128.747.359.11.153.158.356.177.584L39.311 22.597zM20.453 22.081c-.067-.235-.233-.471-.341-.579-.172-.172-.339-.292-.506-.358C19.388 21.057 19.128 21 18.843 21c-.333 0-.635.052-.881.159-.245.107-.452.253-.614.435-.162.181-.283.397-.361.642-.078.243-.117.509-.117.789 0 .285.041.551.121.79.081.241.211.453.386.629.176.177.401.315.671.412.268.096.594.146.968.145.77-.002 1.176-.161 1.343-.247.03-.016.057-.042.023-.119l-.175-.453c-.026-.067-.1-.043-.1-.043-.191.066-.462.184-1.095.183-.413-.001-.72-.113-.912-.291-.197-.181-.294-.447-.31-.822l2.666.002c0 0 .07-.001.078-.065C20.536 23.119 20.624 22.637 20.453 22.081M17.802 22.597c.038-.235.107-.431.215-.583.164-.231.412-.359.763-.359.35 0 .581.128.748.359.11.153.158.356.176.584L17.802 22.597zM12.93 22.482c-.108-.007-.248-.011-.416-.011-.229 0-.45.026-.657.078-.208.052-.395.132-.556.239-.162.108-.292.245-.387.408s-.143.355-.143.569c0 .219.041.409.122.564.081.156.198.286.347.387.148.1.331.174.543.218C11.994 24.977 12.231 25 12.491 25c.274 0 .546-.021.81-.063.262-.041.582-.101.671-.121.089-.019.187-.044.187-.044.066-.016.061-.081.061-.081l-.001-2.259c0-.496-.143-.863-.423-1.091C13.515 21.115 13.102 21 12.57 21c-.2 0-.521.025-.715.061 0 0-.582.105-.821.279 0 0-.053.03-.024.098l.189.47c.024.061.088.04.088.04s.02-.007.044-.021c.512-.258 1.161-.251 1.161-.251.288 0 .51.054.659.16.145.104.219.259.219.589v.105C13.141 22.499 12.93 22.482 12.93 22.482M11.869 24.218c-.105-.077-.119-.096-.153-.147-.053-.076-.08-.184-.08-.321 0-.217.078-.373.238-.478-.001 0 .23-.185.773-.179.382.004.724.057.724.057v1.123c0 0-.339.067-.72.088C12.109 24.392 11.867 24.217 11.869 24.218M34.76 21.169c.02-.058-.022-.085-.04-.092-.045-.016-.272-.062-.447-.073-.335-.019-.521.034-.688.106-.166.071-.349.187-.45.318l-.001-.311c0-.043-.032-.077-.076-.077h-.684c-.045 0-.076.034-.076.077v3.806c0 .043.036.077.081.077h.7c.045 0 .08-.034.08-.077v-1.901c0-.256.03-.51.089-.67.057-.158.136-.285.233-.375.097-.091.208-.154.33-.19.124-.036.261-.049.357-.049.14 0 .293.035.293.035.052.005.08-.025.098-.069C34.606 21.588 34.736 21.238 34.76 21.169"/><path fill="#fff" d="M28.203 19.106c-.085-.026-.162-.044-.264-.062-.103-.019-.224-.028-.362-.028-.482 0-.862.137-1.129.406-.265.267-.446.674-.536 1.209l-.05.366h-.605c0 0-.074-.003-.089.078l-.099.554c-.007.053.016.086.087.086h.59l-.598 3.337c-.047.268-.1.489-.16.657-.058.166-.116.289-.186.379-.068.087-.133.151-.244.189-.092.03-.198.045-.314.045-.064 0-.15-.011-.214-.024-.064-.012-.097-.026-.144-.046 0 0-.069-.026-.097.043-.022.057-.178.489-.197.542-.019.053.007.094.041.106.078.028.137.046.243.071.149.035.274.037.391.037.245 0 .469-.034.654-.101.187-.068.349-.185.493-.343.155-.172.253-.352.346-.597.093-.243.171-.544.235-.896l.6-3.399h.878c0 0 .074.003.089-.078l.099-.554c.007-.053-.016-.086-.087-.086h-.853c.004-.019.06-.505.158-.787.042-.121.12-.218.187-.285.065-.066.141-.112.223-.139.085-.027.181-.041.286-.041.08 0 .159.009.219.022.082.018.115.027.137.033.087.027.098.001.116-.041l.203-.56C28.273 19.139 28.222 19.114 28.203 19.106M15.899 24.917c0 .046-.032.083-.076.083h-.707c-.045 0-.076-.037-.076-.083v-5.834c0-.046.032-.082.076-.082h.707c.045 0 .076.037.076.082V24.917z"/></svg></h1>
                            
                          </div>
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1500"><img src="img/icons8-upload-to-cloud-100.png" class="flex-shrink-0" style="max-width:50%;max-height:50%;" alt=""></h1>
                          </div>
                          
                        </div>
                        
                      </div>
                    </div>
                    </div>
                  
                </div>
              </section>



                
              </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" style="margin-top: 0px;margin-left: 0px;margin-right: 0px;margin-bottom: 0px;">
                <!-- <img src="img/mpgc_hp2.jpg" class="testimonial-img-sldr" alt=""> -->


                <section id="hero" class="hero" >

                <img src="img/cloud_banner.png" alt="" data-aos="fade-in">

                <div class="container">
                  
                   <div class="row justify-content-start">
                    <div class="col-lg-6">
                      <h2 class="display-1 text-center badge  text-wrap"  data-aos="fade-up" data-aos-delay="1300">Scalable, Secure & Reliable Cloud Service at an affordable price</h2>
                      
                      <!-- <div class="col-3">
                        <h1 class="display-6 " style="width: 20%;height: 20%;"data-aos="fade-up" data-aos-delay="1700"><i class="bi bi-wordpress"></i></h1>
                      </div> -->
                      <div class="row">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-10">

                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="1800"><i class="bi bi-clouds"></i><i class="bi bi-arrow-bar-right"></i>Cloud Consulting
</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="1900"><i class="bi bi-file-earmark-lock2-fill"></i><i class="bi bi-arrow-bar-right"></i>Private/Public Cloud Services</h3>
                          <h3 class="badge  text-wrap" style=""data-aos="fade-up" data-aos-delay="2000"><i class="bi bi-cloud"></i><i class="bi bi-arrow-bar-right"></i>Cloud Migration Services</h3>
                          

                          
                        </div>
                      </div>
                      

                    </div>
                    <div class="col-lg-6">
                      <div class="container">
                        <div class="row justify-content-start">
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1400"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><linearGradient id="70AWaG9FpYs2yn8LzRfdUa" x1="17.151" x2="29.996" y1="8.498" y2="37.571" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f09701"/><stop offset="1" stop-color="#e36001"/></linearGradient><path fill="url(#70AWaG9FpYs2yn8LzRfdUa)" d="M8.108,18.006C10.534,11.579,16.724,7,24,7c7.276,0,13.466,4.579,15.892,11.006 C36.653,14.6,30.757,12.313,24,12.313C17.243,12.313,11.347,14.6,8.108,18.006z M24,35.688c-6.757,0-12.653-2.287-15.892-5.693  C10.534,36.421,16.724,41,24,41c7.276,0,13.466-4.579,15.892-11.006C36.653,33.4,30.757,35.688,24,35.688z"/><linearGradient id="70AWaG9FpYs2yn8LzRfdUb" x1="1.319" x2="25.671" y1="44.651" y2="1.059" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#a1aab3"/><stop offset="1" stop-color="#8f979e"/></linearGradient><path fill="url(#70AWaG9FpYs2yn8LzRfdUb)" d="M39.512,4.744c0,1.515-1.228,2.744-2.744,2.744s-2.744-1.228-2.744-2.744S35.253,2,36.768,2  S39.512,3.228,39.512,4.744z M10.976,40.415c-1.818,0-3.293,1.474-3.293,3.293c0,1.818,1.474,3.293,3.293,3.293 s3.293-1.474,3.293-3.293C14.268,41.889,12.794,40.415,10.976,40.415z M7.683,6.39c-1.212,0-2.195,0.983-2.195,2.195  s0.983,2.195,2.195,2.195s2.195-0.983,2.195-2.195S8.895,6.39,7.683,6.39z"/></svg></h1>
                          </div>
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1500"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><path fill="#252f3e" d="M13.527,21.529c0,0.597,0.064,1.08,0.176,1.435c0.128,0.355,0.287,0.742,0.511,1.161 c0.08,0.129,0.112,0.258,0.112,0.371c0,0.161-0.096,0.322-0.303,0.484l-1.006,0.677c-0.144,0.097-0.287,0.145-0.415,0.145 c-0.16,0-0.319-0.081-0.479-0.226c-0.224-0.242-0.415-0.5-0.575-0.758c-0.16-0.274-0.319-0.58-0.495-0.951 c-1.245,1.483-2.81,2.225-4.694,2.225c-1.341,0-2.411-0.387-3.193-1.161s-1.181-1.806-1.181-3.096c0-1.37,0.479-2.483,1.453-3.321 s2.267-1.258,3.911-1.258c0.543,0,1.102,0.048,1.692,0.129s1.197,0.21,1.836,0.355v-1.177c0-1.225-0.255-2.08-0.75-2.58 c-0.511-0.5-1.373-0.742-2.602-0.742c-0.559,0-1.133,0.064-1.724,0.21c-0.591,0.145-1.165,0.322-1.724,0.548 c-0.255,0.113-0.447,0.177-0.559,0.21c-0.112,0.032-0.192,0.048-0.255,0.048c-0.224,0-0.335-0.161-0.335-0.5v-0.79 c0-0.258,0.032-0.451,0.112-0.564c0.08-0.113,0.224-0.226,0.447-0.339c0.559-0.29,1.229-0.532,2.012-0.726 c0.782-0.21,1.612-0.306,2.49-0.306c1.9,0,3.289,0.435,4.183,1.306c0.878,0.871,1.325,2.193,1.325,3.966v5.224H13.527z M7.045,23.979c0.527,0,1.07-0.097,1.644-0.29c0.575-0.193,1.086-0.548,1.517-1.032c0.255-0.306,0.447-0.645,0.543-1.032 c0.096-0.387,0.16-0.855,0.16-1.403v-0.677c-0.463-0.113-0.958-0.21-1.469-0.274c-0.511-0.064-1.006-0.097-1.501-0.097 c-1.07,0-1.852,0.21-2.379,0.645s-0.782,1.048-0.782,1.854c0,0.758,0.192,1.322,0.591,1.709 C5.752,23.786,6.311,23.979,7.045,23.979z M19.865,25.721c-0.287,0-0.479-0.048-0.607-0.161c-0.128-0.097-0.239-0.322-0.335-0.629 l-3.752-12.463c-0.096-0.322-0.144-0.532-0.144-0.645c0-0.258,0.128-0.403,0.383-0.403h1.565c0.303,0,0.511,0.048,0.623,0.161 c0.128,0.097,0.223,0.322,0.319,0.629l2.682,10.674l2.49-10.674c0.08-0.322,0.176-0.532,0.303-0.629 c0.128-0.097,0.351-0.161,0.639-0.161h1.277c0.303,0,0.511,0.048,0.639,0.161c0.128,0.097,0.239,0.322,0.303,0.629l2.522,10.803 l2.762-10.803c0.096-0.322,0.208-0.532,0.319-0.629c0.128-0.097,0.335-0.161,0.623-0.161h1.485c0.255,0,0.399,0.129,0.399,0.403 c0,0.081-0.016,0.161-0.032,0.258s-0.048,0.226-0.112,0.403l-3.847,12.463c-0.096,0.322-0.208,0.532-0.335,0.629 s-0.335,0.161-0.607,0.161h-1.373c-0.303,0-0.511-0.048-0.639-0.161c-0.128-0.113-0.239-0.322-0.303-0.645l-2.474-10.4 L22.18,24.915c-0.08,0.322-0.176,0.532-0.303,0.645c-0.128,0.113-0.351,0.161-0.639,0.161H19.865z M40.379,26.156 c-0.83,0-1.66-0.097-2.458-0.29c-0.798-0.193-1.421-0.403-1.836-0.645c-0.255-0.145-0.431-0.306-0.495-0.451 c-0.064-0.145-0.096-0.306-0.096-0.451v-0.822c0-0.339,0.128-0.5,0.367-0.5c0.096,0,0.192,0.016,0.287,0.048 c0.096,0.032,0.239,0.097,0.399,0.161c0.543,0.242,1.133,0.435,1.756,0.564c0.639,0.129,1.261,0.193,1.9,0.193 c1.006,0,1.788-0.177,2.331-0.532c0.543-0.355,0.83-0.871,0.83-1.532c0-0.451-0.144-0.822-0.431-1.129 c-0.287-0.306-0.83-0.58-1.612-0.838l-2.315-0.726c-1.165-0.371-2.027-0.919-2.554-1.645c-0.527-0.709-0.798-1.499-0.798-2.338 c0-0.677,0.144-1.274,0.431-1.79s0.671-0.967,1.149-1.322c0.479-0.371,1.022-0.645,1.66-0.838C39.533,11.081,40.203,11,40.906,11 c0.351,0,0.718,0.016,1.07,0.064c0.367,0.048,0.702,0.113,1.038,0.177c0.319,0.081,0.623,0.161,0.91,0.258s0.511,0.193,0.671,0.29 c0.224,0.129,0.383,0.258,0.479,0.403c0.096,0.129,0.144,0.306,0.144,0.532v0.758c0,0.339-0.128,0.516-0.367,0.516 c-0.128,0-0.335-0.064-0.607-0.193c-0.91-0.419-1.932-0.629-3.065-0.629c-0.91,0-1.628,0.145-2.123,0.451 c-0.495,0.306-0.75,0.774-0.75,1.435c0,0.451,0.16,0.838,0.479,1.145c0.319,0.306,0.91,0.613,1.756,0.887l2.267,0.726 c1.149,0.371,1.98,0.887,2.474,1.548s0.734,1.419,0.734,2.257c0,0.693-0.144,1.322-0.415,1.87 c-0.287,0.548-0.671,1.032-1.165,1.419c-0.495,0.403-1.086,0.693-1.772,0.903C41.943,26.043,41.193,26.156,40.379,26.156z"/><path fill="#f90" d="M43.396,33.992c-5.252,3.918-12.883,5.998-19.445,5.998c-9.195,0-17.481-3.434-23.739-9.142 c-0.495-0.451-0.048-1.064,0.543-0.709c6.769,3.966,15.118,6.369,23.755,6.369c5.827,0,12.229-1.225,18.119-3.741 C43.508,32.364,44.258,33.347,43.396,33.992z M45.583,31.477c-0.671-0.871-4.438-0.419-6.146-0.21 c-0.511,0.064-0.591-0.387-0.128-0.726c3.001-2.128,7.934-1.516,8.509-0.806c0.575,0.726-0.16,5.708-2.969,8.094 c-0.431,0.371-0.846,0.177-0.655-0.306C44.833,35.927,46.254,32.331,45.583,31.477z"/></svg></h1>
                          </div>
                          <div class="col-3">
                            <h1 class="display-6 " data-aos="fade-up" data-aos-delay="1600"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 48 48" width="80px" height="80px"><path fill="#039be5" d="M36.5,12c-1.326,0-2.59,0.256-3.758,0.705C31.321,10.48,28.836,9,26,9c-2.107,0-4.018,0.821-5.447,2.152C18.815,9.221,16.303,8,13.5,8C8.253,8,4,12.253,4,17.5c0,0.792,0.108,1.558,0.29,2.293C2.291,21.349,1,23.771,1,26.5C1,31.194,4.806,35,9.5,35c0.413,0,0.816-0.039,1.214-0.096C12.027,37.903,15.017,40,18.5,40c3.162,0,5.916-1.731,7.38-4.293C26.556,35.893,27.265,36,28,36c2.62,0,4.938-1.265,6.398-3.211C35.077,32.927,35.78,33,36.5,33C42.299,33,47,28.299,47,22.5C47,16.701,42.299,12,36.5,12z"/><path fill="#fff" d="M15.823 25c.045 0 .076-.037.076-.083C15.899 24.963 15.867 25 15.823 25L15.823 25zM21.503 23.934c.024 0 .047.008.055.013-.008-.005-.03-.013-.053-.013C21.504 23.933 21.503 23.934 21.503 23.934zM7.138 23.93c.023 0 .045.008.058.016-.013-.007-.034-.017-.056-.017C7.139 23.929 7.138 23.93 7.138 23.93zM24.126 21.909c-.016.039-.046.045-.072.043.004.001.004.003.009.003C24.086 21.954 24.112 21.944 24.126 21.909zM15.823 19c.045 0 .076.037.076.082C15.899 19.037 15.867 19 15.823 19L15.823 19zM21.359 22.185L21.359 22.185c0 .408.211.662.506.835C21.569 22.847 21.359 22.594 21.359 22.185zM38.126 24.729c.025.061-.032.087-.032.087S38.151 24.79 38.126 24.729zM8.558 21L8.558 21c.253 0 .503.034.733.093C9.061 21.034 8.811 21 8.558 21zM9.764 21.909c-.016.039-.046.045-.072.043.004.001.004.003.009.003C9.725 21.954 9.75 21.944 9.764 21.909zM35.195 24.164c.065.106.142.203.229.293s.185.169.294.237c-.109-.068-.207-.147-.294-.237C35.337 24.368 35.261 24.27 35.195 24.164zM37.83 21.797c-.012 0-.026-.002-.026-.002s.01.004.024.004C37.828 21.799 37.829 21.797 37.83 21.797zM37.832 24.189c0 0 .017-.003.034-.004-.001 0-.001-.001-.002-.001C37.846 24.184 37.832 24.189 37.832 24.189z"/><path fill="#fff" d="M6.885 24.462c-.029.07.01.084.02.096.087.058.174.1.262.146C7.636 24.933 8.08 25 8.543 25c.944 0 1.53-.462 1.53-1.207v-.014c0-.689-.662-.939-1.282-1.12L8.71 22.635c-.468-.14-.871-.261-.871-.545v-.014c0-.243.236-.422.602-.422.406 0 .888.125 1.199.283 0 0 .092.054.125-.027.018-.044.175-.434.192-.476.018-.045-.014-.08-.046-.098C9.555 21.136 9.065 21 8.558 21l-.094.001c-.864 0-1.467.481-1.467 1.17v.014c0 .726.665.962 1.289 1.126l.1.029c.454.128.846.239.846.533v.015c0 .269-.255.47-.665.47-.16 0-.667-.002-1.216-.322C7.285 24 7.247 23.975 7.196 23.946c-.027-.016-.095-.042-.124.039L6.885 24.462zM21.247 24.462c-.029.07.01.084.02.096.087.058.174.1.262.146C21.998 24.933 22.442 25 22.905 25c.944 0 1.53-.462 1.53-1.207v-.014c0-.689-.662-.939-1.282-1.12l-.081-.024c-.468-.14-.871-.261-.871-.545v-.014c0-.243.236-.422.602-.422.406 0 .888.125 1.199.283 0 0 .092.054.125-.027.018-.044.175-.434.192-.476.018-.045-.014-.08-.046-.098C23.917 21.136 23.427 21 22.92 21l-.094.001c-.864 0-1.467.481-1.467 1.17v.014c0 .726.666.962 1.289 1.126l.1.029c.454.128.846.239.846.533v.015c0 .269-.255.47-.665.47-.16 0-.667-.002-1.216-.322-.066-.036-.105-.06-.155-.09-.017-.01-.097-.039-.124.039L21.247 24.462zM31.465 22.219c-.077-.243-.198-.457-.358-.635-.16-.179-.364-.322-.605-.426C30.261 21.053 29.977 21 29.658 21c-.32 0-.604.053-.845.157s-.444.248-.604.427c-.161.178-.281.392-.358.634-.077.241-.116.505-.116.785s.039.544.116.785c.077.242.197.456.358.635.16.179.364.322.605.423S29.338 25 29.658 25c.319 0 .602-.051.844-.153.241-.102.444-.245.605-.423.16-.178.281-.392.358-.635.077-.241.116-.505.116-.785C31.581 22.724 31.542 22.46 31.465 22.219M30.677 23.004c0 .423-.085.758-.253.993-.166.233-.417.347-.767.347s-.6-.114-.763-.347c-.166-.236-.249-.57-.249-.993s.084-.756.249-.99c.164-.231.414-.343.764-.343s.6.112.767.343C30.592 22.247 30.677 22.581 30.677 23.004M37.933 24.233c-.026-.071-.101-.044-.101-.044-.114.041-.236.078-.366.097-.131.019-.276.029-.431.029-.381 0-.684-.105-.901-.313-.217-.208-.339-.544-.338-.999.001-.413.109-.724.302-.962.192-.236.485-.357.874-.357.325 0 .573.035.832.11 0 0 .062.025.091-.05.07-.178.12-.304.194-.499.021-.056-.03-.079-.049-.086-.102-.037-.343-.098-.525-.124C37.345 21.013 37.145 21 36.924 21c-.331 0-.625.053-.878.157-.252.103-.465.247-.635.426-.169.179-.297.392-.383.634-.086.241-.128.506-.128.787 0 .606.176 1.095.524 1.453C35.773 24.818 36.296 25 36.979 25c.404 0 .817-.076 1.116-.184 0 0 .057-.026.032-.087L37.933 24.233zM41.963 22.081c-.067-.235-.233-.471-.341-.579-.172-.172-.34-.292-.506-.358C40.898 21.057 40.638 21 40.352 21c-.333 0-.635.052-.88.159-.245.107-.452.253-.614.435-.162.181-.283.397-.361.642-.078.243-.117.509-.117.789 0 .285.041.551.121.79.081.241.211.453.386.629.176.177.401.315.671.412.268.096.594.146.968.145.77-.002 1.176-.161 1.343-.247.03-.016.057-.042.023-.119l-.175-.453c-.026-.067-.1-.043-.1-.043-.191.066-.462.184-1.095.183-.414-.001-.72-.113-.912-.291-.197-.181-.294-.447-.31-.822l2.666.002c0 0 .07-.001.078-.065C42.045 23.119 42.134 22.637 41.963 22.081M39.311 22.597c.038-.235.107-.431.216-.583.163-.231.412-.359.762-.359.35 0 .581.128.747.359.11.153.158.356.177.584L39.311 22.597zM20.453 22.081c-.067-.235-.233-.471-.341-.579-.172-.172-.339-.292-.506-.358C19.388 21.057 19.128 21 18.843 21c-.333 0-.635.052-.881.159-.245.107-.452.253-.614.435-.162.181-.283.397-.361.642-.078.243-.117.509-.117.789 0 .285.041.551.121.79.081.241.211.453.386.629.176.177.401.315.671.412.268.096.594.146.968.145.77-.002 1.176-.161 1.343-.247.03-.016.057-.042.023-.119l-.175-.453c-.026-.067-.1-.043-.1-.043-.191.066-.462.184-1.095.183-.413-.001-.72-.113-.912-.291-.197-.181-.294-.447-.31-.822l2.666.002c0 0 .07-.001.078-.065C20.536 23.119 20.624 22.637 20.453 22.081M17.802 22.597c.038-.235.107-.431.215-.583.164-.231.412-.359.763-.359.35 0 .581.128.748.359.11.153.158.356.176.584L17.802 22.597zM12.93 22.482c-.108-.007-.248-.011-.416-.011-.229 0-.45.026-.657.078-.208.052-.395.132-.556.239-.162.108-.292.245-.387.408s-.143.355-.143.569c0 .219.041.409.122.564.081.156.198.286.347.387.148.1.331.174.543.218C11.994 24.977 12.231 25 12.491 25c.274 0 .546-.021.81-.063.262-.041.582-.101.671-.121.089-.019.187-.044.187-.044.066-.016.061-.081.061-.081l-.001-2.259c0-.496-.143-.863-.423-1.091C13.515 21.115 13.102 21 12.57 21c-.2 0-.521.025-.715.061 0 0-.582.105-.821.279 0 0-.053.03-.024.098l.189.47c.024.061.088.04.088.04s.02-.007.044-.021c.512-.258 1.161-.251 1.161-.251.288 0 .51.054.659.16.145.104.219.259.219.589v.105C13.141 22.499 12.93 22.482 12.93 22.482M11.869 24.218c-.105-.077-.119-.096-.153-.147-.053-.076-.08-.184-.08-.321 0-.217.078-.373.238-.478-.001 0 .23-.185.773-.179.382.004.724.057.724.057v1.123c0 0-.339.067-.72.088C12.109 24.392 11.867 24.217 11.869 24.218M34.76 21.169c.02-.058-.022-.085-.04-.092-.045-.016-.272-.062-.447-.073-.335-.019-.521.034-.688.106-.166.071-.349.187-.45.318l-.001-.311c0-.043-.032-.077-.076-.077h-.684c-.045 0-.076.034-.076.077v3.806c0 .043.036.077.081.077h.7c.045 0 .08-.034.08-.077v-1.901c0-.256.03-.51.089-.67.057-.158.136-.285.233-.375.097-.091.208-.154.33-.19.124-.036.261-.049.357-.049.14 0 .293.035.293.035.052.005.08-.025.098-.069C34.606 21.588 34.736 21.238 34.76 21.169"/><path fill="#fff" d="M28.203 19.106c-.085-.026-.162-.044-.264-.062-.103-.019-.224-.028-.362-.028-.482 0-.862.137-1.129.406-.265.267-.446.674-.536 1.209l-.05.366h-.605c0 0-.074-.003-.089.078l-.099.554c-.007.053.016.086.087.086h.59l-.598 3.337c-.047.268-.1.489-.16.657-.058.166-.116.289-.186.379-.068.087-.133.151-.244.189-.092.03-.198.045-.314.045-.064 0-.15-.011-.214-.024-.064-.012-.097-.026-.144-.046 0 0-.069-.026-.097.043-.022.057-.178.489-.197.542-.019.053.007.094.041.106.078.028.137.046.243.071.149.035.274.037.391.037.245 0 .469-.034.654-.101.187-.068.349-.185.493-.343.155-.172.253-.352.346-.597.093-.243.171-.544.235-.896l.6-3.399h.878c0 0 .074.003.089-.078l.099-.554c.007-.053-.016-.086-.087-.086h-.853c.004-.019.06-.505.158-.787.042-.121.12-.218.187-.285.065-.066.141-.112.223-.139.085-.027.181-.041.286-.041.08 0 .159.009.219.022.082.018.115.027.137.033.087.027.098.001.116-.041l.203-.56C28.273 19.139 28.222 19.114 28.203 19.106M15.899 24.917c0 .046-.032.083-.076.083h-.707c-.045 0-.076-.037-.076-.083v-5.834c0-.046.032-.082.076-.082h.707c.045 0 .076.037.076.082V24.917z"/></svg></h1>
                            
                          </div>
                          
                        </div>
                        
                      </div>
                    </div>
                    </div>
                  
                </div>
              </section>



                
              </div>
          </div><!-- End testimonial item -->

          

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>

  </div>

</div>

</section><!-- End Testimonials Section -->






<!-- Pricing1 Section - Home Page -->
    <section id="pricing" class="pricing"style="padding-bottom: 0px;">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up" style="padding-bottom: 0px;padding-top: 0px;">
        <h2>WHAT WE DO</h2>
        <p>Services We Offered</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-3">

          <div class="col-lg-3">
            <div class="pricing-item">
              <h3>Website  Development</h3>
              <div class="">
                <img src="img/Picture1.webp" class="align-items-center" style="max-width:100%;max-height:100% ;" alt="">
              </div>
              
              <ul>
                <li><img src="img/icons8-website-development-67.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Website  Development</span></li>
                <li><img src="img/icons8-responsive-design-68.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Responsive Design</span></li>
                <li><img src="img/icons8-cms-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>CMS or SaaS Development</span></li>
                <li><img src="img/icons8-advanced-search-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Search & Conversion Optimization</span></li>
                <li><img src="img/icons8-multiple-devices-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Compatible with all devices</span></li>
                <li><img src="img/icons8-browser-customization-64.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Super-customizable and easily scalable</span></li>
                <li><img src="img/icons8-computer-support-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Professional Support</span></li>
                
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->
          
          <div class="col-lg-3">
            <div class="pricing-item">
              <h3>Software Development</h3>
              <div class="">
                <img src="img/Picture2.png" class="align-items-center" style="max-width:100%;max-height:100% ;" alt="">
              </div>
              
              <ul>
                <li><img src="img/icons8-web-apps-64.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Web Application Development</span></li>
                <li><img src="img/icons8-critical-thinking-48.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>AI & ML - Python,TensarFlow</span></li>
                <li><img src="img/icons8-stack-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>MEAN/MERN Stack Development</span></li>
                <li><img src="img/icons8-blockchain-development-32.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>BlockChain Development</span></li>
                <li><img src="img/icons8-iot-sensor-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>ioT Applications</span></li>
                <li><img src="img/icons8-services-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Big Data Services</span></li>
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-3">
            <div class="pricing-item">
              <h3>Data Analytics Services</h3>
              <div class="">
                <img src="img/Picture3.png" class="align-items-center" style="max-width:110%;max-height:110% ;" alt="">
              </div>
              
              <ul>
                <li><img src="img/icons8-financial-analytics-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Financial analytics</span></li>
                <li><img src="img/icons8-supply-chain-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Supply chain analytics</span></li>
                <li><img src="img/icons8-supply-chain-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Sales and product analytics</span></li>
                <li><img src="img/icons8-financial-analytics-80.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Customer analytics</span></li>
                <li><img src="img/icons8-financial-analytics-64.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Asset analytics</span></li>
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->
          
          <div class="col-lg-3">
            <div class="pricing-item">
              <h3 class="text-center">    Cloud Service</h3>
              <div class="">
                <img src="img/Picture4.png" class="align-items-center" style="max-width:100%;max-height:100% ;" alt="">
              </div>
              <br>
              <ul>
                <li><img src="img/icons8-aws-cloudfront-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>AWS/IaaS</span></li>
                <li><img src="img/icons8-azure-api-manager-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Microsoft Azure cloud services</span></li>
                <li><img src="img/icons8-kubernetes-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Kubernetes Visibility</span></li>
                <li><img src="img/icons8-cost-80.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>Cost Optimization</span></li>
                <li><img src="img/icons8-devops-50.png" class="align-items-center" style="max-width:20%;max-height:20% ;" alt="">&nbsp;<span>DevOps</span></li>
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->

        </div>

      </div>

    </section><!-- End Pricing1 Section -->



<!-- Pricing2 Section - Home Page -->
    <section id="pricing" class="pricing"style="padding-bottom: 0px;">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up" style="padding-bottom: 0px;padding-top: 0px;">
        <h2>We Offer Industrial Trainings & Project based Learning Courses</h2>
        <!-- <p>Services We Offered</p> -->
      </div><!-- End Section Title -->

      <div class="container" data-aos="zoom-in" data-aos-delay="100">

        <div class="row g-4">

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Full Stack Data Science & AI Certification</h3>
              <!-- <div class="">
                <img src="img/Picture1.webp" class="align-items-center" style="max-width:100%;max-height:100% ;" alt="">
              </div> -->
              
              <ul>
                <li><img src="img/icons8-programming-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span> Programming</span></li>
                <li><img src="img/icons8-mysql-logo-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>SQL</span></li>
                <li><img src="img/icons8-python-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Applied Data Science with Python</span></li>
                <li><img src="img/icons8-machine-learning-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Machine Learning</span></li>
                <li><img src="img/icons8-deep-learning-68.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Deep Learning</span></li>

                <li><img src="img/icons8-website-analytics-64.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Analytics Tools</span></li>

                <li><img src="img/icons8-whiteboard-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Tableau Training</span></li>
                <li><img src="img/icons8-group-of-projects-80.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Capstone projects</span></li>
                
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->
          
          <div class="col-lg-4">
            <div class="pricing-item"style="padding-bottom: 0px;">
              <h3>Advanced Certification in DevOps & Cloud Computing</h3>
              
              
              <ul>
                <li><img src="img/icons8-aws-cloudfront-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>AWS</span></li>
                <li><img src="img/icons8-load-balancer-80.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Load Balancing, Autoscaling and DNS</span></li>
                <li><img src="img/icons8-cloud-refresh-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Cloud Formation</span></li>
                <li><img src="img/icons8-services-80.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Access Management and Monitoring Services</span></li>
                <li><img src="img/icons8-git-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Version Control with Git</span></li>
                <li><img src="img/icons8-continuous-integration-32.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Continuous Integration</span></li>
                <li><img src="img/icons8-amazon-web-services-32.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Devops on AWS</span></li>
                <li><img src="img/icons8-application-window-80.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Application Deployment</span></li>
                <li><img src="img/icons8-group-of-projects-80.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Capstone projects</span></li>
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->

          <div class="col-lg-4">
            <div class="pricing-item">
              <h3>Full Stack web  development<br></h3>
              
              
              <ul>
                <li><img src="img/icons8-frontend-development-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Front-End Development</span></li>
                <li><img src="img/icons8-backend-development-48.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Back-End Development</span></li>
                <li><img src="img/icons8-administrative-tools-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Full-Stack Development Tools and Workflow</span></li>
                <li><img src="img/icons8-django-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Frameworks and Libraries</span></li>
                <li><img src="img/icons8-database-administrator-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Database Management and Integration</span></li>
                <li><img src="img/icons8-deployment-100.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Deployment and Hosting</span></li>
                <li><img src="img/icons8-advanced-search-50.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Advanced Topics</span></li>
                <li><img src="img/icons8-group-of-projects-80.png" class="align-items-center" style="max-width:10%;max-height:10% ;" alt="">&nbsp;<span>Capstone projects</span></li>
              </ul>
              
            </div>
          </div><!-- End Pricing Item -->
          
          

        </div>

      </div>

    </section><!-- End Pricing2 Section -->









<!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Latest Events & MOUs Signings</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->
<br>
  <!-- Slider Section - Home Page -->
  <section id="testimonials" class="testimonials" style="padding-top: 0px;padding-bottom: 0px;">
      
<div class="container">

  <div class="row align-items-center">

    <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200" style="padding-left: calc(var(--bs-gutter-x) * 0.0);padding-right: calc(var(--bs-gutter-x) * 0.0);">
    <!-- <img src="img/carousel-1.jpg" class="testimonial-img flex-shrink-0" style="max-width:100%;" alt=""> -->
      <div class="swiper">
        <template class="swiper-config">
          {
          "loop": true,
          "speed" : 2000,
          "autoplay": {
          "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
          "el": ".swiper-pagination",
          "type": "bullets",
          "clickable": true
          }
          }
        </template>
        <div class="swiper-wrapper">

          <div class="swiper-slide">
            <!-- <img src="img/carousel-1.jpg" class="testimonial-img flex-shrink-0" style="max-width:100%;" alt=""> -->
            <div class="testimonial-item" >
              

              <section id="hero" class="hero" style="border-radius: 15px;">

                <img src="img/jamia.jpg" alt="" data-aos="fade-in">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-5" style="padding-top:20%">
                      <div class="flex">
                        <div class="text-center">
                        <h3>Training Program</h3>
                          <h4>Aeronautical Domain Data Science Workshop</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-center">
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Central Govt. University Jamia Millia Islamia</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>
                    </div>
                  </div>
                </div>
              </section>
            </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" ">
                <!-- <img src="img/mpgc_hp1.jpg" class="testimonial-img-sldr" alt=""> -->


                <section id="hero" class="hero" style="border-radius: 15px;">

                <img src="img/mpgc_hp1.jpg"  alt="" data-aos="fade-in">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-5" style="padding-top:20%">
                      <div class="flex">
                  
                        <div class="text-center">
                          <h3>Training Program</h3>
                          <h4>Full Stack Web Development</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-center">
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>MPGC, Himachal Pradesh University</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>                    
                    </div>
                  </div>
                </div>
              </section>



                
              </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" ">
                <!-- <img src="img/mpgc_hp2.jpg" class="testimonial-img-sldr" alt=""> -->


                <section id="hero" class="hero" style="border-radius: 15px;">

                <img src="img/mpgc_hp2.jpg" alt="" data-aos="fade-in">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-5" style="padding-top:20%">
                      <div class="flex">
                  
                        <div class="text-center">
                        <h3>Training Programm</h3>
                          <h4>Training</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-center">
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Doubt Clearing</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>                    
                    </div>
                  </div>
                </div>
              </section>



                
              </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" ">
                <!-- <img src="img/soa1.jpg" class="testimonial-img-sldr" alt=""> -->



                <section id="hero" class="hero" style="border-radius: 15px;">

                <img src="img/soa1.jpg"  alt="" data-aos="fade-in">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-5" style="padding-top:20%">
                      <div class="flex">
                  
                        <div class="text-center">
                          <h3>Members</h3>
                          <h4>Members and Partners</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-center">
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>Members and Prtners</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>                    
                    </div>
                  </div>
                </div>
              </section>





                
              </div>
          </div><!-- End testimonial item -->

          <div class="swiper-slide">
            <div class="testimonial-item" >
                <!-- <img src="img/soa2.jpg" class="testimonial-img-sldr" alt=""> -->

                <section id="hero" class="hero" style="border-radius: 15px;">

                <img src="img/soa2.jpg"  alt="" data-aos="fade-in">

                <div class="container">
                  <div class="row">
                    <div class="col-lg-5" style="padding-top:20%">
                      <div class="flex">
                  
                        <div class="text-center">
                          <h3>Self Assesment</h3>
                          <h4>Training Program</h4>
                          <div class="stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                          </div>
                        </div>
                      </div>
                      <p class="text-center">
                        <i class="bi bi-quote quote-icon-left"></i>
                        <span>sel</span>
                        <i class="bi bi-quote quote-icon-right"></i>
                      </p>                    
                    </div>
                  </div>
                </div>
              </section>



                
              </div>
          </div><!-- End testimonial item -->

        </div>
        <div class="swiper-pagination"></div>
      </div>

    </div>





  </div>

</div>

</section><!-- End Testimonials Section -->



    
    <!-- About Section - Home Page -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-xl-center gy-5">

          <div class="col-xl-5 content">
            <h3>About Us</h3>
            <!-- <h2>Ducimus rerum libero reprehenderit cumque</h2> -->
            <p>Coders Ready is a global leader delivering a wide Job oriented Courses of Artificial Intelligence , Data Science and Emerging Technology . We are a trusted training delivery partner of 500+ corporate clients and universities across the India with 1400+ professionals trained across various Courses. Our high quality training programs designed and delivered by industry experts themselves. Coders Ready has helped institutions and industries in continuing with their knowledge delivery with a mix of technical knowledge and practical implementation.</p>
            <a href="http://localhost:8080/index.php?r=site/about#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-xl-7">
            <div class="row gy-4 icon-boxes">

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="icon-box">
                  <i class="bi bi-buildings"></i>
                  <h3>Web development Service </h3>
                  <p>Coders Ready crafts SEO-friendly websites with 5+ years of experience. Our versatile services cater to enterprises, SMEs, and startups, ensuring a robust online presence and prominent search engine visibility</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div class="icon-box">
                  <i class="bi bi-clipboard-pulse"></i>
                  <h3>Data Science & AI Service </h3>
                  <p>Coders Ready specializes in leveraging data for AI, providing end-to-end expertise in the data and analytics value chain. We deliver business results by enabling AI/ML solutions for personalized insights and data operationalization.</p>
                </div>
              </div> <!-- End Icon Box -->

              <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                <div class="icon-box">
                  <i class="bi bi-cloud"></i>
                  <h3>Cloud Services </h3>
                  <p>Coders Ready delivers standardized and secure cloud services, facilitating seamless application deployment on public or private clouds. Our comprehensive support follows industry best practices, tailored to your enterprise's unique needs.</p>
                </div>
              </div> <!-- End Icon Box -->

              
            </div>
          </div>

          

        </div>
      </div>

    </section><!-- End About Section -->

    <!-- Stats Section - Home Page -->
    <section id="stats" class="stats">

      <img src="img/stats-bg.jpg" alt="" data-aos="fade-in">

      <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Clients</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item text-center w-100 h-100">
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p>Workers</p>
            </div>
          </div><!-- End Stats Item -->

        </div>

      </div>

    </section><!-- End Stats Section -->

    <!-- Services Section - Home Page -->
    <section id="services" class="services">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>Rated as One Of The Top 10 Digital Marketing Agency In Bangalore, India</p>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="card mb-3 text-center ">
              <h3 class="card-header text-white bg-danger">Training</h3>
              
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Web Development</li>
                <li class="list-group-item">Data Science & AI</li>
                <li class="list-group-item">Cloud Services</li>
              </ul>
              
              
            </div>
            
          </div>
          <div class="col-lg-6">
          <div class="card mb-3 text-center ">
              <h3 class="card-header text-white bg-danger">Development</h3>
              
              <ul class="list-group list-group-flush">
              <li class="list-group-item">Web Development</li>
                <li class="list-group-item">Data Science & AI</li>
                <li class="list-group-item">Cloud Services</li>
              </ul>
              
              
            </div>
          </div>
        </div>

        <div class="row gy-4">

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-person-vcard"></i></div>
              <div>
                <h4 class="title"><a href="http://localhost:8080/index.php?r=site/services" class="stretched-link">Web development </a></h4>
                <p class="description">At Coders Ready we create SEO-friendly professional websites for your business. We offer a wide range of website development services to businesses ranging from enterprises to small medium enterprise companies to start-ups.We have 5+ years of experience with a team of 20+ website designers and developers who take care of project management from design to delivery.To create a better online presence for your brand, you need a well-working, fast, SEO friendly website to occupy digital spaces in major search engine’s result pages. </p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
              <div>
                <h4 class="title"><a href="http://localhost:8080/index.php?r=site/services" class="stretched-link">Data Science & AI </a></h4>
                <p class="description">Data is what makes a difference in AI now. With end-to-end data expertise across the data and analytics value chain, Coders Ready helps organizations enhance decision making to deliver better products and services for its customers.We deliver tangible business results for complex problems with AI/ML enabling businesses to decipher personalized and relevant insights from large volumes of data.We bridge the gap between data integration and value realization, from automating data pipelines for faster access to quality data to helping enterprises operationalize AI for reusability and scalability</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-cloud-haze2"></i></div>
              <div>
                <h4 class="title"><a href="http://localhost:8080/index.php?r=site/services" class="stretched-link">Cloud Services </a></h4>
                <p class="description">Our proven, standardized, and repeatable services are meticulously designed to empower you to effortlessly design and deploy your applications and workloads on the optimal public or Private cloud platform for your enterprise.  Cloud services prioritize security and ease of management in addition to offering flexible deployment options tailored to your specific needs. From initial design to ongoing management, our Public or Private  Cloud Services provide comprehensive, integrated, and full-lifecycle support for cloud environments, all built on industry best practices, and fully aligned with the unique cloud adoption and management frameworks of each hyperscaler.</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
              <div>
                <h4 class="title"><a href="http://localhost:8080/index.php?r=site/services" class="stretched-link">How We Work</a></h4>
                <p class="description">In our work process, we begin with meticulous Planning, defining project scope and objectives. Moving to Layout, we structure the project and establish a roadmap. The Design phase brings ideas to life, crafting visual elements and user interfaces. Develop follows, where we turn designs into functional solutions with cutting-edge technologies. Throughout, our iterative and collaborative approach ensures timely delivery and client satisfaction.</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Nemo Enim</a></h4>
                <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

          <!-- <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
            <div class="service-item d-flex">
              <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
              <div>
                <h4 class="title"><a href="services-details.html" class="stretched-link">Eiusmod Tempor</a></h4>
                <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
              </div>
            </div>
          </div> -->
          <!-- End Service Item -->

        <!-- </div> -->

      </div>

    </section><!-- End Services Section -->

    <!-- Portfolio Section - Home Page -->
    <!-- End Portfolio Section -->

    
    <!-- Faq Section - Home Page -->
    <section id="faq" class="faq">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="content px-xl-5">
              <h3><span>Frequently Asked </span><strong>Questions</strong></h3>
              <p>
                CodersReady is your premier partner for leveraging data-driven AI solutions and seamless cloud services. With expertise across the data analytics spectrum, we deliver     personalized insights and secure cloud deployment tailored to your enterprise needs, here are some of the FAQs.
              </p>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

            <div class="faq-container">
              <div class="faq-item faq-active">
                <h3><span class="num">1.</span> <span>What is Data Science, and what career opportunities does it offer?</span></h3>
                <div class="faq-content">
                  <p>Data Science is a multidisciplinary field that extracts insights and knowledge from structured and unstructured data. At Coders Ready, we see Data Science as a cornerstone of our expertise, offering diverse career opportunities such as Data Analysts, Machine Learning Engineers, and Data Scientists. These roles are in high demand across various industries, empowering organizations to make data-driven decisions and gain a competitive edge.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">2.</span> <span>How can I start learning Web Development from scratch?</span></h3>
                <div class="faq-content">
                  <p>To start learning Web Development from scratch with Coders Ready, we recommend diving into our comprehensive online resources tailored for beginners. Our curated learning paths cover essential topics such as HTML, CSS, JavaScript, and popular frameworks like React and Angular. Additionally, we offer hands-on projects and real-world examples to reinforce your skills. With Coders Ready, you'll gain the foundational knowledge and practical experience needed to kick start your journey in Web Development confidently.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">3.</span> <span>How can I get started with learning about Cloud Computing?</span></h3>
                <div class="faq-content">
                  <p>To get started with learning about Cloud Computing with Coders Ready, you can explore our comprehensive range of courses tailored for beginners. Our curriculum covers essential concepts, practical applications, and hands-on experience with leading cloud platforms like AWS, Azure, and Google Cloud. Through our expert-led training modules, you'll gain a solid understanding of cloud architecture, deployment strategies, and best practices in cloud computing. Whether you're a novice or an experienced professional, Coders Ready provides the perfect pathway to master the fundamentals and advance your skills in cloud technology.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">4.</span> <span>What certifications are valuable for professionals pursuing careers in Cloud Computing?</span></h3>
                <div class="faq-content">
                  <p>At Coders Ready, we recognize the importance of certifications for professionals pursuing careers in Cloud Computing. Some valuable certifications in this field include:</p>
                      <p>1.  AWS Certified Solutions Architect </p>
                      <p>2.  Microsoft Certified: Azure Administrator Associate </p>
                      <p>3.  Google Cloud Professional Cloud Architect </p>
                      <p>These certifications validate expertise in leading cloud platforms and demonstrate proficiency in designing, implementing, and managing cloud solutions. They align with our commitment to providing comprehensive training and support across web development, data science, and cloud computing domains.
                      </p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

              <div class="faq-item">
                <h3><span class="num">5.</span> <span>5.  What programming languages are essential for Data Science?</span></h3>
                <div class="faq-content">
                  <p>At Coders Ready, proficiency in multiple programming languages is essential for success in Data Science. Key languages include Python, R, SQL, and JavaScript, as they are widely used for data manipulation, statistical analysis, and visualization tasks. Additionally, knowledge of languages like Java and C++ can be beneficial for developing custom algorithms and optimizing performance in machine learning models. Our comprehensive curriculum ensures proficiency in these languages, empowering our students to excel in the dynamic field of Data Science.</p>
                </div>
                <i class="faq-toggle bi bi-chevron-right"></i>
              </div><!-- End Faq item-->

            </div>

          </div>
        </div>

      </div>

    </section><!-- End Faq Section -->

    <!-- Our Team Section - Home Page -->
    <section id="team" class="team">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Team</h2>
        <p>Meet our dynamic team of experts at CodersReady, dedicated to empowering students with the skills and knowledge they need to succeed in web development, data science, and cloud computing.</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="img/Team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sumit Sharma</h4>
              <span>Chief Executive Officer</span>
              <p>Ex. Faculty Central Govt. University (JMI)<br>Ex. Pawan Hans Limited (Govt. of India Enterprises)<br> Member of Aeronautical Society of India
              </p>
            </div>
          </div><!-- End Team Member Sumit Sharma -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="img/Team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Mann Singh</h4>
              <span>Active Researcher in atmospheric & space science domai</span>
              <p>
                Masters from IIT Indore (7 Years of Teaching Experience )
                Active Researcher in atmospheric & space science domain.
                AI & ML for Climate Informatics, Remote sensing , satellite based Navigation & Drones operations
                Radar Meteorology & Rain Micro physics 
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="img/Team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Narendra Kumar<br>(6+ Years Exp.)</h4>
              <span>Senior ML Engineer</span>
              <p>Senior ML Engineer,Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="img/Team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Raghvendra Upadhayay<br>(5+ Year Exp.)</h4>
              <span>Full Stack Developer</span>
              <p>Full Stack Developer
               at NIRDPR , Ex. Software Engineer at DRDO , NIIT , IGL
              Web GIS Technology , Geoprocessing , GIS Technology Certifications from ISRO
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="img/Team-5.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Siddharth Sharma<br>(7+ Year Exp.)</h4>
              <span>Senior Data analytics Engineer</span>
              <p>Ex – Mirum India , FedEx Express</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="img/Team-6.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Palagiri Hrushikesh<br>(5+ years of experience)</h4>
              <span>Senior DevOps Engineer</span>
              <p>Senior DevOps Engineer – Cloud Consultant , ex-Wiproite </p>
            </div>
          </div><!-- End Team Member -->


          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="700">
            <div class="member-img">
              <img src="img/Team-7.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>L S Kiran CH<br>(12+ Years Exp.)</h4>
              <span>Data Solution Architect</span>
              <p>Engineering Lead | Data Solution Architect | Big Data Engineer | Enterprise Data Integrations | DevOps-CI/CD | Technology Consulting | Palantir Foundry | Cloud - AWS
              </p>
            </div>
          </div><!-- End Team Member -->


          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="800">
            <div class="member-img">
              <img src="img/Team-8.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Siva Kumar<br>(14+ Year Exp.)</h4>
              <span>Certified AWS Solution Architect</span>
              <p>JDE Architect | AWS DevOps| Certified AWS Solution Architect| Terraform , Dockers , Kubernetes Expert| Prometheus and Grafana |GIT | GIT HUB| Jenkins | Ansible| AWS
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="900">
            <div class="member-img">
              <img src="img/Team-9.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>sunil kumar<br>( 6+ Years Exp.)</h4>
              <span>Senior DevOps & Site Reliability Engineer</span>
              <p>Systems Engineer III at Walmart Global Tech India |Certified AWS Solution Architect-Associate level| | Terraform Expert |Azure|AWS
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="1000">
            <div class="member-img">
              <img src="img/Team-10.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Satya Sasi Kanth Seethina<br>( 6+ Years Exp.)</h4>
              <span>SRE</span>
              <p>Cloud and Devops Engineer at Deloitte | AWS & GCP Associate Certified - Associate |SRE 
              </p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="1100">
            <div class="member-img">
              <img src="img/Team-11.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/khan-shafiq?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BA9QFzFM1Su2Q0SCOBufGxw%3D%3D"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Shafiqullah K.<br>(5+ year Exp.)</h4>
              <span>Business Analyst</span>
              <p>Business Analyst , Ex - TCSer</p>
            </div>
          </div><!-- End Team Member -->

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="1100">
            <div class="member-img">
              <img src="img/Team-12.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="https://www.linkedin.com/in/sharma-sandy?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sandeep Kumar Sharma</h4>
              <span>Lead Data Scientist at Tiger Analytics</span>
              <p>Languages & Frameworks: Python, Python-Flask, R, JavaScript, Caffe2, Keras, Tensorflow<br>Image Processing, Deep Learning
      </p>
            </div>
          </div><!-- End Team Member -->




        </div>

      </div>

    </section><!-- End Team Section -->

    

    <!-- Testimonials Section - Home Page -->
    <section id="testimonials" class="testimonials" >

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-5 info" data-aos="fade-up" data-aos-delay="100">
            <h3>Testimonials</h3>
            <p>
              Read testimonials from our satisfied students and clients, sharing their experiences with CodersReady.
            </p>
          </div>

          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper">
              <template class="swiper-config">
                {
                "loop": true,
                "speed" : 600,
                "autoplay": {
                "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
                }
                }
              </template>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-1.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Saul Goodman</h3>
                        <h4>Ceo & Founder</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Working with Coders Ready has been an absolute pleasure. Their creative vision and attention to detail brought our project to life in ways we hadn't imagined. From the initial concept discussions to the final deliverables, they demonstrated professionalism, expertise, and a true passion for their craft. They were responsive to our feedback and consistently exceeded our expectations, delivering stunning designs that perfectly captured our brand's essence. We're grateful for their talent and dedication, and we look forward to collaborating with them on future projects.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-2.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Sara Wilsson</h3>
                        <h4>Designer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>I had the pleasure of working with Coders Ready for my developer training, and I couldn't be happier with the experience. The instructors were incredibly knowledgeable and passionate about their craft, providing clear explanations and hands-on practice that truly accelerated my learning. The curriculum was well-structured, covering essential topics in web development, data science, and cloud computing, which equipped me with the skills needed to excel in today's competitive tech industry. Coders Ready not only helped me develop technical expertise but also fostered a supportive learning environment where I could collaborate with fellow developers and grow professionally. I highly recommend Coders Ready to anyone looking to embark on a rewarding career in software development.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-3.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Jena Karlis</h3>
                        <h4>Store Owner</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>as a student at CodersReady, I can confidently say that their Data Science program has exceeded my expectations. The curriculum is comprehensive, covering everything from foundational concepts to advanced techniques in data analysis and machine learning. The instructors are not only highly knowledgeable but also incredibly supportive, providing personalized guidance every step of the way. Thanks to CodersReady, I've gained the skills and confidence to pursue a rewarding career in Data Science. I highly recommend their program to anyone looking to dive into the world of data-driven insights and innovation.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div><!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

        </div>

      </div>

    </section><!-- End Testimonials Section -->

    

    <!-- Recent-posts Section - Home Page -->
    <section id="recent-posts" class="recent-posts" style="padding-bottom: 0px;">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up" style="padding-bottom: 0px;">
        <h2>Recent Posts</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->





    <!-- Testimonials Section - Home Page -->
    <section id="testimonials" class="testimonials" style="padding-top: 0px;padding-bottom: 0px;">

      <div class="container">

        <div class="row align-items-center">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper">
              <template class="swiper-config">
                {
                "loop": true,
                "speed" : 600,
                "autoplay": {
                "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
                }
                }
              </template>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item recnt">

                  
                  <div class="card mb-4">
                    <img src="img/jamia.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                  </div>

                  <!--<img src="img/blog-1.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                     <div class="d-flex">
                      
                      <div>
                        <h3>Saul Goodman</h3>
                        <h4>Ceo & Founder</h4>
                        
                      </div>
                    </div>-->
                    
                  </div> 
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    
                    <div class="card mb-4">
                    <img src="img/iitm.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted">2 Support card subtitle</h6>
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                  </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="card mb-4">
                      <img src="img/bm_group.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                      <div class="card-body">
                        <h6 class="card-subtitle text-muted">3Support card subtitle</h6>
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      
                      <div class="card-footer text-muted">
                        2 days ago
                      </div>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                <!-- <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-4.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>Matt Brandon</h3>
                        <h4>Freelancer</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> -->
                <!-- End testimonial item -->

                <!-- <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="d-flex">
                      <img src="img/testimonials-5.jpg" class="testimonial-img flex-shrink-0" alt="">
                      <div>
                        <h3>John Larson</h3>
                        <h4>Entrepreneur</h4>
                        <div class="stars">
                          <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </div>
                      </div>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.</span>
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div> -->
                <!-- End testimonial item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
                <!-- swaper1 end -->


          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper">
              <template class="swiper-config">
                {
                "loop": true,
                "speed" : 600,
                "autoplay": {
                "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
                }
                }
              </template>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item recnt">

                  
                  <div class="card mb-4">
                    <img src="img/soa1.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                  </div>

                  <!--<img src="img/blog-1.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                     <div class="d-flex">
                      
                      <div>
                        <h3>Saul Goodman</h3>
                        <h4>Ceo & Founder</h4>
                        
                      </div>
                    </div>-->
                    
                  </div> 
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    
                    <div class="card mb-4">
                    <img src="img/soa2.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted">2 Support card subtitle</h6>
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                  </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="card mb-4">
                      <img src="img/soa3.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                      <div class="card-body">
                        <h6 class="card-subtitle text-muted">3Support card subtitle</h6>
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      
                      <div class="card-footer text-muted">
                        2 days ago
                      </div>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
          <!-- swaper 2 end -->


          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">

            <div class="swiper">
              <template class="swiper-config">
                {
                "loop": true,
                "speed" : 600,
                "autoplay": {
                "delay": 5000
                },
                "slidesPerView": "auto",
                "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
                }
                }
              </template>
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="testimonial-item recnt">

                  
                  <div class="card mb-4">
                    <img src="img/mpgc_hp1.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                  </div>

                  <!--<img src="img/blog-1.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                     <div class="d-flex">
                      
                      <div>
                        <h3>Saul Goodman</h3>
                        <h4>Ceo & Founder</h4>
                        
                      </div>
                    </div>-->
                    
                  </div> 
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    
                    <div class="card mb-4">
                    <img src="img/mpgc_hp2.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                    <div class="card-body">
                      <h6 class="card-subtitle text-muted">2 Support card subtitle</h6>
                      <h5 class="card-title">Special title treatment</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    
                    <div class="card-footer text-muted">
                      2 days ago
                    </div>
                  </div>
                  </div>
                </div><!-- End testimonial item -->

                <div class="swiper-slide">
                  <div class="testimonial-item">
                    <div class="card mb-4">
                      <img src="img/mpgc_hp1.jpg" class="testimonial-img-rcnt flex-shrink-0 img-fluid" alt="">
                      <div class="card-body">
                        <h6 class="card-subtitle text-muted">3Support card subtitle</h6>
                        <h5 class="card-title">Special title treatment</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      </div>
                      
                      <div class="card-footer text-muted">
                        2 days ago
                      </div>
                    </div>
                  </div>
                </div><!-- End testimonial item -->

                

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>
        </div>

      </div>

    </section><!-- End recent Section -->









        

    </section><!-- End Recent-posts Section -->

    <!-- Contact Section - Home Page -->
    <section id="contact" class="contact">

      <!--  Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Get answers to your questions about anything write us codersready</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6">

            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="200">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="300">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+91 8278708624</p>
                  <!-- <p>+1 6678 254445 41</p> -->
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="400">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p> info@codersready.com </p>
                  <!-- <p>contact@codersready.com</p> -->
                </div>
              </div><!-- End Info Item -->

              <div class="col-md-6">
                <div class="info-item" data-aos="fade" data-aos-delay="500">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday</p>
                  <p>9:00AM - 05:00PM</p>
                </div>
              </div><!-- End Info Item -->

            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- End Contact Section -->
  
  </main>
  </body/

  

