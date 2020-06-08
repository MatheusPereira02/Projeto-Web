<html lang="pt-br">
    <head>
    <meta charset="utf-8">
    <title>Apostar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>



    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
    <img src="img/002.jpg" width="30" height="30" class="d-inline-block left-top">
    <h5 class="my-1 mr-md-auto ">QUICK APOSTAS</h5>
    </div>


    <div class="text-left">
    <div class="wpb_wrapper">
    <div class="wpb_widgetised_column wpb_content_element">
    <div class="wpb_wrapper q2w3-fixed-widget-container" style="height: 0px;">
    <div id="custom_html-14"><div class="textwidget custom-html-widget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 300x600 WP Definitivo -->
    <ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 600px;" data-ad-client="ca-pub-2221198866742417" data-ad-slot="1449795774"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script></div></div><div id="custom_html-13" ><div class="textwidget custom-html-widget"><a href="https://www.hostgator.com.br/25122-128-1-714.html"><img style="border:0px" src="https://afiliados.hostgator.com.br/media/banners/br-hospedagem-wordpress-desconto-300x600 2.png" width="300" height="600" alt=""></a></div></div>
    </div>
    </div>
    </div>
    </div>

    <div class="text-right">    
    <div class="wpb_wrapper">
    <div class="wpb_widgetised_column wpb_content_element">
    <div class="wpb_wrapper q2w3-fixed-widget-container" style="height: 0px;">
    <div id="custom_html-14"><div class="textwidget custom-html-widget"><script async="" src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- 300x600 WP Definitivo -->
    <ins class="adsbygoogle" style="display: inline-block; width: 300px; height: 600px;" data-ad-client="ca-pub-2221198866742417" data-ad-slot="1449795774"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script></div></div><div id="custom_html-13" ><div class="textwidget custom-html-widget"><a href="https://www.hostgator.com.br/25122-128-1-714.html"><img style="border:0px" src="https://afiliados.hostgator.com.br/media/banners/br-hospedagem-wordpress-desconto-300x600 2.png" width="300" height="600" alt=""></a></div></div>
    </div>
    </div>
    </div>
    </div>
    

    <?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
            unset($_SESSION['msg']);
		}
		?>

  <div class="ui container" style="margin-top: 60px;margin-bottom: 60px;">
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
    <div class="ui large header"> <p class="font-weight-bolder">Registrar uma aposta
    </br>Preencha os campos com os resultados desejados e a quantidade de apostas</p>
    </div>
    </div>
    </br>
    <form method="POST" action="processaaposta.php">
        
        <div class="card">
            <p align="center">
            FLUMINENSE<img src="img/fluminense.jpg" width="160" height="100"><img src="img/botafogo.jpg" width="180" height="100">BOTAFOGO</br>
            
			<input type="number" name="timedacasa">
			<input type="number" name="timedefora">
             </p></br>
           
                   
             <div class="column" style="display: flex;  justify-content: center;">
                    <div class="card">
                    <label>Nome:</label>
            <input type="text" name="nome">
                    
                    <p align="center">APOSTAR</p>
		   <input name="numero" id="numero" onblur="multiplica()"><p align="center"> x R$ 10,00<br><br>
           TOTAL:R$<input name="total" readonly id="total"></span></br>


           <div style="text-align: center; "></br>
           <input type="submit" value="Registrar Aposta" class="btn btn-success btn-sm active">
           </div>
    </form>

  
    
        <script type="text/javascript">
        function id(valor_campo)
        {
	return document.getElementById(valor_campo);
        }
    function getValor(valor_campo)
    {
	var valor = document.getElementById(valor_campo).value.replace( ',', '.');
	return parseFloat( valor ) * 1;
    }

    function multiplica()
    {
	var total = getValor('numero');
	id('total').value = total*10;
    }
    </script>

</div>
</body>
</html>