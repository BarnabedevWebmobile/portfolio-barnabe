<section class="mainsection">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6 mb-5 mt-5 ">
                    <form class=" animate__animated animate__jackInTheBox"><!--Le formulaire-->
                        <div class="mb-4"><!--le formulaire de nom-->
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control border border-secondary" id="nom" aria-describedby="NomHelp" placeholder="Dupond">
                        </div>
                        <div class="mb-4"> <!--le formulaire de prénom-->
                            <label for="subname" class="form-label">prénom</label>
                            <input type="text" class="form-control border border-secondary" id="subname" aria-describedby="prenomHelp" placeholder="Jean">
                        </div>
                        <div class="mb-4"><!--le formulaire de mail-->
                            <label for="exampleInputEmail1" class="form-label">addresse Email</label>
                            <input type="email" class="form-control border border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="XXXXXXXXXX@XXXX.com">
                        </div>
                        <div class="mb-4"><!--le formulaire de password-->
                          <label for="Password" class="form-label">mot de passe</label>
                          <input type="password" class="form-control border border-secondary" id="Password">
                          <div id="mdpHelp" class="form-text">doit contenir 8 caracters au minimum</div>
                        </div>
                        <div class="mb-4"><!--le formulaire de password-->
                            <label for="Passwordverify" class="form-label">vérifier votre mot de passe</label>
                            <input type="password" class="form-control border border-secondary" id="Passwordverify">
                        </div>
                        <div class="mb-4"><!--le formulaire de message-->
                            <label for="message" class="form-label">votre message</label>
                            <textarea class="form-control border border-secondary" id="message" rows="3" placeholder="Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, suscipit! Ipsam dicta neque ea repellat aperiam assumenda in autem esse expedita vero deserunt tenetur, a delectus unde eum, odit numquam? "></textarea> 
                        </div>
                        <span id="incorrect" class="alert" role="alert"> <!--le message d'alerte-->

                        </span>
                        <div class="d-flex justify-content-center"> <!--le bouton d'envoi-->
                            <button type="button" class=" btn btn-secondary button" onclick="send()">envoyer</button>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </section>