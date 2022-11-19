<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>

    <!-- Swiper.js -->
	<link href="assets/css/swiper-bundle.min.css" rel="stylesheet">
	<script src="assets/js/swiper-bundle.min.js"></script>

    <link rel="stylesheet" href="assets/css/global.css" />
    <link rel="stylesheet" href="assets/css/header.css" />

    <style>
      .header-spacer-150 {
          height: 150px;
      }
      .header-spacer-100 {
          height: 100px;
      }
      @media (max-width: 750px) {
          .header-spacer {
              height: 150px;
          }
      }
      .hero_container {
          width: 100%;
          margin: 0 auto;
          position: relative;
          top: -100px;
      }
      .slide_container {
          height: 100%;
          background-size: cover;
      }
      .slide-1 {
          background-image: url(assets/images/banner.png);
      }
      .slide-2 {
          background-image: url(assets/images/banner.png);
      }
      .slide_wrapper {
          max-width: 1160px;
          height: 100%;
          margin: 0 auto;
          display: flex;
          flex-direction: column;
          flex: 1;
          position: relative;
      }
      .slide_content {
          margin-top: 32%;
          color: white;
      }
      .slide_content h1 {
          font-size: 60px;
          line-height: 60px;
          font-weight: 700;
          margin: 0;
          padding: 0;
      }
      .slide_content h2 {
          font-size: 28px;
          line-height: 28px;
          font-weight: 600;
          padding: 0;
          margin: 0;
      }
      .slide_content .date {
          font-size: 24px;
          line-height: 24px;
          font-weight: 300;
          padding-top: 20px;
          padding-bottom: 55px;
          margin: 0;
      }
      .slide_content a {
          cursor: pointer;
      }
      .swiperHero {
          width: 100%;
          height: 80vh;
          position: relative;
      }
      .swiperHero-button-prev {
          padding-left: 25px;
          display: none;
      }
      .swiperHero-button-next {
          padding-right: 25px;
          display: none;
      }
      .footer {
          padding-top: 85px;
          padding-bottom: 85px;
      }
      .padding-bottom-50 {
          padding-bottom: 50px;
      }
      .footer-small {
          font-size: 12px;
      }
      .overlay-message {
          position: absolute;
          height: 100vh;
          background-color: rgba(255, 255, 255, 0.96);
          width: 100%;
          z-index: 99999;
      }
      .overlay-message-container {
          position: relative;
          top: 200px;
          left: 320px;
      }
      .__heading_1 {
          font-size: 35px;
          line-height: 18px;
          font-weight: medium;
          padding: 0;
          margin: 0;
      }
      .__heading_2 {
          font-size: 89px;
          line-height: 60px;
          font-weight: medium;
          padding: 0;
          margin: 0;
      }
      .__content {
          max-width: 500px;
          margin-top: 75px;
      }
      .__line_1 {
          font-size: 18px;
      }
      .__line_2 {
          font-size: 25px;
      }
      .__flex {
          display: flex;
          margin-top: 75px;
      }
      .__flex a {
          margin-right: 50px;
          font-size: 27px;
      }

      .support h1 {
        font-size: 50px;
        letter-spacing: -3px;
      }

      .support  {
      }

      .support p {
        font-size: 19px;
        line-height: 27px;
        letter-spacing: -1px;
      }
    </style>

    <style>
        .medium-38 {
            font-size: 38px;
            font-weight: 500;
            line-height: 41px;
        }
        .readmore {
            font-size: 19px;
            font-weight: 500;
            text-decoration: underline;
        }

        .medium-13 {
            font-size: 13px;
            font-weight: 500;
            line-height: 7px;
        }

        .medium-25 {
            font-size: 25px;
            font-weight: 500;
            line-height: 24px;
        }

        .italic-light-15 {
            font-size: 15px;
            font-weight: 200;
            line-height: 20px;
        }

        .regular-14 {
            font-size: 14px;
            line-height: 20px;
            font-weight: normal;
        }

        .readmore-14 {
            font-size: 14px;
            font-weight: 500;
            text-decoration: underline;
            line-height: 9px;
        }
    </style>

  </head>