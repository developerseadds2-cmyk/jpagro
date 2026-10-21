<?php $formStatus = $_SESSION['form_status'] ?? null;
unset($_SESSION['form_status']); ?>
<section class="page-hero">
    <div class="container">
        <div class="breadcrumb">Home / Contact us</div>
        <h1>Contact Us</h1>
        <p>Share the machine and component details, and our team will help clarify the next step.</p>
    </div>
</section>
<section class="section">
    <div class="container contact-grid">
        <div>
            <div class="kicker">Start a conversation</div>
            <h2>Good work begins with a clear brief.</h2>
            <p>Give us a little context about your requirement. Our team will review it and get back to you.</p>
            <div class="contact-list">
                <div class="contact-item"><i class="bi bi-telephone"></i>
                    <div><strong>Phone</strong><a href="tel:<?= e(PHONE_NUMBER) ?>"><?= e(PHONE_NUMBER) ?></a><br>
                <a href="tel:9781200555">+91 9781200555</a></div>
                </div>
                <div class="contact-item"><i class="bi bi-whatsapp"></i>
                    <div><strong>WhatsApp</strong><a href="https://wa.me/<?= e(WHATSAPP_NUMBER) ?>">Chat with our
                            team</a></div>
                </div>
                <div class="contact-item"><i class="bi bi-envelope"></i>
                    <div><strong>Email</strong><a href="mailto:<?= e(CONTACT_EMAIL) ?>"><?= e(CONTACT_EMAIL) ?></a><br>
                    <a href="mailto:jpagroindustries55@gmail.com">jpagroindustries55@gmail.com</a>
                    </div>
                </div>
                <div class="contact-item"><i class="bi bi-geo-alt"></i>
                    <div><strong>Address</strong><span><?= e(COMPANY_ADDRESS) ?></span></div>
                </div>
            </div>
        </div>
        <div><?php if ($formStatus): ?>
                <div class="alert"><?= e($formStatus) ?></div><?php endif; ?>
            <form action="<?= e(url('forms/contact-process.php')) ?>" method="post"><input type="hidden"
                    name="csrf_token" value="<?= e(csrf_token()) ?>">
                <div class="form-grid">
                    <div class="form-field"><label for="name">Name *</label><input id="name" name="name" required
                            maxlength="80"></div>
                    <div class="form-field"><label for="phone">Phone *</label><input id="phone" name="phone" required
                            maxlength="30"></div>
                    <div class="form-field"><label for="email">Email *</label><input id="email" name="email"
                            type="email" required maxlength="120"></div>
                    <div class="form-field"><label for="company">Company name</label><input id="company" name="company"
                            maxlength="120"></div>
                    <div class="form-field full"><label for="requirement">Requirement</label><select id="requirement"
                            name="requirement">
                            <option value="Agricultural machinery">Agricultural machinery</option>
                            <option value="Custom fabrication">Custom fabrication</option>
                            <option value="Precision manufacturing">Precision manufacturing</option>
                            <option value="Other">Other</option>
                        </select></div>
                    <div class="form-field full"><label for="message">Message *</label><textarea id="message"
                            name="message" required maxlength="2000"></textarea></div>
                </div><button class="button" type="submit">Send enquiry <i class="bi bi-arrow-up-right"></i></button>
            </form>
        </div>
    </div>
</section>