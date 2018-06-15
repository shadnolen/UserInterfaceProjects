 <script>
        var links = ["http://www.abc.com","http://www.def.com"];
        var images = ["images/eye1.png","images/eye2.png"];
        var i = 0;
        var renew = setInterval(function(){
            if(links.length == i){
                i = 0;
            }
            else {
            document.getElementById("bannerImage").src = images[i]; 
            document.getElementById("bannerLink").href = links[i]; 
            i++;

        }
        },2200);
        </script>


 <script>
        var links = ["http://www.abc.com","http://www.def.com"];
        var images = ["images/eye2.png","images/eye2a.png"];
        var i = 0;
        var renew = setInterval(function(){
            if(links.length == i){
                i = 0;
            }
            else {
            document.getElementById("bannerImage").src = images[i]; 
            document.getElementById("bannerLink").href = links[i]; 
            i++;

        }
        },2000);
        </script>



<a id="bannerLink" href="http://www.abc.com" onclick="void window.open(this.href); return false;">
<img id="bannerImage" src="images/side1.png" width="120" height="83" alt="ShadTheJavaSlayer">
</a>
<footer>  
        <h1 style="text-align: center;">ISLAND ESSENTIALS</h1>
        <h2 style="text-align: center;">ALL YOU NEED TO KNOW TO BE WELL EQUIPPED FOR YOUR ISLAND ADVENTURE</h2>
          <ul class="menuf">
            <h2>Lodging</h2>
            <li><a href ="hotel.php">Hotel Deals</a> </li>
             <li><a href ="villa.php">Villas</a> </li> 
            <li><a href ="bb.php">B&amp;B</a> </li>
            <li><a href ="guest.php">Guesthouses</a> </li>
            <li><a href ="faq.php">Being Safe</a> </li>          
        </ul>
        
         <ul class="menuf">
             <h2>Best of the Island</h2>
             <li><a href ="island.php">Experiences</a> </li>
             <li><a href ="events.php">Events</a> </li>
             <li><a href ="night.php">Nightlife</a> </li>           
        </ul>
     
          <ul class="menuf">
             <h2 style="margin-left: 12%;">Locations</h2>
          <li class = "botli"><a href="local.php">Area 1</a></li>
          <li class = "botli"><a href="tlocal.php">Area 2</a></li>
          <li class = "botli"><a href="local.php">Area 3</a></li>         
        </ul>
        
       
         <ul class="menuf">
             <h2 style="margin-left: 8%;">Fun on the Island</h2>
          <li class = "botli"><a href = "tours.php">Adventures</a></li>
          <li class = "botli"><a href = "beach.php">Beaches</a></li>
          <li class = "botli"><a href = "golf.php">Golfing</a></li>
          <li class = "botli"><a href = "island.php">Island Culture</a></li>         
        </ul>
     
        
          <ul class="menuf">
             <h2 style="margin-left: 1%;">Traveling &amp; FAQ</h2>
          <li class = "botli"><a href = "trans.php">Getting Here</a></li>
          <li class = "botli"><a href = "trans.php">Local Travel</a></li>
          <li class = "botli"><a href = "bank.php">Currency &amp; Banking</a></li>
              <li class = "botli"><a href = "gov2.php">Getting Married</a></li>
              
          </ul> 
  
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
   
    <footer>
    <!---- end footer ---->

</html>