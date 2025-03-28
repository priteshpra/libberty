/**
* PHP Email Form Validation - v3.9
* URL: https://bootstrapmade.com/php-email-form/
* Author: BootstrapMade.com
*/
(function () {
    "use strict";

    let forms = document.querySelectorAll('.php-email-form');

    forms.forEach(function (e) {
        e.addEventListener('submit', function (event) {
            event.preventDefault();

            let thisForm = this;

            let action = thisForm.getAttribute('action');
            let recaptcha = thisForm.getAttribute('data-recaptcha-site-key');

            if (!action) {
                displayError(thisForm, 'The form action property is not set!');
                return;
            }
            thisForm.querySelector('.loading').classList.add('d-block');
            thisForm.querySelector('.error-message').classList.remove('d-block');
            thisForm.querySelector('.sent-message').classList.remove('d-block');

            let formData = new FormData(thisForm);
            if (recaptcha) {
                if (typeof grecaptcha !== "undefined") {
                    grecaptcha.ready(function () {
                        try {
                            grecaptcha.execute(recaptcha, { action: 'php_email_form_submit' })
                                .then(token => {
                                    formData.set('recaptcha-response', token);
                                    console.log('----- see ', formData);
                                    php_email_form_submit(thisForm, action, formData);
                                })
                        } catch (error) {
                            displayError(thisForm, error);
                        }
                    });
                } else {
                    displayError(thisForm, 'The reCaptcha javascript API url is not loaded!')
                }
            } else {
                if (!document.cookie.includes("humans_21909=1")) {
                    document.cookie = "humans_21909=1; path=/; max-age=86400"; // Set cookie for 1 day
                    // document.location.reload(true);
                } else {
                    console.log("Cookie already set, skipping reload.");
                }
                console.log('----- else ', formData);
                formData.append('timestamp', Date.now());
                php_email_form_submit(thisForm, action, formData);
            }
        });
    });

    function php_email_form_submit(thisForm, action, formData) {

        console.log('form');

        fetch(action, {
            method: 'POST',
            body: formData,
            headers: { 'X-Requested-With': 'XMLHttpRequest' },
        })
            .then(response => {
                if (response.ok) {
                    return response.text();
                } else {
                    throw new Error(`${response.status} ${response.statusText} ${response.url}`);
                }
            })
            .then(data => {
                thisForm.querySelector('.loading').classList.remove('d-block');
                //console.log('data--------',data)
                if (data.trim() === 'OK') {
                    window.location.href = "https://libertyexclusive.com/thank-you";
                    // thisForm.querySelector('.sent-message').classList.add('d-block');
                    document.querySelectorAll('.formHidecnt').forEach(el => el.style.display = 'none');
                    // document.querySelectorAll('.imgShowCnt').forEach(el => el.style.display = 'block');

                    document.querySelectorAll('.imgShowCnt').forEach(el => {
                        el.style.display = 'block';
                        el.style.width = '300px';
                        el.style.marginLeft = '15%'; // Corrected camelCase property
                    });

                    thisForm.reset();
                } else {
                    throw new Error(data ? data : 'Form submission failed and no error message returned from: ' + action);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                displayError(thisForm, error);
            });



    }

    function displayError(thisForm, error) {
        thisForm.querySelector('.loading').classList.remove('d-block');
        thisForm.querySelector('.error-message').innerHTML = error;
        thisForm.querySelector('.error-message').classList.add('d-block');
    }

})();
