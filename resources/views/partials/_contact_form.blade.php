<div class="container">
            <h2 class="section-title">Contactez-moi</h2>
            <div class="contact-content">
                <div class="contact-info">
                    <h3>Restons en contact</h3>
                    <p>N'hésitez pas à me contacter pour discuter de vos projets ou opportunités de collaboration.</p>
                    
                    <div class="contact-links">
                        <a href="mailto:youssoufs1209@gmail.com" class="contact-link">
                            <i class="fas fa-envelope"></i>
                            <span>youssoufs1209@gmail.com</span>
                        </a>
                        <a href="https://github.com/Syllayoussoufdev" class="contact-link">
                            <i class="fab fa-github"></i>
                            <span>GitHub Profile</span>
                        </a>
                        <a href="https://www.linkedin.com/in/sylla-youssouf-devweb?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank" rel="noopener" class="contact-link">
                            <i class="fab fa-linkedin"></i>
                            <span>LinkedIn Profile</span>
                        </a>
                        <a href="https://wa.me/0594564993" class="contact-link">
                            <i class="fab fa-whatsapp"></i>
                            <span>WhatsApp</span>
                        </a>
                    </div>
                </div>

                <form class="contact-form" id="contactForm" action="{{ route('Mesage.store') }}" method="POST" id="contact-form" >
                    @csrf
                    <div class="form-group">
                        <label for="name">Nom et Prenom :</label>
                        <input class="form-control" id="nom" name="nom" type="text" placeholder="Entrez votre Nom..." data-sb-validations="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email :</label>                        
                        <input class="form-control" id="email" name="email" type="email" placeholder="sylla@example.com" data-sb-validations="required,email" />                    
                    </div>
                    <div class="form-group">
                        <label for="sujet">Objet :</label>
                        <input class="form-control" id="sujet" name="sujet" type="text" placeholder="Objet" data-sb-validations="required" />
                    </div>
                    <div class="form-group">
                        <label for="message">Message :</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Votre message..." data-sb-validations="required"></textarea>
                                  
                    </div>
                    {{-- <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i>
                        Envoyer le message
                    </button> --}}

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary" > <i class="fas fa-paper-plane"></i>Envoyer</button>
                    </div>                    
                </form>
            </div>
        </div>