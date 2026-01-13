document.addEventListener('DOMContentLoaded', function () {
    initThemeCards();
    initFormListeners();
    initCheckout();
    updatePreview();
});

function initThemeCards() {
    document.querySelectorAll('.theme-card').forEach(card => {
        card.addEventListener('click', () => {
            document.querySelectorAll('.theme-card').forEach(c => c.classList.remove('active'));
            card.classList.add('active');
            document.getElementById('themeSelect').value = card.dataset.theme;
            updatePreview();
        });
    });

    document.getElementById('themeSelect').addEventListener('change', function () {
        document.querySelectorAll('.theme-card').forEach(c => {
            c.classList.toggle('active', c.dataset.theme === this.value);
        });
        updatePreview();
    });
}

function initFormListeners() {
    document.querySelectorAll('#weddingForm input, #weddingForm textarea, #weddingForm select').forEach(el => {
        el.addEventListener('input', debounce(updatePreview, 300));
    });
    document.getElementById('refreshBtn')?.addEventListener('click', updatePreview);
}

function updatePreview() {
    const form = document.getElementById('weddingForm');
    const fd = new FormData(form);
    const data = Object.fromEntries(fd);

    const groomName = data.groom_name || 'Ahmad';
    const brideName = data.bride_name || 'Siti';
    const eventDate = data.event_date ? formatDate(data.event_date) : 'Sabtu, 15 Mac 2025';
    const eventTime = data.event_time ? formatTime(data.event_time) : '12:00 tengahari';
    const venue = data.venue_address || 'Dewan Komuniti';
    const theme = data.theme || 'modern';
    const color = data.primary_color || '#d4a574';

    const preview = document.getElementById('cardPreview');
    preview.className = `card-preview ${theme}`;

    preview.innerHTML = `
        <div class="card-inner">
            <div class="bismillah">بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْم</div>
            <div class="card-title">Walimatul Urus</div>
            <div class="couple-names">
                <span class="groom" style="color: ${color}">${groomName.split(' ')[0]}</span>
                <span class="and" style="color: ${color}">&</span>
                <span class="bride" style="color: ${color}">${brideName.split(' ')[0]}</span>
            </div>
            <div class="event-date">${eventDate}</div>
            <div class="event-time">${eventTime}</div>
            <div class="venue">${venue.substring(0, 50)}${venue.length > 50 ? '...' : ''}</div>
        </div>
    `;

    // Store data for checkout
    document.getElementById('cardDataField').value = JSON.stringify(data);
    document.getElementById('checkoutCardData').value = JSON.stringify(data);
}

function initCheckout() {
    document.getElementById('checkoutForm')?.addEventListener('submit', function (e) {
        const groom = document.querySelector('[name="groom_name"]').value.trim();
        const bride = document.querySelector('[name="bride_name"]').value.trim();
        const date = document.querySelector('[name="event_date"]').value;
        const wa = document.querySelector('[name="whatsapp"]').value.trim();

        if (!groom || !bride || !date || !wa) {
            e.preventDefault();
            alert('Sila isi nama pengantin, tarikh majlis, dan nombor WhatsApp.');
            return false;
        }
        updatePreview();
    });
}

function formatDate(dateStr) {
    if (!dateStr) return '';
    const days = ['Ahad', 'Isnin', 'Selasa', 'Rabu', 'Khamis', 'Jumaat', 'Sabtu'];
    const months = ['Januari', 'Februari', 'Mac', 'April', 'Mei', 'Jun', 'Julai', 'Ogos', 'September', 'Oktober', 'November', 'Disember'];
    const d = new Date(dateStr);
    return `${days[d.getDay()]}, ${d.getDate()} ${months[d.getMonth()]} ${d.getFullYear()}`;
}

function formatTime(timeStr) {
    if (!timeStr) return '';
    const [h, m] = timeStr.split(':');
    const hour = parseInt(h);
    const period = hour < 12 ? 'pagi' : hour < 15 ? 'tengahari' : hour < 19 ? 'petang' : 'malam';
    const displayHour = hour > 12 ? hour - 12 : hour;
    return `${displayHour}:${m} ${period}`;
}

function debounce(fn, wait) {
    let t;
    return (...args) => { clearTimeout(t); t = setTimeout(() => fn(...args), wait); };
}
