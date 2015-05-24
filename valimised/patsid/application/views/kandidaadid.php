<!DOCTYPE html>
<html>
      <head>        
		<meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        
        <link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../../media/mycss2.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
		<title>Patside E-valimised/kandidaadid</title>
		
    </head>
    <body>
    <script src="http://patsid.cs.ut.ee/media/demo3.js"></script>
 
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://patsid.cs.ut.ee/media/demo.js"></script>
        		<div class="page-header">
            <div class = "crop2">
                <h1>E-valimised <small>Veebirakenduste projekt</small></h1>
            </div>
            <div class="crop">
                <img src="../../media/LOHO.jpg" alt="LogoMissingBljat" >
            </div>
            
  			
		</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Patsid</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="http://patsid.cs.ut.ee/">Avaleht <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="http://patsid.cs.ut.ee/index.php/site/kandidaadid">Kandidaadid</a></li>
           <li><a href="http://patsid.cs.ut.ee/index.php/site/tulemused">Tulemused</a></li>
           <li><a href="http://patsid.cs.ut.ee/index.php/site/statistika">Statistika</a></li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a class="fb-login-button" data-max-rows="1" data-size="large" data-show-faces="false" data-auto-logout-link="true"></a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<p id="demo"></p>

	<button type="button" id = "aeg">Try it</button>

    <div id="lahtrid">
        <div id="lahtrid1">
                    <h2>Kandideeri</h2>
                    <form id="kandideeri" >
			         Nimi: <input readonly="readonly" id="n1" type="text" name="Nimi"><br>
			         Ringkonna number: <input type="text" name="Ringkond"><br>
			         Erakonna number: <input type="text" name="Erakond"><br>
                                                
                        <button id = 'kandideerinupp'>Kandideeri</button>
                    </form>
                    
                </div>
        <div id="lahtrid2">
                    <h2>Hääleta</h2>
                    <form id="haaleta" >
			         Nimi: <input readonly="readonly" id="n2" type="text" name="Nimi"><br>
			         Kandidaadi number: <input type="text" name="Kandidaat"><br>
			                                 
                        <button id = 'haaletanupp'>Haaleta</button>
                    </form>
               </div>
 	<div id="lahtrid3">
                    <h2>T&uuml;hista</h2>
                    <form id="tuhista" >
			         Nimi: <input readonly="readonly" id="n3" type="text" name="Nimi"><br>
			         			                                 
                        <button id = 'tuhistanupp'>T&uuml;hista h&auml;&auml;l</button>
                    </form>
                    
                </div>

        </div>
        <div id="Table">
            <h2>Kandidaatide tabel</h2> 
            <table border='1'>
            <tr>
                <th>Valimisnumber</th>
                <th>Nimi</th>		
                <th>Erakond</th>
                <th>Ringkond</th>
            </tr>    
            <?php
                foreach($results as $row){
                    echo "<tr>";
                    echo "<td>". $row->Id . "</td>";
                    echo "<td>". $row->Name . "</td>";
                    echo "<td>". $row->Erakond . "</td>";
                    echo "<td>". $row->Ringkond . "</td>";
                    echo "</tr>";
                    
                }
            
            ?>
            </table>
                    
        </div>
	<div id = "msgThankyou" class = "messagebox">

		<br/>

		Success!<br/>

	</div>
	<div id = "msgThankyou2" class = "messagebox">

		<br/>

		Failed!<br/>

	</div>

            

        
    
    </body>
    
</html>