<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>

  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');

    *,
    *::before,
    *::after {
      margin: 0;
      padding: 0;
      text-decoration: none;
      box-sizing: border-box;
      font-family: 'Rubik', sans-serif;
    }

    a {
      text-decoration: none;
      color: #2C3333;
    }

    :root {
      --bg-color: #2C3333;
      --bg-color1: #cdebf4;
      --bg-color2: #A5C9CA;
      --bg-color3: #E7F6F2;
      --d: 2500ms;
      --angle: 90deg;
      --gradX: 100%;
      --gradY: 50%;
      --c1: rgb(255, 255, 255);
      --c2: rgba(168, 239, 255, 0.1);
    }



    ::-webkit-scrollbar {
      display: none;
    }

    dl,
    ol,
    ul {
      margin-top: 0;
      margin-bottom: 0rem !important;
    }

    .nav_container {
      background-color: #f2f2f2f2;
      filter: blur(30);
      display: flex;
      padding: 10px;
      width: 100vw;
      list-style: none;
      border: 0;
      outline: 0;
      gap: 15rem;
      text-decoration: none;
      align-items: center;
      justify-content: space-between;
    }


    .menu_nav {
      background-color: #f2f2f2f2;
      filter: blur(30);
      display: flex;
      padding: 10px;
      list-style: none;
      border: 0;
      outline: 0;
      text-decoration: none;
      gap: 50px;
      align-items: center;
      margin-left: 5rem;
    }

    .menu_nav1 {
      background-color: #f2f2f2f2;
      filter: blur(30);
      display: flex;
      padding: 10px;
      list-style: none;
      border: 0;
      outline: 0;
      text-decoration: none;
      gap: 50px;
      align-items: center;
    }

    .service_center {
      margin-top: 4rem;
      background-color: #f2f2f2;

    }

    .service_left {
      margin-top: 2.5rem;
      justify-items: center;
      font-size: 2rem;
      padding: 2rem;
      border-radius: 2rem;
      margin-right: 2rem;

    }

    .service_left p {
      margin-top: 2rem;
      font-size: 2.5rem;

    }

    .service {
      background: #ffffff;
      padding: 2rem;
      border-radius: 2rem;
      transition: var(--transition);
      color: var(--color-black);
      gap: 3rem;
      margin-top: 5rem;
      width: 100%;
      height: 70%;
      margin-bottom: 5rem;
      float: none;
    }

    .service:hover {
      box-shadow: 0 3rem 3rem rgba(237, 253, 255, 0.929);
      z-index: 1;
    }

    .service_icon {
      background: var(--color-bg);
      padding: 0.7rem;
      border-radius: 0.9rem;
    }

    .service:nth-child(1) .service_icon {
      background: var(--color-icon);
    }

    .service h5 {
      margin: 2rem 0 1rem;
    }

    .service p {
      font-size: 0.85rem;
    }

    .boxCars {
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      padding: 2rem;
      transform: scale(0.8);
      transition: 400ms ease-in;

    }

    .boxCars:hover {
      transform: scale(0.9);
      transition: 100ms ease-in;

    }

    .imgproduct {
      width: 25vw;
      height: 35vh;
    }

    .contactFont {
      position: absolute;
      top: 12rem;
      left: 6rem;
      border-bottom: 5px solid #f2f2f2f2;
    }

    .textContact {
      font-size: 7rem;
      color: #f2f2f2;
    }

    .textContact1 {
      font-size: 7rem;
      color: #f2f2f2;
    }

    .infoContact {
      padding: 3rem 3rem;
      font-size: 1.5rem;
    }

    .batas {
      margin-top: 1.5rem;
      font-weight: lighter;
      text-align: justify;
    }

    .profile {
      padding: 2rem 2rem;
    }

    .profile1 {
      padding: 0rem 3rem;
    }

    .batasProfile {
      margin-top: 2rem;
    }

    .about2 {
      padding: 2rem 2rem;
      margin-top: 0rem;
      font-size: 1.5rem;
      text-align: center;
    }

    .bar1 {
      height: 65vh;
      padding: 1rem 1rem;

    }

    .bar1 img {
      width: 80%;
    }

    .ourpurpose img {
      border-radius: 2rem;
      margin: 3rem 3rem;
    }

    .ourpurpose h2 {
      margin-top: 3rem;
      margin-left: 3rem;
    }

    .ourpurpose p {
      text-align: justify;
      margin-top: 3rem;
      margin-left: 3rem;
    }

    .imgProfile {
      height: 100vh;
    }

    .account-img{
    height: 3rem;
    width: 3rem;
    border-radius: 2rem;
    display: inline-block;
  }

  .navigation {
  width: 100%;
  background-color: black;
  position: absolute;
  top: -2.2rem;
  right: 0rem;
}

.logout {
  font-size: .8em;
  font-family: 'Oswald', sans-serif;
  position: absolute;
    right: 0.5rem;
    top: 1.7rem;
  overflow: hidden;
  letter-spacing: 3px;
  opacity: 0;
  transition: opacity .45s;
  -webkit-transition: opacity .35s;
  
}

.button {
	text-decoration: none;
  display: grid;
  grid-template-columns: repeat(1);
  position: absolute;
  top: 1rem;
  right: 1rem;
	float: right;
  padding: 12px;
  margin: 15px;
  color: #f3f3f3;
  width: 80px;
  height: 75px;
  transition: width .35s;
  -webkit-transition: width .35s;
  overflow: hidden
}

.button:hover {
  width: 180px;
} 

.button:hover .emailAkun {
opacity: 0;
color: #E7F6F2;
} 

a:hover .logout{
  opacity: .9;
}

a {
  text-decoration: none;
}

.emailAkun{
  position: absolute;
  top: 1.3rem;
  right: 14rem;
}



  </style>
</head>

<body>