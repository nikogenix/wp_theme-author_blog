<form id="enquiry_form">

    <?php wp_nonce_field('wp_rest') ?>

    <div class="form-fields">
        <div class="form-contact-details">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Name">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required placeholder="Email">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" placeholder="Phone">
            </div>
        </div>

        <div class="form-message">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="4" required placeholder="Message"></textarea>
        </div>
    </div>

    <button type="submit">Submit</button>

    <div id="form_success"></div>

    <div id="form_error"></div>

</form>

<script>

    document.addEventListener("DOMContentLoaded", function () {
        document.getElementById("enquiry_form").addEventListener("submit", function (event) {
            event.preventDefault();

            document.getElementById("form_error").style.display = "none";

            const form = this;
            const formData = new FormData(form);
            const xhr = new XMLHttpRequest();

            xhr.open("POST", "<?php echo get_rest_url(null, 'v1/contact-form/submit'); ?>");

            xhr.onload = function () {
                if (xhr.status === 200) {
                    document.getElementById("form_success").innerHTML = xhr.responseText;
                    document.getElementById("form_success").style.display = "block";
                } else {
                    document.getElementById("form_error").innerHTML = "There was an error submitting your message.";
                    document.getElementById("form_error").style.display = "block";
                }
            };

            xhr.onerror = function () {
                document.getElementById("form_error").innerHTML = "There was an error submitting your message.";
                document.getElementById("form_error").style.display = "block";
            };


            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.send(new URLSearchParams(formData).toString());

        });
    });


</script>