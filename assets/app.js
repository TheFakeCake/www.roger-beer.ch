import './styles/app.scss';

import Collapse from 'bootstrap/js/dist/collapse';

// Executing Bootstrap's collapse javascript module
var collapseElementList = [].slice.call(document.querySelectorAll('.collapse'));
var collapseList = collapseElementList.map(function (collapseEl) {
    return new Collapse(collapseEl, { toggle: false })
});
