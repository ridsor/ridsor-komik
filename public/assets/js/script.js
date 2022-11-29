const datech = document.querySelectorAll('.datech');
for (const item of datech) {
  const date = sisaWaktuUpload(item.dataset.datech);
  item.innerText = date;
}

function sisaWaktuUpload(dateChapter) {
  const now = Date.now();
  let date = now - dateChapter;
  date = date / 1000;
  if (date > 60) {
    date = date / 60;
    if (date > 60) {
      date = date / 60;
      if (date > 24) {
        date = date / 24;
        if (date > 30) {
          date = date / 30;
          if (date > 12) {
            date = date / 12;
            date = Math.round(date);
            date = date + ' thn lalu';
          } else {
            date = Math.round(date);
            date = date + ' bln lalu';
          }
        } else {
          date = Math.round(date);
          date = date + ' hari lalu';
        }
      } else {
        date = Math.round(date);
        date = date + ' jam lalu';
      }
    } else {
      date = Math.round(date);
      date = date + ' min lalu';
    }
  } else {
    date = Math.round(date);
    date = date + ' detik lalu';
  }

  return date;
}
