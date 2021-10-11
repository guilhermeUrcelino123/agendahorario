<?php
include('connectaDb.php');

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AgendaBarber</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <script src="functions.js"></script>
    <script src="variables.js"></script>
    
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        AgendaBarber
      </h1>
      <p class="subtitle">
        Agende o horario do seu corte!
      </p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      
    <h2 class="title ">Selecione o dia</h2>
    <p class="subtitle">
        Clique no dia do seu corte
      </p>





    <table class="table is-bordered is-striped is-fullwidth">
    <thead>
        <label class="subtitle">
        <script>            
            document.write(month_of_year[month]);
            
        </script>
        </label>
        
                
            
  
        <tr>
        <script>
            call = '';
            for(index=0; index < 7; index++){
                call += '<th>'+day_of_week[index]+'</th>';
            }
            document.write(call);
            
        </script>


        </tr>
    </thead>

    <script>
        call2 = "";
        day = 0;
        contDay = 0;

        


        for(i = 0; i<=5; i++){
            call2 += '<tr>';
            for(j = 0; j<7; j++){
                contDay++;                              
                
                if(contDay > firstday && day< 31 ){              
                    day ++;  
                    
                        call2 += '<td class="cell" id="'+day+' " onclick="teste(this)"  >'+day+'</td>';
                    
                }else{
                    call2 += '<td class="cell"  ></td>';
                }
                
            }
            
            call2 += '</tr>';
            

        }
        document.write(call2);
    </script>
    


  
    
  </tbody>
</table>






    </div>
  </section>

  <section class="section">
    <div class="container">
      

    <h2 class="title ">Selecione o Horario</h2>
    <p class="subtitle">
        Clique em agendar para marcar seu corte 
    </p>

    



    <table class="table is-bordered is-striped ">
    <thead>
        <tr>
            <th>Horario</th>
            <Script>                
                call3 = '<th id="valorDataSelecionada">'+dayMark+'/'+(month+1)+' Hoje</th> ';
                document.write(call3);
            </Script> 

           
            

        </tr>
    </thead>
  
    <script>
            call ='';
            for(var i=9; i<=18; i++){
                call += "<tr> <td>"+i+":00</td><td><button class='button is-success is-fullwidth'>Agendar</button></td> </tr>"
            }
            document.write(call);
        </script>
    
   
    
  </tbody>
</table>






    </div>
  </section>


  <section class="section">
    <div class="container">

        <div class="card" style="max-width:500px;">
            <div class="card-content">
                <form>
                <h2 id="agendamento" class="title ">Agendamento</h2>
                <hr/>
                <p class="subtitle">
                Para validar seu agendamento insira seu nome e email ou numero de telefone.
                
                </p>
                <label class="label">Nome</label>
                <div class="control">
                    <input class="input" required type="text" >
                </div>
                </br>
                <label class="label">Telefone ou Email</label>
                <div class="control">
                    <input class="input" required type="text" >
                </div>
                </br>
                <div class="field is-grouped">

                <div class="control">
                    <button class="button is-success is-light">Voltar</button>
                </div>
                <div class="control">
                    <button type="submit"class="button is-success">Agendar</button>
                </div>
                </div>
                </form>  
            </div>
        </div>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
    </div>
  </section>
 
  </body>
</html>


<style>
.table td, .table th {
  
    padding: .8em .8em;
   
}
</style>