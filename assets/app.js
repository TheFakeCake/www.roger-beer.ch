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
