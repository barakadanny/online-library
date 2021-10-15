<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DigiBook ||</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">   
    <link rel="stylesheet" href="assets/css/single-category.css">   
    <link rel="stylesheet" href="assets/css/books-explore.css">   
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">DigiBook</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                        <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#about">Explore</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#features">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#download">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#pricings">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-btn" href="#contact" data-target="#mymodal" data-toggle="modal">Create an Account</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
          </nav>
    </header>
    <!-- Single category search section -->
    <section id="single-category">
        <div class="container">
            <div class="row justify-content-center text-center mt-3">
                <div class="col-md-6 single-desc">
                    <div class="sub-field">
                        <input class="sub-field-input" type="email" id="myInput" onkeyup="myFunction()" placeholder="Type a book name here...">
                        <label class="subscribe-btn"><a href="#">Search</a></label>
                    </div>
                </div>
            </div>
        </div>
     </section>
    <!-- Best Books -->
    <section id="best-books">

        <div class="container">

            <div class="row section-title ">
                <h2 class="section-title-heading">Best Books</h2>
            </div>

            <div class="row justify-content-center text-center mt-2">

                <div class="col-md-3 single-desc">
                    <a href="single-category.html"><img class="best-books_links" src="assets/img/English.jpg" alt=""></a>
                </div>
                <div class="col-md-3 single-desc">
                    <a href="single-category.html"><img class="best-books_links" src="assets/img/French.jpg" alt=""></a>
                </div>
                <div class="col-md-3 single-desc">
                    <a href="single-category.html"><img class="best-books_links" src="assets/img/Russian.jpg" alt=""></a>
                </div>
                <div class="col-md-3 single-desc">
                    <a href="single-category.html"><img class="best-books_links" src="assets/img/Swahili.jpg" alt=""></a>
                </div>

            </div>

        </div>

     </section>

     <!-- Genres -->
    <section id="Genres">

        <div class="container">

            <div class="row section-title ">
                <h2 class="section-title-heading">Genres</h2>
            </div>

            <div class="row justify-content-center text-center mt-2 mb-5">

                <div class="col-md-4 single-desc">
                    <a href="single-category.html"><img class="genre-link" src="assets/img/love.png" alt=""></a>
                </div>
                <div class="col-md-4 single-desc">
                    <a href="single-category.html"><img class="genre-link" src="assets/img/comic.jpg" alt=""></a>
                </div>
                <div class="col-md-4 single-desc">
                    <a href="single-category.html"><img class="genre-link" src="assets/img/science.png" alt=""></a>
                </div>

            </div>

        </div>

    </section>

     <!-- Popular -->
     <section id="popular">

        <div class="container">

            <div class="row section-title ">
                <h2 class="section-title-heading">Genres</h2>
            </div>

            <div class="row justify-content-center text-center mt-2 mb-5">

                <div class="col-md-6 single-desc">
                    <a href="single-category.html"><img class="popular-link" src="assets/img/popular1.jpg" alt=""></a>
                </div>
                <div class="col-md-6 single-desc">
                    <a href="single-category.html"><img class="popular-link" src="assets/img/popular2.jpg" alt=""></a>
                </div>
            </div>

        </div>

    </section>


    <!-- sign-up section -->
    
        <div class="modal fade" id="mymodal">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="text-center">Welcome to DigiBook</h3>
                        <a href="#" class="close" data-dismiss="modal"> &times; </a>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="signIn-link">
                                <P>Already an Account? <a href="#">Please Click here to signIn.</a></P>
                            </div>
                            <a href="#" class="signUp-btn">SignUp</a>
                          </form>
                    </div>
                </div>
            </div>
        </div>

    <!-- Footer section -->
    <footer id="footer">

        <div class="container">

            <div class="row d-flex flex-column align-items-center">
                <!-- footer content -->
                <div class="row justify-content-center mb-4">
                    <div class="col-md-4 ">
                        <h3 class="footer-logo">DigiBook</h3>
                        The Blurt Foundation is a social enterprise dedicated to 
                        creating support and resources for those affected by depression.
                    </div>
                    <div class="col-md-7 row justify-content-center">
                        <div class="col-md-3">
                            <h3 class="footer-title">Quick Links</h3>
                            <ul>
                                <li>Home</li>
                                <li>Books</li>
                                <li>Contact</li>
                            </ul>
                        </div>
                        <div class="col-md-3 ">
                            <h3 class="footer-title">Customer Area</h3>
                            <ul>
                                <li>My Account</li>
                                <li>Terms</li>
                                <li>FAQ</li>
                            </ul>
                            </div>
                        <div class="col-md-3">
                            <h3 class="footer-title">Category</h3>
                            <ul>
                                <li>Business</li>
                                <li>E-Book</li>
                                <li>Childreen</li>
                                <li>Technology</li>
                                <li>Fiction</li>
                                <li>Economy</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h3 class="footer-title">Social Media</h3>
                            <ul>
                                <li>Facebook</li>
                                <li>Instagram</li>
                                <li>Linkdln</li>
                                <li>Twitter</li>
                            </ul>
                        </div>
                      
                    </div>
    
                </div>

                
                <div class="copyright text-center">
                    <p>© DigiBook, All right Reserved </p>
                </div>
            </div>
            

        </div>

    </footer>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>   
    <script src="assets/js/custom.js" ></script>   
</body>
</html>