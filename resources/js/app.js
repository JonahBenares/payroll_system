import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.getElementById('sched_type').addEventListener("change", function (e) {
    if (e.target.value === 'regular') {
        document.getElementById('regulars').style.display = 'block';
        document.getElementById('shiftings').style.display = 'none';
    } else {
        document.getElementById('regulars').style.display = 'none';
        document.getElementById('shiftings').style.display = 'block'
    }
});


