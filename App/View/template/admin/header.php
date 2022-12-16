<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Beranda</title>

  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@40,100,0,0" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');

    body {
      background-color: #ffffff;
      font-family: 'Rubik', sans-serif;
    }

    .modal-title{
      color: #ffffff;
    }

    .btn-close{
      border: 2px solid #f2f2f2;
    }

    .heightForm{
      gap: 2px;
    }

    .f1{
      margin-top: 10px
    }

    .limitChar{
      display:inline-block;
      text-overflow: ellipsis;
      width: 200px;
      height: 5.888rem;
      overflow: hidden;
    }

    .modal-backdrop {
    --bs-backdrop-zindex: -1050;
    --bs-backdrop-bg: #000;
    --bs-backdrop-opacity: 0.5;
    position: fixed;
    top: 0;
    left: 0;
    z-index: var(--bs-backdrop-zindex);
    background-color: var(--bs-backdrop-bg);
}

.modal-content {
    position: relative;
    top: -1rem;
    display: flex;
    flex-direction: column;
    width: 100%;
    color: #ffffff;
    pointer-events: auto;
    background-color: #212529;
    background-clip: padding-box;
    border: var(--bs-modal-border-width) solid var(--bs-modal-border-color);
    border-radius: var(--bs-modal-border-radius);
    outline: 0;
}


    .side {
      height: 100%;
      width: 300px;
      position: fixed;
      overflow-x: hidden;
      z-index: 1;
      top: 0rem;
      left: 0rem;
      background-color: #f2f2f2;
      padding-top: 20px;
      border-right: 1px solid #f2f2f25f;
      text-align: left;
      padding: 0rem 1rem 0rem 1rem;


    }

    .side a {
      text-transform: capitalize;
      text-decoration: none;
      font-size: 17px;
      color: black;
      margin-top: 2rem;
    }

    .sidemenu {
      height: 3rem;
      border-radius: 1rem;
      list-style: none;
      height: 8vh;
      transition: 350ms ease-out;
    }


    .sidemenu:hover {
      margin-top: 2rem;
      background-color: grey;
      height: 3rem;
      border-radius: 1rem;
      list-style: none;
      height: 8vh;
    }

    .stayIn {
      margin-top: 2rem;
      background-color: #03a1f8;
      height: 3rem;
      border-radius: 1rem;
      list-style: none;
      height: 8vh;
    }

    .header {
      margin-bottom: 2rem;
      margin: 1rem 2rem 3rem 0.6rem;
      height: 7vh;
      text-align: center;
    }


    ul {
      padding: 0.5rem 0rem 1rem 2rem;
    }

    .two {
      margin: 1.9rem 2rem 5rem 0.6rem;
      height: 5vh;

    }

    .container {
      display: grid;
      grid-template-columns: repeat(1, 1fr);
    }

    .rowside {
      padding: 0rem 1rem 0rem 1rem;
    }

    h1,
    h4 {
      color: black;
      font-size: 2rem;
    }

    .infoAll {
      margin-left: 20rem;
      height: 40vh;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      padding: 2rem;
      margin-top: 2rem;
      border-radius: 1rem;
    }

    .infoTab {
      margin-left: 20rem;
      height: 90vh;
      width: 75vw;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      padding: 2rem;
      margin-top: 2rem;
      border-radius: 1rem;
    }


    .infoAll:not(:first-child) {
      margin-left: 1rem;
      height: 40vh;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      padding: 2rem;
      margin-top: 2rem;
      border-radius: 1rem;
    }

    .setting {
      padding: 0rem 3rem 0rem 6rem;
    }

    .setting1 {
      padding: 0rem 1.5rem 0rem 1.5rem;

    }

    .divtwo {
      border-right: 1px solid #f2f2f286;
      height: 100%;
    }

    .sideheader {
      padding: 2rem 0rem 0rem 0rem;
    }

    .logout {
      text-transform: capitalize;
      text-decoration: none;
      font-size: 25px;
      color: rgba(255, 255, 255, 0.833);
    }

    ::-webkit-scrollbar {
      width: 12px;
    }

    ::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(200, 200, 200, 1);
      border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
      border-radius: 10px;
      background-color: #fff;
      -webkit-box-shadow: inset 0 0 6px rgba(90, 90, 90, 0.7);
    }

    .boxcreate {
      background-color: grey;
      height: 100%;
      width: 40vw;
      margin-left: 35rem;
      box-shadow: -0.7rem 2rem 1rem 1rem rgba(0, 0, 0, 0.7);
      padding: 1rem 5rem 2rem 5rem;
      border-radius: 1rem;
    }

    .headtitle {
      font-size: 30px;
      font-weight: bolder;
    }

    .psion {
      margin-top: 3rem;
      margin-bottom: 3rem;
      justify-items: center;
      color: #fff;

    }

    .stockstyle {
      color: #ffffff;
      text-decoration: none;
      font-size: 3rem;
      font-weight: bolder;
      text-align: center;
    }


    .noxy:hover .nox {
      filter: blur(0px);
      transform: scale(.98);
    }

    .noxy:hover .nox:hover {
      transform: scale(1);
      filter: blur(0px);

    }

    .yoxy:hover .yox {
      filter: blur(1px);
      opacity: .5;
      transform: scale(.98);
    }

    .yoxy:hover .yox:hover {
      transform: scale(1);
      filter: blur(0px);
      opacity: 1;
    }

    .tgl {
      color: #ffffff;
      padding: 0.3rem 2rem 2rem 2.6rem;
      font-size: 1.8rem;
      font-weight: bolder;
    }

    .positioning {
      font-size: 4rem;
      margin-left: 6.5rem;
      margin-top: 3rem;
    }

    .judulDash{
      font-size: 1.5rem !important;
    }
  </style>
</head>

<body>