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
		<title>Patside E-valimised/tulemused</title>
		
    </head>
    <body>
        <div id="fb-root"></div>
<script src="http://patsid.cs.ut.ee/media/demo3.js"></script>
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
        <li class="active"><a href="http://patsid.cs.ut.ee/">Avaleht <span class="sr-only">(current)</span></a></li>
        <li><a href="http://patsid.cs.ut.ee/index.php/site/kandidaadid">Kandidaadid</a></li>
           <li><a href="http://patsid.cs.ut.ee/index.php/site/tulemused">Tulemused</a></li>
           <li><a href="http://patsid.cs.ut.ee/index.php/site/statistika">Statistika</a></li>

      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <li><a class="fb-login-button" data-max-rows="1" data-size="xlarge" data-show-faces="false" data-auto-logout-link="true"></a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
				
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<script src="http://patsid.cs.ut.ee/media/demo2.js"></script>
        <button type="button" id = "aeg">Uuenda andmeid</button>
        <h2>Tulemuste tabel *HYPE*</h2>
	<div id="Table">
             
            <table border='1'>
            <tr>
                <th>Valimisnumber</th>
                <th>Nimi</th>		
                <th>Erakond</th>
                <th>Ringkond</th>
                <th>Haali</th>
            </tr>    
            <?php
                foreach($results as $row){
                    echo "<tr>";
                    echo "<td>". $row->Valik . "</td>";
                    echo "<td>". $row->Name . "</td>";
                    echo "<td>". $row->Erakond . "</td>";
                    echo "<td>". $row->Ringkond . "</td>";
                    echo "<td>". $row->Haali . "</td>";
                    echo "</tr>";
                    
                }
            
            ?>
            </table>
                    
        </div>
	<h3>Viimati uuendati:</h3>
        <div id="Table4">
             <h2> </h2>
                    </div>
    </body>
    
</html>