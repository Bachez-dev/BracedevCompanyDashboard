// LocalStorage keys
const startKey = 'dashboardStartTime';
const pausedKey = 'dashboardPausedAt';
const totalKey = 'dashboardTotalTime';

// Initialize storage if not already set
if (!localStorage.getItem(startKey)) {
  localStorage.setItem(startKey, Date.now());
}
if (!localStorage.getItem(totalKey)) {
  localStorage.setItem(totalKey, '0');
}

// Format seconds to HH:MM:SS
function formatTime(seconds) {
  const h = String(Math.floor(seconds / 3600)).padStart(2, '0');
  const m = String(Math.floor((seconds % 3600) / 60)).padStart(2, '0');
  const s = String(seconds % 60).padStart(2, '0');
  return `${h}:${m}:${s}`;
}

// Tab visibility handling
let isTabVisible = true;

document.addEventListener('visibilitychange', () => {
  isTabVisible = !document.hidden;

  if (!isTabVisible) {
    // Store time when tab is hidden
    localStorage.setItem(pausedKey, Date.now());
  } else {
    // On return, calculate paused duration
    const pausedAt = parseInt(localStorage.getItem(pausedKey), 10);
    if (pausedAt) {
      const pausedDuration = Math.floor((Date.now() - pausedAt) / 1000);
      const totalPaused = parseInt(localStorage.getItem(totalKey), 10);
      localStorage.setItem(totalKey, totalPaused + pausedDuration);
    }
  }
});

// Timer update every second
setInterval(() => {
  if (isTabVisible) {
    const start = parseInt(localStorage.getItem(startKey), 10);
    const totalPaused = parseInt(localStorage.getItem(totalKey), 10);
    const now = Date.now();
    const secondsSpent = Math.floor((now - start) / 1000) - totalPaused;

    const display = document.getElementById('dashboard-timer');
    if (display) {
      display.textContent = `⏱️ Time on Dashboard: ${formatTime(secondsSpent)}`;
    }
  }
}, 1000);
