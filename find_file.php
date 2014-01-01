<!DOCTYPE>
<html>
    <head>
        <title>WHO</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
        <!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
        <link rel="shortcut icon" href="css/images/favicon.ico" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
        <script type="text/javascript" src="js/func.js"></script>
        <script src="js/jquery_chained.js"></script>
        <script type="text/javascript">
function open_pdf2_a()
{
window.open("Full Resolution with Text/66.10.pdf","_blank");
}
function open_pdf2_b()
{
window.open("Full Resolution with Text/66.8.pdf","_blank");
}
function open_pdf7_a()
{
window.open("Full Resolution with Text/66.6.pdf","_blank");
}
function open_pdf7_b()
{
window.open("Full Resolution with Text/66.7.pdf","_blank");
}
function open_pdf4_a()
{
window.open("Full Resolution with Text/66.11.pdf","_blank");
}
function open_pdf4_b()
{
window.open("Full Resolution with Text/66.20.pdf","_blank");
}
</script>
        </head>
    <body>
        <div class="shell">
            <div class="border" >
                <div id="header">
                    <h1 id="logo"><a href="WHO Resolutions" class="notext">WHO Resolutions</a></h1>
                    <!--
                    <div class="socials right">
                        <ul>
                            <li><a href="#" class="rss">RSS</a></li>
                            <li><a href="#" class="fb">Facebook</a></li>
                            <li class="last"><a href="#" class="twit">Twitter</a></li>
                        </ul>
                    </div>
                    -->
                    <div class="cl">&nbsp;</div>
                </div>
<!--                <div id="navigation">
                    <ul>
                        <li><a href="index.html" class="active">Home</a></li>
                        <li>
                            <select id="mark" name="mark" class="top-menu">
                                <option value="">Types of Meeting</option>
                                <option value="WHA">WHA</option>
                                
                                <option value="audi">Audi</option>
                                
                            </select>                       
                        </li>
                        <li>
                            <select id="series" name="series" class="top-menu">
                                <option value="">Year</option>
                                <option value="2012" class="WHA">2012</option>
                                <option value="2013" class="WHA">2013</option>
                                
                                <option value="series-6" class="bmw">6 series</option>
                                <option value="a3" class="audi">A3</option>
                                <option value="a4" class="audi">A4</option>
                                <option value="a5" class="audi">A5</option>
                                

                            </select>
                        </li>
                        <li>
                            <select id="model" name="model" class="top-menu">
                                <option value="">Area</option>
                                <option value="Technical/ CA" class="2012 a5">Technical/ CA</option>
                                <option value="Administrative/CB" class="2012 a5">Administrative/CB</option>
                                <option value="Technical/ CA" class="2013 a3 a5">Technical/ CA</option>                               
                                <option value="Administrative/CB" class="2013 a3 a5">Administrative/CB</option>
                                <option value="sedan" class="series-3 series-5 a3 a4">Sedan</option>
                                <option value="sportback" class="a3 a5">Sportback</option>
                                
                            </select>
                        </li>
                        <li>
                           <select id="engine" name="engine" class="top-menu" onchange="showMe(this.value);" >
                                <option value="">Types of Resolution</option>
                                <option value="1" class="2013 series-5 series-6 a3 a4 a5">Communicable Disease</option>
                                <option value="2" class="2013 series-5 series-6 a3 a4 a5">Non-Communicable Disease</option>
                                <option value="3" class="2013 series-5 series-6 a3 a4 a5">Life-Course Health/ Family and Community Health</option>
                                <option value="4" class="2013 series-5 series-6 a3 a4 a5">Health And Environment</option>
                                <option value="5" class="2013 series-5 series-6 a3 a4 a5">Health System</option>
                                <option value="6" class="2013 series-5 series-6 a3 a4 a5">Resource Mobilization and Partnarship</option>
                                <option value="7" class="2013 series-5 series-6 a3 a4 a5">WHO Administration</option>
                                
                            </select>
                        </li>
                        
                        <li><a href="#">Contact</a></li>
                      </ul>-->
                    <div class="cl">&nbsp;</div>
                <div >&nbsp;<img src="css/images/border.gif"><br>
                &nbsp;<a href="index.html" class="active">Home</a>
                </div></br>         
    
<?php

$engine=$_GET['engine'];

if($engine=='2'){
?>
<div style="margin-left=100px;padding-left:10px" visibility="visible" ><span><h3>Non-Communicable Disease</h3></span> 
<!--         <a href="">Document A66/6.</a> <br>-->
1. <a href = '#' onclick="open_pdf2_a()">"Document A66/10 Rev.1 Annex 6  "
</a><br>    
2. <a href = '#' onclick="open_pdf2_b()"> "Annex 6 Annex 4 Document A66/8, Document A66/9 and Document A66/9 Corr.1
 United Nations General Assembly resolution 66/2 <br>United Nations General Assembly resolution 66/288"
</a><br>  
3. <a href = '#' > Document A66/33 Document A66/57</a><br>
        
</div>
<?}

if($engine=='4') {?>

    <div style="margin-left=100px; padding-left:10px" visibility="visible" > <span><h3>Health And Environment</h3></span>
<!--         <a href="">Document A66/6.</a> <br>-->
1. <a href = '#' onclick="open_pdf4_a()"> "Annex 6 Document A66/11.Annex 2."
</a><br>    
2. <a href = '#' >Document A66/47 </a><br>  
3. <a href = '#' onclick="open_pdf4_b()">"Annex 6 Document A66/20" </a><br>  

        
</div>
    
 <?php   
}
if($engine=='7'){
?>
<div style="margin-left=100px; padding-left:10px" visibility="visible" > <span><h3>WHO Administration</h3></span>
<!--         <a href="">Document A66/6.</a> <br>-->
1. <a href = '#' onclick="open_pdf7_a()">Document A66/6.</a><br>    
2. <a href = '#' onclick="open_pdf7_b()"> Document A66/7</a><br>  
3. <a href = '#' > Document A66/33 Document A66/57</a><br>
        
</div>
<?} ?></div>
  </p>      
    </body>
   </html>
