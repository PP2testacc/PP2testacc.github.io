<?php

    session_start();
    include("dblogin.php"); 
   
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobile Computing</title>

        <!-- CSS & CUSTOM FONTS -->
        <link href="../css/style.css" rel="stylesheet" />

    </head>

    <body>

        <?php
    
    $query = "SELECT * FROM abstracts";  
    $result = mysqli_query($conn, $query);  
    
      echo'<div class="test-output-container">';
      while($row = mysqli_fetch_array($result)){  
           
          echo $row['SenderName'].'<br>'; 
          echo $row['SenderOrganization'].'<br>'; 
          echo $row['SenderEmail'].'<br>'; 
          echo $row['SenderPaperTitle'].'<br>';
          echo '<br>';
          echo 'Abstract:'.'<br>';
          $abstract = htmlspecialchars($row['SenderAbstract']);
          //$abstract = preg_replace('/\$(\w.+)\$/', '\($1\)', $abstract);
          echo '<p class="test-output">'. $abstract .'</p>';
          echo '<br>';
      }  
        echo '</div>';
    
    ?>



            <!--<p>We denote $$f^{\{ac \vee pr\}}_{\{u \vee p\}}(s_i,t_j)$$ to be represent a function that calculates normalized values between [0-100\%] that indicate the actual ($$ac$$) or predicted ($$pr$$) satisfaction level of $$u$$'s or $$p$$'s at time instance $$t_j$$ for factor $$s_i$$. Also, for each $$s_i$$ there exists a different weight $$w$$ that is different for each $$t_j$$ and represented as $$w_{\{u \vee p\}}(s_i,t_j)$$. Based on the above, $$u$$'s and $$p$$'s, actual and predicted QoI's, denoted as $$q^{\{ac \vee pr\}}_{\{u \vee p\}}(t_i)$$ at a time instance $$t_i$$ are calculated as follows: \begin{equation} q^{type}_{target}(t_j)=\sum_{\forall s_j} f^{type}_{target}(s_i,t_j) \times w_{target}(s_i,t_j) \end{equation} where $$type$$ is either actual ($$ac$$) or predicted ($$pr$$) and, $$target$$ is either user $$u$$ or provider $$p$$.</p>-->
            <!-- JAVASCRIPT -->
            <script src="../js/jquery-3.2.1.min.js"></script>
            <script type="text/javascript" async src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.2/MathJax.js?config=TeX-MML-AM_CHTML">
                MathJax.Hub.Config({
                    tex2jax: {
                        inlineMath: [
                            ['$', '$'],
                            ["\\(", "\\)"]
                        ],
                        displayMath: [
                            ['\\\\[', '\\\\]'],
                            ["\\[", "\\]"]
                        ],
                        processEscapes: true
                    }
                });
                MathJax.Hub.Startup.onload();

            </script>

    </body>

    </html>
