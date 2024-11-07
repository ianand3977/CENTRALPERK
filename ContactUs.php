<?php include('partials-front/menu.php'); ?>

<!-- Contact Section Starts Here -->
<section class="contact">
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        <p class="intro text-center">Have questions? We’d love to hear from you! Reach out to us anytime.</p>

        <!-- Contact Information -->
        <div class="contact-info text-center">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <p><strong>Phone:</strong> 1234567890, 0987654321</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-envelope"></i>
                <p><strong>Email:</strong> contact@centralperk.com</p>
            </div>
            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <p><strong>Visit Us:</strong> 123 Central Perk Lane, Food City</p>
            </div>
        </div>

        <!-- Restaurant Description -->
        <div class="restaurant-info text-center">
            <p>At <strong>Central Perk</strong>, we provide an unforgettable dining experience with delicious food, cozy atmosphere, and excellent service. Come enjoy a meal with us!</p>
        </div>

        <!-- Admins Information -->
        <div class="admins text-center">
            <p><strong>Admins:</strong> Nishant Nalawade & Anand Ubarhande</p>
        </div>
    </div>
</section>
<!-- Contact Section Ends Here -->

<?php include('partials-front/footer.php'); ?>

<style>
/* Contact Section Styling */
.contact {
    padding: 4% 0;
    background-color: #f8f9fa;
}

.contact h2 {
    font-size: 2.5rem;
    color: #2f3542;
    margin-bottom: 1.5%;
}

.intro {
    font-size: 1.2rem;
    color: #747d8c;
    margin-bottom: 3%;
}

.contact-info {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    margin-bottom: 2%;
}

.contact-item {
    margin: 2% 0;
    text-align: center;
    width: 30%;
}

.contact-item i {
    font-size: 2rem;
    color: #ff6b81;
    margin-bottom: 1%;
}

.contact-item p {
    font-size: 1.2rem;
    color: #2f3542;
}

.restaurant-info {
    margin: 2% auto;
    font-size: 1.1rem;
    color: #747d8c;
    max-width: 80%;
}

.restaurant-info strong {
    color: #2f3542;
}

.admins {
    margin-top: 3%;
    font-size: 1.2rem;
    color: #2f3542;
}

.admins p {
    font-weight: bold;
}

@media only screen and (max-width:768px) {
    .contact-info {
        flex-direction: column;
    }
    .contact-item {
        width: 80%;
    }
}
</style>
