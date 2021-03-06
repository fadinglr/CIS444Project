<?php
    session_start();
?>
<!--Home Page-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage: The Tackle Box</title>
  <link rel="stylesheet" type="text/css" href="../Universal/style.css" />
  <link rel="stylesheet" type="text/css" href="Homepage.css" />
  <!-- <script type="text/javascript" src="../Universal/function.js"> </script> -->
</head>


<body>
  <!--Container separates body from footer-->
  <div class="main-container">
  <h1 class ="companyName">The Tackle Box</h1>
    <!-- <script>
      document.write(setUpMenu());
      document.write(setUpSideNav());
    </script> -->

    <?php
        include_once '../Universal/function.php';
    ?>

  <div class="content-container">
  <h2 style="text-align: center;">Welcome to The Tackle Box</h2>
  <p>We are happy to announce this new social site for fishermen/women and fishing-enthusiasts from all around. The Tackle Box is a social community where anglers can brag about their latest catch through image posting. It is our goal that those with an abundance of fishing experience will be able to help stir a passion in those interested in fishing. To become part of this helpful community, sign up now.</p>
  <!--Pictures div begin here-->
<div class="row">
  <figure class="item">
    <img src="images/fishingfriends4.jpg" alt="2 Friends fishing Pic 1">
    <figcaption>Starters that love fishing!</figcaption>
  </figure>
  <figure class="item">
    <img src="images/fishingfriends3.jpg" alt="2 Friends fishing Pic 2">
    <figcaption>A website to improve fishing techniques!</figcaption>
  </figure>
  <figure class="item">
    <img src="images/fishingfriends.jpg" alt="2 Friends fishing Pic 3">
    <figcaption>With moments that fishermen love!</figcaption>
  </figure>
</div>
<!--Picure div ends here-->
<br><br>
<p class="intro2">Our site hosts a few features for your convenience:</p>
<br><br>
<h2 style="text-align: center;">Share your fishing achievements and progress!</h2>
<br>

<!--Div container for the 4 step process-->
<div class="grid-container">
  <div class="item1">1. Sign up!</div>
  <div class="item2">2. Post Your Catch</div>
  <div class="item3">3. Compare</div>  
  <div class="item4">4. Go Fishing!</div>
</div>
<!--end of Div container for the 4 step process-->
 <br><br><br>
 
<h2>Upload pictures here:</h2>

<br><br><br><br><br><br><br><br>
<br><br><br><br><br>


  </div>
</div>
<!-- <script>
  document.write(setUpFooter());
</script> -->
<?php
    include_once '../Universal/footer.php';
?>
</body>
</html>
