import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Tambahkan di bawah ini
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();
