<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Display</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
        text-align: center;

}
.product-display {
    text-align: center;
}
.product-box {
    display: inline-block;
    width: 310px;
    height: 430px;
    padding: 16px;
    margin: 12px;
    border: 2px solid #2b84d77f;
    background-color: #f0ecec;
    border-radius: 12px;
   
}

.product-box h3 {
    font-size: 1em;
    font-weight: bold;
    color: goldenrod;
    text-align: left;

}

.product-box h2 {
    font-size: 1.2em;
    margin: 8px 0;
}

.product-box a {
    display: inline-block;
    margin-top: 8px;
    color: #fff;
    background: #4a90e2;
    padding: 6px 16px;
    font-weight: bold;
}

</style>


<body>
    <h1>Packages</h1>
    <div class="product-display">
        <h2>Wedding</h2>
        <div class="product-box">
            
            <img src="/webtech/project/project_pic/package-wedding.jpg" width="310" height="200" alt="Wedding picture">
            <h3>Wedding Exclusive</h3>
            <p>A beautiful wedding setup with essential decoration and coordination.
                Includes basic stage design, lighting, and guest management.</p>
            <p>$200</p>
            <a href="../View/login.php">
                Book Now
            </a>

        </div>
        <div class="product-box">
            
            <img src="/webtech/project/project_pic/signin.avif" width="310" height="200" alt="Wedding picture">
            <h3>Wedding Signature</h3>
            <p>Designed for couples who want a personalized and memorable celebration.
                Includes themed decoration, sound system, and event coordination.</p>
            <p>$300</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
       <div class="product-box">
            
            <img src="/webtech/project/project_pic/wedding.jpg" width="310" height="200" alt="Wedding picture">
            <h3>Wedding Premium</h3>
            <p>A luxury wedding experience with high-end decoration and planning.
                Includes premium décor, professional lighting, and full event management.</p>
            <p>$400</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>


        <h2>Birthday</h2>
          <div class="product-box">
            
            <img src="/webtech/project/project_pic/package-birthday.jpg" width="310" height="200" alt="Birthday picture">
            <h3>Birthday Exclusive</h3>
            <p>Suitable for simple parties with creative decoration and arrangements.
                Includes basic theme décor, balloons, and music support.</p>
            <p>$200</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
       <div class="product-box">
            
            <img src="/webtech/project/project_pic/package-party.jpg" width="310" height="200" alt="Birthday picture">
            <h3>Birthday Signature</h3>
            <p>Perfect for making birthdays special and memorable for all ages.
                Includes themed decoration, sound system, and activity coordination.</p>
            <p>$300</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
        <div class="product-box">
            
            <img src="/webtech/project/project_pic/birth.jpg" width="310" height="200" alt="Birthday picture">
            <h3>Birthday Premium</h3>
            <p>Best for special milestones and large guest gatherings.
                Includes luxury décor, professional lighting, and complete event handling.</p>
            <p>$400</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
        


        <h2>Conference</h2>
          <div class="product-box">
            
            <img src="/webtech/project/project_pic/con3.webp" width="310" height="200" alt="Conference picture">
            <h3>Conference Exclusive</h3>
            <p>Ideal for meetings, seminars, and small corporate events.
                Includes seating arrangement, projector setup, and sound support.</p>
            <p>$200</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
         <div class="product-box">
            
            <img src="/webtech/project/project_pic/con1.jpeg" width="310" height="200" alt="Conference picture">
            <h3>Conference Signature</h3>
            <p>Designed for corporate events, workshops, and formal gatherings.
                Includes stage setup, branding support, and audio-visual equipment.</p>
            <p>$300</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
        <div class="product-box">
            
            <img src="/webtech/project/project_pic/con2.jpg" width="310" height="200" alt="Seminar picture">
            <h3>Conference Premium</h3>
            <p>Best for large corporate events and important business meetings.
                Includes premium seating, advanced AV systems, and full event coordination.</p>
            <p>$400</p>
            <a href="../View/login.php">
                Book Now
            </a>
        </div>
       

    </div>
     <footer>
        &copy; 2025 Online Store. All rights reserved.
    </footer>
</body>
</html>
