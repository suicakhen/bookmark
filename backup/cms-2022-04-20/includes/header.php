<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="descriptions" content="Bookmark is an online bookstore where you can purchase your favorite books in your prefered format."/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="icon" href="/img/favicon.png"/>
    <link rel="apple-touch-icon" href="/img/apple-touch-icon.png"/>
    <link rel="manifest" href="manifest.webmanifest" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    
    <link rel="stylesheet" href="css/general.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/queries.css" />
   

    <script
      type="module"
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"
    ></script>
    <script
      nomodule=""
      src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"
    ></script>

    <title>The Bookmark &mdash;Online Bookstore</title>
  </head>
  <body>
    <header class="header">
      <div class="header-container">
        <a href="#" >
          <img
            class="logo"
            alt="The Bookmark logo"
            src="img/BookMark-logo.png"
          />
        </a>

        <div class="form">
          <form class="search-bar search--header" action="">
            <input
              type="text"
              placeholder="Search books..."
              name="search"
              class="email-sub"
            />
            <button type="submit" class="btn--form">Search</button>
          </form>
        </div>
        <nav class="topnav">
          <a class="main-nav-link" href="sign-in.php">LOG IN</a>
          <a class="main-nav-link" href="wishlist.html">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="wish-list"
              fill="none"
              viewbox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"
              /></svg
          ></a>
          <a class="main-nav-link" href="cart.php"
            ><svg
              xmlns="http://www.w3.org/2000/svg"
              class="shoping-cart"
              fill="none"
              viewbox="0 0 24 24"
              stroke="currentColor"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"
              /></svg
          ></a>
        </nav>
        