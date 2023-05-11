<!-- <div class = "container">
    <div id="contato">
        <form action="contato-salvar.php" method="post">
            <div>
                <input class ="campoForm" type="text" placeholder="Nome" name="txNome"/>
            </div>

            <div>
                <input class ="campoForm" type="text" placeholder="E-mail" name="txEmail"/>
            </div>

            <div>
                <input class ="campoForm" type="text" placeholder="Assunto" name="txAssunto"/>
            </div>

            <div>
                <textarea class ="campoForm" placeholder="Mensagem" name="txMensagem"></textarea>
            </div>

            <div>
                <input class ="campoForm" type="submit" value="Salvar"/>
            </div>
        </form>
    </div>
</div>
-->

<div class="container-flex">
<div class="container">
        <div class="text">Responsive Contact us Form</div>
        <form action="#">
           <div class="form-row">
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Nome</label>
              </div>
              
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Telefone</label>
              </div>
           </div>

           <div class="form-row">
              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Email</label>
              </div>

              <div class="input-data">
                 <input type="text" required>
                 <div class="underline"></div>
                 <label for="">Assunto</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data textarea">
                 <textarea rows="8" cols="80" required></textarea>
                 <br />
                 <div class="underline"></div>
                 <label for="">Escreva sua mensagem</label>
                 <br />
                 <div class="form-row submit-btn">
                    <div class="input-data">
                       <div class="inner"></div>
                       <input type="submit" value="submit">
                    </div>
                 </div>
              </div>
           </div>
        </form>
     </div>
     </div>