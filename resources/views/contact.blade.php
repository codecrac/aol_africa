@extends('partials.includes')

@section('body')

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Aol Africa Seoul Group</h2>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Côte d’ivoire : Grand-Bassam Mockey-ville extension ilot 143 lot 1485 </p>
                            </li>
                            <li>
                                <p> <i class="fas fa-phone-square"></i>Phone: <a href="tel:002250709569700 ">+225 07 09 56 97 00 </a> </p>
                            </li>
                            </li>
                            <li>
                                <p>
                                    <p><i class="fas fa-map-marker-alt"></i>Corée du sud : Gyeonggido pyeontecksi sinjandong 1ro 17 beongil 17 Corée du Sud </p>
                                </p>
                            </li>
                            </li>
                            <li>
                                <p> <i class="fas fa-phone-square"></i>Tél : +82 31 66 61 336/+8210-9556-8336<br/>
                                                                            Fax : 823-1664-1337 </p>
                                
                            </li>
                             <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:support@aolafrica.co.kr">support@aolafrica.co.kr</a></p>
                            </li> 
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Envoyez un message</h2>
                        <p>Nous disposons d'un service client qui s'occupera de vous repondre dans les plus bref delais. </p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" required data-error="S'il vous plaît entrez votre nom">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Votre Email" id="email" class="form-control" name="name" required data-error="S'il vous plaît entrez votre email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Sujet" name="name" placeholder="Subject" required data-error="S'il vous plaît entrez votre Sujet">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="Telephone" name="name" placeholder="Telephone" required data-error="S'il vous plaît entrez votre Telephone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Votre Message" rows="4" data-error="Ecrivez votre message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Envoyer le Message</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Notre position exacte</h1>
                    </div>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15889.203682090441!2d-3.9164684!3d5.370997099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1edb1eede28ad%3A0xad203877791a24e0!2sPHARMACIE%20Jules%20Verne!5e0!3m2!1sfr!2sci!4v1613730616333!5m2!1sfr!2sci" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
    </div>
    <!-- End Cart -->
@endsection
