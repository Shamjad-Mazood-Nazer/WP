<html>
    <head><title>Cricket Players</title></head>
    <body>
        <center>
            <h2 style="margin-top: 25px">Indian Cricket Players</h2>
            <p>Indian Cricket Players are listed in the below table.</p>
            <div style="padding-left: 50px; padding-right: 50px">
                <table border="1" cellspacing="5">
                    <thead>
                        <tr>	
                            <th>Sr. No.</th>
                            <th>Team Players</th>
                        </tr>
                    </thead>

                    <tbody style="text-align: center;">
                        <?php 
                        	$cricket_players_arr= array("Rohit Sharma","KL Rahul","Mayank Agarwal","Shikhar Dhawan","Ruturaj Gaikwad",
                        	"Shubman Gill","Devdutt Padikkal","Prithvi Shaw","Shreyas Iyer","Virat Kohli","Manish Pandey",
                        	"Cheteshwar Pujara","Ajinkya Rahane","Nitish Rana","Hanuma Vihari","Suryakumar Yadav");

                        	for ($i=0; $i < sizeof($cricket_players_arr); $i++) 
							{
                            	echo "<tr>";
                                
                                    $innerArray= $cricket_players_arr[$i];
                                    $sr= $i+1;
                                    echo "<td style='padding: 5px 20px'>".$sr."</td>";
                                    echo "<td style='padding: 5px 20px'>$innerArray</td>";
                            
                            	echo "</tr>";
                        	}
                        ?>
                    </tbody>

                </table>
            </div>
        </center>
    </body>
</html> 