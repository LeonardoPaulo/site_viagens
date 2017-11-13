<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html, charset=utf-8" />
    <title>Cadastro de viagens</title>
    <link href="estilos/style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Vollkorn+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Vollkorn+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded" rel="stylesheet">
  </head>

  <body>
    <fieldset id="fieldset1">
 		 <table>
 			<tr>
 			  <td>
 					<p id="p5">NOMADIC</p>
 				</td>
 				<td align="left">
 					<p id="p1">Come live the world with us!!!</p>
 				</td>
 			</tr>
 		 </table>
 	  </fieldset>

<table id="tb1">
	<tr>
		<td>
      <form action="checks_data.php" method="POST">
        <fieldset>
          <table  id="tb1">
 	          <p id="p6">Create your next travel: </p>
            <div>
              <label for="name">Name: </label>
              <input type="text" name="name" required />
            </div>
            <br>
            <div>
              <label for="telephone">Telephone: </label>
              <input type="text" name="telephone" minlength="11" maxlength="11" pattern="([0-9]{11})" required />
            </div>
            <br>
            <div>
              <label for="origin">Origin: </label>
              <input type="text" name="origin" required />
            </div>
            <br>
            <div>
              <label for="destination">Destination: </label>
              <input type="text" name="destination" required />
            </div>
            <br>
            <div>
              <label for="date_from">Date from: </label>
              <input type="date" name="date_from" required />
            </div>
            <br>
            <div>
              <label for="date_to">Date to: </label>
              <input type="date" name="date_to" required />
            </div>
            <br>
            <div>
              <label for="travelers_number">Travelers number: </label>
              <input type="number" name="travelers_number" required />
            </div>
            <br>
            <div class="button">
              <button type="submit">Sumbit</button>
            </div>
          </table>
        </fieldset>
      </form>
    </td>
    <td align="left">
      <fieldset id="fieldset2">
	     <p id="p2" style="text-align: justify;"><br><br><br><br><b>About NOMADIC</b><br><br>
	     Nomadic is a young company that delivers quality experiences to its customers. We are dynamic and always willing to help. Enjoy your trip with no worries, we take care of everything. We have several plans, from economic to first class. Find your perfect trip and count on us to make this experience unforgettable!!!</p>
      </fieldset>
    </td>
  </tr>
</table>
    <fieldset id="fieldset3">
 	    <table cellpadding="10">
        <tr>
 			    <td>
 				     <p id="p3">NOMADIC</p>
 			    </td>
 			    <td align="left">
 				     <p id="p4">contact@trevela.com | +55 (35) 3621 4551</p>
          </td>
        </tr>
      </table>
    </fieldset>
    <background="imagens/fundo.jpg" bgproperties="fixed">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  </body>
</html>