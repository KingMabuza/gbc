<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>GBC</title>
</head>
<body>
  <div class="navbar-fixed">
    <nav class="white">
        <div class="nav-wrapper container">
        <a href="/en" class="brand-logo"><img id="logo" src="/logo.png" width="135"/></a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger blue-grey-text text-darken-2"><i class="material-icons blue-grey-text text-darken-2">menu</i></a>
        <ul class="right hide-on-med-and-down">
            <li><a href="#about" class="blue-grey-text text-darken-2">About</a></li>
            <li><a href="#services" class="blue-grey-text text-darken-2">How It Works</a></li>
            <li><a href="#contact" class="blue-grey-text text-darken-2">Contact Us</a></li>
        </ul>
        </div>
    </nav>
  </div>

  <ul class="sidenav blue-grey-text text-darken-2" id="mobile-demo">
    <li><a href="#about" class="blue-grey-text text-darken-2">About</a></li>
    <li><a href="#services" class="blue-grey-text text-darken-2">How It Works</a></li>
    <li><a href="#contact" class="blue-grey-text text-darken-2">Contact Us</a></li>
  </ul>

  <div id="banner">

        <h1 class="container center white-text">RECYCLING JUST GOT COOL</h1>


  </div>

  <div id="about" class="section scrollspy">
    <div class="center container">
        <h3 class="blue-grey-text text-darken-4"><b>What Is A Reverse Vending Machine?</b></h3>
        <p class="blue-grey-text text-darken-2">With the current recycling and eco-friendly movement spanning across the packaging sector comes a wealth of innovation,we offer <b>Reverse Vending Machines</b> across different locations in the country
        which not only benefits the packaging industry, but also the planet. From plant-based packaging materials to naturally
        digestible bioplastics, it’s not surprising that packaging has stepped up even further. Reverse vending machines are yet
        another example of packaging ingenuity, designed to help reduce the number of plastic beverage containers are thrown
        away rather than being recycled.</p>

        <p class="blue-grey-text text-darken-2">The reverse vending machine uses technology to identify, sort, collect and process used containers. There are two types
        of reverse vending machines. The first is the more popular of the two, as it only focuses on one element – accepting
        used containers like plastic bottles and cans and returning money to the user. The second type allows you to purchase
        beverages but asks you to pay a small deposit on the beverage container; however, once you are finished with your drink
        and the beverage container, you can return it and get your deposit back. The container is then sent off to be recycled
        and used again.</p>
    </div>

    <h3 class="blue-grey-text text-darken-4 center"><b>How Does It Help?</b></h3>

    <div class="row container">
        <div class="col s12 m6"><img class="responsive-img" src="/bottles.jpg" height="500" width="500"/></div>
        <div class="col s12 m6 push-m1"><p class="blue-grey-text text-darken-2">By being able to access easy ways to recycle packaging and containers, as well as being able to collect a reward upon
        returning their packaging, consumers are much more likely to get involved with recycling. This means that more consumers
        are contributing and doing their part, leading to fewer bottles and containers that can be recycled being thrown away.</p>
        <p class="blue-grey-text text-darken-2">Returning your containers to a reverse vending machine is the only way to make sure the containers can be turned into
        new bottles and cans again and again.</p>
        <p class="blue-grey-text text-darken-2">With the Planet Revival vending machines it is now much quicker and easier to save the planet. </p>
        </div>
    </div>

  </div>

  <div id="services" class="section scrollspy center">
      <div class="video-container">
        <iframe class="center" width="853" height="480" src="https://www.youtube.com/embed/ZI7OldXuq7c"
            title="YouTube video player" frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen></iframe>
      </div>

  </div>

      <footer class="page-footer black">
        <div id="contact" class="section scrollspy">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Planet Revival</h5>
                    <p class="grey-text text-lighten-4">Founded in 2020 seeing the need to make a change and bring more
                        innovative solutions towards the current pollution dilemma in South Africa. </p>
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Contact</h5>
                    <address>
                        <a href="mailto:info@planetrevival.co.za"
                            class="grey-text text-lighten-4">Info@planetrevival.co.za</a>.<br>
                        <a href="tel:+27780365685" class="grey-text text-lighten-4">+27 78 036 5685</a>
                        <br />
                        <a class="grey-text text-lighten-4">Waterfall City,Midrand</a>
                        <br />
                        <a class="grey-text text-lighten-4">South Africa</a>



                    </address>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2022 Copyright Planet Revival
            </div>
        </div>
        </div>
    </footer>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
      M.AutoInit();
  </script>
</body>
</html>
