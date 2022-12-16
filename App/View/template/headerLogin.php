<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

  <title>User Data</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');

    .navbar {
      margin-bottom: 3rem;
    }

    .btn {
      margin-top: 1rem;
      margin-bottom: 1rem;
      margin-left: 1rem;
    }

    th {
      text-align: center;
    }

    td {
      text-align: center;
      vertical-align: middle !important;
    }

    .boxcreate {
      background-color: #343a40;
      height: 100%;
      width: 60vw;
      margin-left: 15rem;
      box-shadow: -0.7rem 2rem 1rem 1rem rgba(0, 0, 0, 0.47);
      padding: 1rem 5rem 2rem 5rem;
      border-radius: 1rem;
      color: white;
    }

    body {
      background-color: #ffff;
      font-family: 'Rubik', sans-serif;

    }

    h1 {
      text-align: center;
      color: black;

    }

    .cover0 {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 6rem;
      color: #f2f2f2;

    }

    .cover {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .box_login {
      padding: 2rem 2rem;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      z-index: 1;
      border-radius: 1rem;

    }

    .line {
      margin-top: 3rem;

    }


    hr {
      margin-top: 0.8rem;
      height: 0.4rem;
      background-color: #F72585;
      border: none;
    }

    .control {
      padding: 1.5rem 3rem 2rem 1rem;
      display: grid;
      grid-template-columns: 1fr;
      gap: 1rem;
      color: #F72585;
      justify-items: center;
    }

    .control1 {
      padding: 1.5rem 3rem 2rem 1rem;
      display: grid;
      grid-template-columns: 1fr 1fr;
      color: #F72585;
      align-content: stretch;
      justify-items: stretch;
    }


    .line {
      max-width: 380px;
      width: 100%;
      height: 55px;
      background-color: #dad9d9f0;
      margin: 10px 0;
      border-radius: 55px;
      display: grid;
      grid-template-columns: 15% 85%;
      padding: 0 0.4rem;
      position: relative;
    }

    .line input {
      background: none;
      outline: none;
      border: none;
      line-height: 1;
      font-weight: 600;
      font-size: 1.2rem;
      color: #26272c;
    }

    .line select {
      background: none;
      outline: none;
      border: none;
      width: 23vw;
      line-height: 1;
      font-weight: 600;
      font-size: 1.2rem;
      color: #26272c;
      padding-left: 3rem
    }

    .line i {
      text-align: center;
      line-height: 55px;
      font-size: 1.5rem;
      color: #26272c;
    }

    .line input:placeholder-shown {
      font-weight: 500;
      color: #7CF6FD;
    }

    .btn {
      width: 150px;
      height: 49px;
      outline: none;
      border: none;
      border-radius: 50px;
      background-color: #26272c;
      color: white;
      text-transform: uppercase;
      font-weight: 600;
      transition: all 0.5s;
      margin-top: 1rem;
    }

    .bggambar {
      position: absolute;
      bottom: 0rem;
      right: 3rem;
    }

    .bggambar1 {
      position: absolute;
      bottom: 0rem;
      left: 3rem;
    }

    .vector {
      height: 40vh;
      width: 40vw;
    }

    .avafile {
      padding-top: 0.9rem;
    }

    .loginM {
      position: absolute;
      top: 0.5rem;
      left: -7rem;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      height: 6vh;
      padding-top: 9px;
      padding-right: 10px;

      transition: 200ms ease-in;
    }
    .loginM:hover {
      position: absolute;
      top: 0.5rem;
      left: 0rem;
      background: rgba(255, 255, 255, 0.05);
      backdrop-filter: blur(10px);
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      border-left: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
      border-radius: 3px;
      height: 6vh;
      padding-top: 9px;

    }

    .bx1{
      margin-left: 2rem;
    }

    a{
      text-decoration: none !important;
      color: #26272c !important;
    }
  </style>
</head>