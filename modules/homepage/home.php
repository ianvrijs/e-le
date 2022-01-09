<?php
$sHtml = '';

$sHtml = '
<div class="homepageCont">
    <h1>e-Learning, the best place to learn!</h1>
    <p>With e-learning you\'ll be able to learn at twice the speed of learning from books!</p>
    <a href="index.php?module=homepage#info"<button class="btnNormal">More information</button></a>
    <a href="index.php?module=learn"><button class="btnAction">Start learning!</button></a>
</div>
    <img src="https://template59199.motopreview.com/mt-demo/59100/59199/mt-content/uploads/2016/10/mt-0607-home-mg1.png">

<div class="features" id="info">
    <h1>Why you should pick us</h1>
    <p>a few key points of why learning with us works well!</p>
        <div class="item">
            <i class="fa fa-html5"></i>
            <h3>HTML5 specialist</h3>
            <p>Learn the number #1 markup language!</p>
        </div>
            <div class="item">
            <i class="fa fa-html5"></i>
            <h3>HTML5 specialist</h3>
            <p>Learn the number #1 markup language!</p>
        </div>
            <div class="item">
            <i class="fa fa-html5"></i>
            <h3>HTML5 specialist</h3>
            <p>Learn the number #1 markup language!</p>
        </div>
        <div class="item">
            <i class="fa fa-html5"></i>
            <h3>HTML5 specialist</h3>
            <p>Learn the number #1 markup language!</p>
        </div>
</div>
    <div class="parallax"></div>

<div class="contact" id="contact">
    <h1>Contact us.</h1>
    <p>We\'ll respond quickly.. I promise.</p>

        <form action="index.php?module=contact" method="post">
            <input type="text" name="name"placeholder="Your name*" required>
            <input type="email" name="email"placeholder="Your email address*" required><br />
            <textarea placeholder="Your message*" rows="4" cols="44" style="resize: none; margin-top: 14px;"></textarea><br />
            <input type="submit" class="btnAction" value="Send message">
        </form>
</div>



';
return $sHtml;
?>
