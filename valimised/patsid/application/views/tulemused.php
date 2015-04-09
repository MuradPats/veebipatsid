<!DOCTYPE html>
<html>
      <head>
        
		<meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../../media/mycss.css">
		<title>Patside E-valimised/tulemused</title>
		
    </head>
    <body>
        		<div id="divisionk">
                    <h1>Tulemused</h1>
                   <ul class id="menu">
                    
					<li><a href="http://patsid.cs.ut.ee/" class="button">Avaleht</a></li>
					<li><a href="http://patsid.cs.ut.ee/index.php/site/kandidaadid" class="button">Kandidaadid</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/tulemused" class="button">Tulemused</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/statistika" class="button">Statistika</a></li>
                    <li><a href="http://patsid.cs.ut.ee/index.php/site/login" class="button">Logi sisse</a></li>
				
				</ul>
        <div id="Table">
            <h2>Tulemuste tabel *HYPE*</h2> 
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
            </div>
                    </div>
    </body>
    
</html>