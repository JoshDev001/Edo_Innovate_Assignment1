let count = 0;

const value = document.querySelector('#value');
const btns = document.querySelectorAll('.btn');

btns.forEach(function (btn) {
  // forEach method for DOM; N.B
  btn.addEventListener('click', function (e) {
    const styles = e.currentTarget.classList; //currentTarget, classList- contains the full class;

    if (styles.contains('decrease')) {
      count--;
    } else if (styles.contains('increase')) {
      count++;
    } else {
      count = 0;
    }
    if (count === 0) {
      value.style.color = '#222';
    } else {
      count > 0 ? (value.style.color = 'green') : (value.style.color = 'red');
    }

    value.textContent = count;
  });
});
