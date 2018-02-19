function setActive() {

  active = document.getElementById('nav').getElementsByTagName('a');

  for (i = 0; i < active.length; i++) {

    if (document.location.href.indexOf(active[i].href) >= 0) {

      active[i].className = 'active';

    }
    else {

      active[i].className = '';

    }

  }

}

window.onload = setActive;
