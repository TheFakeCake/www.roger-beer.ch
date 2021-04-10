import './styles/app.scss';

import Collapse from 'bootstrap/js/dist/collapse';
import { initOnScrollAnimations } from './js/animate-on-scroll';

// Executing Bootstrap's collapse javascript module
var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'));
var collapseList = collapseElementList.map(function (collapseEl) {
    return new Collapse(collapseEl, { toggle: false })
});

// Initializing the animations on scroll
initOnScrollAnimations();

// Initializing the contact form if it's in the page
let contactForm = document.getElementById('contactForm');

if (contactForm) {
    // If the form has already been validated on the backend, force a frontend
    // validation
    if (contactForm.classList.contains('was-validated')) {
        contactForm.checkValidity();
    }

    // On submit callback to check form validity and prevent sending the form if
    // invalid
    contactForm.addEventListener('submit', (event) => {
        if (!contactForm.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
        }
        contactForm.classList.add('was-validated');
    }, false);

    // On blur callbacks to trim text inputs
    contactForm
        .querySelectorAll('input[type="text"], input[type="email"], input[type="tel"]')
        .forEach(input => {
            input.addEventListener('blur', (e) => {
                e.target.value = e.target.value.trim()
            });
        })
    ;
}
