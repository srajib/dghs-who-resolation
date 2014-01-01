
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>WHO Resolation</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/jquery.jcarousel.css" type="text/css" media="all" />
        <!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
        <link rel="shortcut icon" href="css/images/favicon.ico" />
        <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.jcarousel.pack.js"></script>
        <script type="text/javascript" src="js/func.js"></script>
        <script src="js/jquery_chained.js"></script>
        <script type='text/javascript'>
        function showMe(str)
        {
        document.getElementById('myDiv').innerHTML =+str;
        }      
            </script>
    </head>
    <body>
        <div class="shell">
            <div class="border">
                <div id="header">
                    <h3 id="logo"><a href="WHO Resolutions" class="notext">WHO Resolutions</a></h3>
                    
                    <div class="cl">&nbsp;</div>
                </div>
                <div id="navigation">
                    <form method="post" action="find_file.php" name="form1" >
                    <ul>
                        <li style="width: 80px"><a href="#" class="active">Home</a></li>
                        <li>
                            <select id="mark" name="mark" class="top-menu">
                                <option value="">Types of Meeting</option>
                                <option value="WHA">WHA</option>
                            </select>                       
                        </li>
                        <li style="width: 130px;">
                            <select id="series" name="series" class="top-menu" style="width: 125px;">
                                <option value="">Year</option>
                                <option value="2012" class="WHA">2012</option>
                                <option value="2013" class="WHA">2013</option>

                            </select>
                        </li>
                        <li>
                             <select id="engine" name="engine" class="top-menu" onchange="showMe(this.value);" >
                                <option value="">Types of Resolution</option>
                                <option value="Technical/ CA" class="2013 a3 a5">Technical/ CA</option>
                                <option value="Administrative/CB" class="2013 a3 a5">Administrative/CB</option>
                                
                                              
                            </select>
                            
                        </li>
                        <li style="width: 165px;">
                            <select id="model" name="model" class="top-menu" style="width: 160px;">
                                <option value="">Area</option>
                                <option value="1" class="2013 series-5 series-6 a3 a4 a5">Communicable Disease</option>
                                <option value="2" class="2013 series-5 series-6 a3 a4 a5">Non-Communicable Disease</option>
                                <option value="3" class="2013 series-5 series-6 a3 a4 a5">Life-Course Health/ Family and Community Health</option>
                                <option value="4" class="2013 series-5 series-6 a3 a4 a5">Health And Environment</option>
                                <option value="5" class="2013 series-5 series-6 a3 a4 a5">Health System</option>
                                <option value="6" class="2013 series-5 series-6 a3 a4 a5">Resource Mobilization and Partnarship</option>
                                <option value="7" class="2013 series-5 series-6 a3 a4 a5">WHO Administration</option>
                                
                               
                            </select>
                        </li>
                        
                         <li style="width: 135px;"><a hef="#"> full text</a>                     
                           
                             
                                 <li>A
                                 <ul><li>A1</li></ul></li>
                                   <li>B</li>
                             
                             
							
                        </li>
                        
                       <!-- <li><a href="#">Contact</a></li>-->
                      <li style="width: 150px;">  <div align="center" style="margin-top:10px;">
                              <a href="#"onclick="document.location.href='find_file.php?engine='+document.getElementById('myDiv').innerHTML"><button type="button" name="button" value="Search">&nbsp;&nbsp;Search&nbsp;&nbsp;</button></a>
                          </div> </li> 
                      
                    </ul>  </form>
                    
                    <div align="right" style="padding-right:15px"> <a href="all_document.php">See All Type of Resolutions </a>
                          </div> 
                   <div class="cl">&nbsp;</div>
                </div>
                <div align="center" style="margin-top:20px;">
                     
                                                                
                             
                   
                </div>
                <div id="main">
                    <div id="content w" class="left">
                        <div class="welcome n">
                            <h3>Welcome Note</h3>
                            
                            <p>A United Nations General Assembly Resolution is voted on by all member states of the United Nations in the General Assembly.

General Assembly resolutions usually require a simple majority (50 percent of all votes plus one) to pass. However, if the General Assembly determines that the issue is an "important question" by a simple majority vote, then a two-thirds majority is required; "important questions" are those that deal significantly with maintenance of international peace and security, admission of new members to the United Nations, suspension of the rights and privileges of membership, expulsion of members, operation of the trusteeship system, or budgetary questions.</p>
                             </div>
                        
                    <div class="cl">&nbsp;</div>
                </div>
                <div class="shadow-l"></div>
                <div class="shadow-r"></div>
                <div class="shadow-b"></div>
            </div>
            <!--
            <div id="footer">
                <p class="left">Copyright &copy; 2010, Your Company Here, All Rights Reserved</p>
                <p class="right"><a href="http://www.free-css.com/">Free CSS Templates</a> by <a href="http://chocotemplates.com">Chocotemplates.com</a></p>
                <div class="cl"></div>
            </div>
            -->
        </div>
            <div id="myDiv"> </div>
       
    </body>
    <script>
        $("#series").chained("#mark");
        $("#model").chained("#series");
        $("#engine").chained("#series, #model");
    </script>
</html>
 