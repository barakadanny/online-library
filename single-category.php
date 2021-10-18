<?php $title="Books"; ?>
<?php 
    include("includes/header.php");
?>
    
<?php
    include("includes/navigation.php");
?>

     <!-- Single category search section -->
     <section id="single-category">
        <div class="container">
            <div class="row section-title justify-content-center">
                <h2 class="section-title-heading">English</h2>
            </div>
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

     <!-- single category table -->
     <section id="single-category__table">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-12">
                    <table id="myTable" class="tbody">
                        <tr class="header">
                          <th style="width:60%;">Name</th>
                          <th style="width:40%;">Author</th>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">A Commentary and Digest on The Air, Act 1981</a></td>
                          <td>Apoorva Kumar Singh</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">The Bloomsbury Anthology of Great Indian Poems</a></td>
                          <td>Abhay K.</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">Karmayoddha Granth</a></td>
                          <td>Amit Shah</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">A Rural Manifesto – Realising India’s Future through her Village</a></td>
                          <td>BJP MP Varun Gandhi</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">The Fire Burns Blue: A History of Womens Cricket in India</a></td>
                          <td>Karunya Keshav and Sidhanta Pathak</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">Strangers No More: New Narratives from Northeast</a></td>
                          <td>Sanjoy Hazarika</td>
                        </tr>
                        <tr>
                          <td><a href="#" class="view-book__link">Strangers No More: New Narratives from Northeast</a></td>
                          <td>Sanjoy Hazarika</td>
                        </tr>
                      </table>
                      <section class="pagination-section">
                          <div>
                            <p> View item in a page:</p>
                            <select name="" id="">
                                <option value="5">5</option>
                                <option value="10" selected>10</option>
                                <option value="15">15</option>
                                <option value="20">20</option>
                            </select>
                          </div>
                          <ul class="pagination-list">
                              <li class="page-list"><a class="prev" href="#" id="prev">&#139;</a></li>
                              <li class="page-list"><a class="next" href="#" id="next">&#155;</a></li>
                          </ul>
                      </section>
                </div>
            </div>
        </div>
     </section>
<?php
    include("includes/login.php");
?>
    
<?php
    include("includes/register.php");
?>

 <?php
    include("includes/footer.php");
?>   