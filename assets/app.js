import './styles/app.scss';

import Collapse from 'bootstrap/js/dist/collapse';
import { initOnScrollAnimations } from './js/animate-on-scroll';

// Initializing the animations on scroll if not on mobile
if (!window.isMobile) {
    initOnScrollAnimations();
}

// Add event listeners on Bootstrap accordion to scroll to the top of the
// accordion item after it's expanded if it's out of the view
document
    .querySelectorAll('.accordion-collapse')
    .forEach((accordionCollapse) => {
        accordionCollapse.addEventListener('shown.bs.collapse', (e) => {
            const accordionItem = e.target.parentElement;
            const navBarHeight = document.querySelector('.navbar').offsetHeight;

            if (accordionItem.offsetTop < window.pageYOffset + navBarHeight) {
                window.scrollTo(
                    window.pageXOffset,
                    e.target.parentElement.offsetTop - navBarHeight
                );
            }
        });
    });

// Deofuscating the email address
const value = ['r','%','6','F','g','e','r','&','#','4','6',';','&','#','3','7',';','6','2','&','#','3','7',';','6','&#53;%65%7'+'&#50;&#64;'+'&#98;l','ue', '%','7','7','i','&','#','1','1','0',';','&','#','4','6',';','c','h'];

document.querySelectorAll('.contact-email-link').forEach((element) => {
    const textArea = document.createElement('textarea');
    textArea.innerHTML = value.join('');
    element.href = (['m','a','i','l','t','o',':'].join('')) + textArea.value;
    element.innerHTML = decodeURI(textArea.value);
});

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
        .querySelectorAll('input[type="text"], input[type="email"], input[type="tel"], textarea')
        .forEach(input => {
            input.addEventListener('blur', (e) => {
                e.target.value = e.target.value.trim()
            });
        })
    ;
}

// Cancel drag event on non draggable elements (workaround for Firefox)
document
    .querySelectorAll('[draggable="false"]')
    .forEach((element) => {
        element.addEventListener('dragstart', (e) => e.preventDefault());
    })
;
