
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="vieport" content="width=device-width" content="initial-scale=1.0" />
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="style3.css">
        <link rel="stylesheet" href="query.css">
        <script src="../vendors/jq-js/jquery-3.5.1.min.js"></script>
        <script src="validation.js"></script>
        <script src="additional_functions.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
         integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
          integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        <title>Omnifood</title>
        <div class="header">
            <img class="logo" src="Images/pngwing.com.png" alt="">
            <nav class="navigation">
                <ul class="nav-list">
                    <li><a class="nav-sec" href="#">How it works</a></li>
                    <li><a class="nav-sec" href="#">Meals</a></li>
                    <li><a class="nav-sec" href="#">Pricing</a></li>
                    <li><a class="nav-sec" href="#">Features</a></li>
                    <li><a class="nav-sec" href="#">Sign up</a></li>
                </ul>
            </nav>
        </div>
    </head>
    <body>
        
        <section class="hero-sect">
            <div class="hero">
                <div class="hero-text-box">
                    <h1 class="header1">
                        A healthy meal, delivered to your door every single day
                    </h1>

                    <p class="hero-text">
                        The smart 365 days food subscription that will make you eat healthy again.
                         Tailored to your personal tastes and nutritional needs. We have delivered 250,000+ meals last year.
                    </p>

                    <a href="https://myanimelist.net/" class="bt1 bt">Start eating well</a>
                    <a href="https://aniwatchtv.to/" class="bt2 bt">Learn more &darr;</a>
                    <div class="delivered-meals">
                        <div class="delivered-imgs">
                            <img src="Images/Emilia.jpg" alt="img1">
                            <img src="Images/ichigo.jpg" alt="img2">
                            <img src="Images/orihime2.jpg" alt="img3">
                            <img src="Images/noelle-dragon-form-by-v0-440ruuda2lrb1.webp" alt="img4">
                            <img src="Images/mega Lucario.png" alt="img5">
                            <img src="Images/aizen3.jpg" alt="img6">
                        </div>

                        <div >
                            <p class="delivered-text">
                                250,000+ meals delivered last year!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="hero-img-box">
                    <img src="Images/Foods.jpg" class="hero-img" alt="Foods" />
                    <img src="Images/pizza.jpg" class="hero-img2" alt="pizza">
                </div>
            </div>
        </section>
        
    
        <section class="featured-in">
            <h3 class="feature-header">AS FEATURED IN</h3>
            <div class="feat-img-box">
                <img class="feat-logo logo1" src="Images/TechCrunch-Logo.png" alt="">
                <img class="feat-logo logo2" src="Images/Business-Insider-Logo-2017.png" alt="">
                <img class="feat-logo logo3" src="Images/The-New-York-Times-Logo-1857-present.jpeg" alt="">
                <img class="feat-logo logo4" src="Images/forbes.png" alt="">
                <img class="feat-logo logo5" src="Images/USA-Today-Logo-media.png" alt="">
            </div>
        </section>

     
        <section class="how-it-works">
            <div class="container">
                <span class="sub-header">HOW IT WORKS</span>
                <h2 class="header2">
                    Your daily dose of health in 3 simple steps
                </h2>
            </div>
            
            <div class="container grid grid-2-cols">
                <div class="step-text-box">
                    <div class="step-num">01</div>
                    <h3 class="header3">
                        Tell us what you like(and what not)
                    </h3>
                    <p class="step-text">Never again waste time thinking what to eat! Omnifood AI will create a 100% personalized
                         weekly meal plan just for you. It makes you get all the nutrients and vitamins you need, no matter what diet
                        you follow! </p>
                </div>
                <div class="step-img-box">
                    <img class="step-img" src="Images/app-screen-1.png" alt="">
                </div>

                <div class="step-img-box">
                    <img class="step-img" src="Images/app-screen-2.png" alt="">
                </div>
                <div class="step-text-box">
                    <div class="step-num">02</div>
                    <h3 class="header3">
                        Approve your weekly meal plan
                    </h3>
                    <p class="step-text ">Once per week, approve the meal plan generated for you by Omnifood AI. You can 
                        ingredients, swap entire meals, or even add your recipes. </p>
                </div>

                <div class="step-text-box">
                    <div class="step-num">03</div>
                    <h3 class="header3">
                        Receive meals at convenient time
                    </h3>
                    <p class="step-text">Best chefs in town will cook your selected meal everyday, and we will deliver it to your door
                        whenever works best for you. You can change delivery shedule and address daily! </p>
                </div>
                <div class="step-img-box">
                    <img class="step-img" src="Images/app-screen-3.png" alt="">
                </div>
                
            </div>
        </section>

        <section class="meal-sect">
            <div class="container">
                <span class="sub-header">MEALS</span>
                <h2 class="header2">Omnifood AI chooses from 5000+ recipes</h2>
            </div>
            <div class="container grid grid-3-cols">
                <div class="meal">
                    <img class="meal-img" src="Images/licensed-image.jpg" alt="">
                    <div class="meal-content">
                        <div class="tags">
                            <span class="tag tag1">CARB</span>
                            <span class="tag tag2">MEAT</span>
                        </div>
                        <p class="meal-title">Beef Burger</p>
                        <ul class="meal-attributes">
                            <li class="meal-attribute">
                                <ion-icon name="flame-outline"></ion-icon>
                                <span><strong>650</strong> calories</span> 
                            </li>
                            <li class="meal-attribute">
                                <ion-icon name="restaurant-outline"></ion-icon>
                                <span>NutriScore &reg; <strong>74</strong></span>
                            </li>
                            <li class="meal-attribute">
                                <ion-icon name="star-outline"></ion-icon>
                                <span><strong>4.9</strong> rating(537)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="meal">
                    <img class="meal-img" src="Images/Cheese-Pizza-2-1200.jpg" alt="">
                    <div class="meal-content">
                        <div class="tags">
                            <span class="tag tag1">CARB</span>
                            <span class="tag tag2">MEAT</span>
                        </div>
                        <p class="meal-title">Cheese Pizza</p>
                        <ul class="meal-attributes">
                            <li class="meal-attribute">
                                <ion-icon name="flame-outline"></ion-icon>
                                <span><strong>400</strong> calories</span> 
                            </li>
                            <li class="meal-attribute">
                                <ion-icon name="restaurant-outline"></ion-icon>
                                <span>NutriScore &reg; <strong>92</strong></span>
                            </li>
                            <li class="meal-attribute">
                                <ion-icon name="star-outline"></ion-icon>
                                <span><strong>4.8</strong> rating(441)</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="diets">
                    <p class="header3 diet-title">Works with any diet:</p>
                    <ul class="diet-list">
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Meat</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Vegetarian</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Pescatarian</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Gluten-Free</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Lactose-Free</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Keto</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Paleo</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Low FODMAP</span> 
                        </li>
                        <li class="diet">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="diet-name">Kid-friendly</span> 
                        </li>
                        
                    </ul>
                </div>
            </div>

            <div class="container all-recipes">
                <a class="link-recipes" href="https://engaze.ai/pizzaburg">See all recipes &rarr;</a>
            </div>
        </section>

        <section class="testimonial-sect">
            <div class="testimonial">
                <div class="testimonial-header">
                    <span class="sub-header">TESTIMONIALS</span>
                    <h2 class="header2">
                       Once you try it, you can't go back 
                   </h2>
                </div>
                <div class="testimonial-info">
                
                    <div class="comments">
                        <div class="user-comments">
                            <img class="user-img" src="Images/Lisa.png" alt="">
                            <blockquote>Inexpensive, healthy and great tasting meals, without even having to order manually!
                            it feels truly magical. </blockquote>
                            <span class="user-name">&dash; Lisa Yadomaru</span>
                        </div>
                        <div class="user-comments"><img class="user-img" src="Images/marin.jpg" alt="">
                            <blockquote>The AI algorithm is crazy good, it chooses the right meals for me everytime. 
                                It's amazing not to worry about food anymore! </blockquote>
                            <span class="user-name">&dash; Marin Kitagawa</span>
                        </div>
                        <div class="user-comments">
                            <img class="user-img" src="Images/violet-evergarden-anime-anime-girls-violet-evergarden-anime-wallpaper-preview.jpg" alt="">
                            <blockquote>Omnifood is a life saver! I just started a company, so there's no
                                time for cooking. I couldn't live without my daily meals now! </blockquote>
                            <span class="user-name">&dash; Violet Evergarden</span>  
                        </div>
                        <div class="user-comments">
                            <img class="user-img" src="Images/nel3.png" alt="">
                            <blockquote>I got omnifood for the whole family, and it frees up so much time! Plus,
                            everything is organic and vegan and without plastic.  </blockquote>
                            <span class="user-name">&dash; Nelliel Tu</span>
                        </div>
                    
                    </div>

                    <div class="gallery">
                        <img class="food-img" src="Images/pulao1.jpg" alt="">
                        <img class="food-img" src="Images/pulao2.jpg" alt="">
                        <img class="food-img" src="Images/pulao3.jpg" alt="">
                        <img class="food-img" src="Images/pasta1.jpg" alt="">
                        <img class="food-img" src="Images/pasta2.jpg" alt="">
                        <img class="food-img" src="Images/pasta3.jpg" alt="">
                        <img class="food-img" src="Images/burger1.jpg" alt="">
                        <img class="food-img" src="Images/burger2.jpg" alt="">
                        <img class="food-img" src="Images/burger3.jpg" alt="">
                    </div>
                </div>
            </div>
            
        </section>

        <section class="pricing-sect">
            <div class="pricing">
                <span class="sub-header">PRICING</span>
                <h2 class="header2">Eating well without breaking the bank</h2>
            </div>
            <div class="container pricing-op grid-2-cols">
                <div class="starter">
                    <p class="price-type">STARTER</p>
                    <p class="price-currency"><span class="currency">$</span>399</p>
                    <p class="rate">per month. That's just $13 per meal!</p>
                    <ul class="services-list">
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">1 meal per day</span>
                        </li>
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">Order times are between 11am and 9pm</span>
                        </li>
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">Delivery is free</span>
                        </li>
                        <li class="services">
                            <ion-icon class="cross" name="close-outline"></ion-icon>        
                        </li>
                    </ul>
                    <a href="https://myanimelist.net/" class="bt-price bt">Start eating well</a>
                </div>

                <div class="complete">
                    <p class="price-type">COMPLETE</p>
                    <p class="price-currency"><span class="currency">$</span>649</p>
                    <p class="rate">per month. That's just $11 per meal!</p>
                    <ul class="services-list">
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">2 meals per day</span>
                        </li>
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">Order 24/7</span>
                        </li>
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">Delivery is free</span>
                        </li>
                        <li class="services">
                            <ion-icon class="check" name="checkmark-outline"></ion-icon>
                            <span class="service">Get access to latest recipes</span>
                        </li>
                    </ul>
                    <a href="https://myanimelist.net/" class="bt-price bt">Start eating well</a>
                </div>
            </div>
            <p class="condition">Prices include all applicable taxes. You can cancel at any time.
                 Both plans include the following:</p>
            <div class="grid-4-cols">
                <div class="feature">
                    <ion-icon class="feature-icon" name="infinite-outline"></ion-icon>
                    <h4 class="feature-title">Never cook again!</h4>
                    <p class="feature-text">Our subscriptions cover 365 days per year,even including major holidays.</p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="nutrition-outline"></ion-icon>
                    <h4 class="feature-title">Local and organic</h4>
                    <p class="feature-text">Our cooks only use local, fresh, and organic products to prepare your meals.</p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="leaf-outline"></ion-icon>
                    <h4 class="feature-title">No waste</h4>
                    <p class="feature-text">All our partners only use reusable containers to package all your meals.</p>
                </div>
                <div class="feature">
                    <ion-icon class="feature-icon" name="pause-outline"></ion-icon>
                    <h4 class="feature-title">Pause anytime</h4>
                    <p class="feature-text">Going on vacation? Just pause your subscription, and we refund unused days.</p>
                </div>
            </div>
        </section>

        <section class="cta-sect">
            <div class="cta">
                <div class="cta-text-box">
                    <h2 class="header2">Get your first meal for free!</h2>
                    <p class="cta-text">Healthy, tasty and hassle free meals are waiting for you.
                        Start eating well today. You can cancel or pause anytime. And the first 
                        meal is on us!
                    </p>

                    <form class="cta-form" action="" id="omni_form" name="omni_form">
                        <div class="form-label">
                            <label for="full-name">Full Name</label>
                            <input type="text" id="full-name" name="full_name" placeholder="Iztihad Mustakim">
                            <span class="text-reset-icon" onclick="delete_the_values_of_this_field('full-name')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                <line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                            </span>
                        </div>
                        <div class="form-label">
                            <label for="email">Email address</label>
                            <input type="email" id="email" name="email" placeholder="izti@example.com">
                            <span class="text-reset-icon" onclick="delete_the_values_of_this_field('email')">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-delete"><path d="M21 4H8l-7 8 7 8h13a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2z"></path>
                                <line x1="18" y1="9" x2="12" y2="15"></line><line x1="12" y1="9" x2="18" y2="15"></line></svg>
                            </span>
                        </div>
                        <div class="form-label">
                            <label for="select-where">
                                Where did you hear from us?
                            </label>
                            <select id="select-where" name="select-where">
                                <option value="">Please choose one option:</option>
                                <option value="friends">Friends and Family</option>
                                <option value="youtube">Youtube Video</option>
                                <option value="podcast">Podcast</option>
                                <option value="others">others</option>
                            </select>
                        </div>
                        <div class="form-label">
                            <button class="sign-up-btn" type="button" id="sign_up" name="sign_up" onclick="receive_the_data_for_saving_in_database()">Sign up now</button>
                        </div>
                    </form>
                </div>
                <div class="cta-img-box" 
                rule="img"
                aria-label="saber eating">
                </div>
            </div>
        </section>

        <section class="footer-sect">
            <div class="grid-5-cols">
                <div class="footer-element">
                    <img class="logo" src="Images/pngwing.com.png" alt="">
                    <div class="social-media-icons">
                        <ion-icon name="logo-facebook"></ion-icon>
                        <ion-icon name="logo-instagram"></ion-icon>
                        <ion-icon name="logo-twitter"></ion-icon>
                    </div>
                    <p class="copyright">
                        Copyright &copy; 2027 by Omnifood,
                        Inc.<br> All rights reserved.
                    </p>

                </div>
                <div class="footer-element">
                    <span class="footer-title">Contact us</span>
                    <ul class="footer-list">
                        <li class="footer-option">
                            <address class="address">
                                John Doe<br>
                                1234 Elm Street<br>
                                Springfield, IL 62704<br>
                                USA<br>
                                <a class="email-id" href="mailto:johndoe@example.com">johndoe@example.com</a>
                            </address>
                        </li>
                    </ul>
                </div>
                <div class="footer-element">
                    <span class="footer-title">Account</span>
                    <ul class="footer-list">
                        <li class="footer-option">
                            <a href="#">Create account</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">Sign in</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">iOS app</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">Android app</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-element">
                    <span class="footer-title">Company</span>
                    <ul class="footer-list">
                        <li class="footer-option">
                            <a href="#">About Omnifood</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">For Business</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">Cooking partners</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-element">
                    <span class="footer-title">Resources</span>
                    <ul class="footer-list">
                        <li class="footer-option">
                            <a href="#">Recipe directory</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">Help center</a>
                        </li>
                        <li class="footer-option">
                            <a href="#">Privacy & terms</a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <?php include("../includes/alert_like_message_box_using_bootstrap_modal.php");?>

    </body>
</html>
