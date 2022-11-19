let isOpen = false
let activeBoxId = -1

function closeBanner() {
  document.getElementById('banner').classList.add('bannerClosed')
}

const toggleMenu = () => {
  if (isOpen) {
    // close
    isOpen = false
    document.getElementById('hamburger').classList.add('hamburgerActive')
    document.getElementById('bar1').classList.remove('bar1Active')
    document.getElementById('bar2').classList.remove('bar2Active')
    document.getElementById('bar3').classList.remove('bar3Active')
    document.getElementById('menu').classList.remove('openMobileMenu')
    document.getElementById('menu').classList.add('closeMobileMenu')
  } else {
    // open
    isOpen = true
    document.getElementById('hamburger').classList.remove('hamburgerActive')
    document.getElementById('bar1').classList.add('bar1Active')
    document.getElementById('bar2').classList.add('bar2Active')
    document.getElementById('bar3').classList.add('bar3Active')
    document.getElementById('menu').classList.add('openMobileMenu')
    document.getElementById('menu').classList.remove('closeMobileMenu')
  }

  console.log('isOpen', isOpen)
}

function init() {
  document.getElementById('foundationYear').innerText =
    '© ' + new Date().getFullYear() + ' Fondation Charles Corm'
}

function onTitleClick(param) {
  const elements = document.getElementsByClassName('menuMobileLinks')
  const boxes = document.getElementsByClassName('list')

  if (param === activeBoxId) {
    // close current
    activeBoxId = -1

    // mobile
    document
      .getElementsByClassName('menuMobileLinks')
      [param].classList.add('menuMobileLinksClosed')

    // desktop
    document.getElementsByClassName('list')[param].classList.add('listHide')

    document.getElementById('menuBottom').classList.remove('fadeInMenu')
    document.getElementById('menuBottom').classList.add('fadeOutMenu')
  } else {
    // open current and close others
    activeBoxId = param

    for (let i = 0; i < elements.length; i++) {
      const element = elements[i]
      if (i === param) {
        element.classList.remove('menuMobileLinksClosed')
        element.classList.add('menuMobileLinksOpened')
      } else {
        element.classList.add('menuMobileLinksClosed')
      }
    }

    for (let i = 0; i < boxes.length; i++) {
      const box = boxes[i]

      if (i === param) {
        box.classList.remove('listHide')
        box.classList.add('listShow')
      } else {
        box.classList.add('listHide')
      }
    }

    //desktop
    const titles = document.getElementsByClassName('menuTitle')
    for (let k = 0; k < titles.length; k++) {
      const title = titles[k]

      if (k === param) {
        // do nothing

        title.classList.remove('inactiveMenuTitle')
      } else {
        title.classList.add('inactiveMenuTitle')
      }
    }

    document.getElementById('menuBottom').classList.add('fadeInMenu')
    document.getElementById('menuBottom').classList.remove('fadeOutMenu')
  }

  // image menu bottom
  document.getElementById('menu-bottom-image').src = `assets/images/image${
    activeBoxId + 1
  }.jpg` // images are zero based

  // now, lets bold the active link
  const links = document.getElementsByClassName('menuMobileLink')
  // loop through them and highlight if url matches
  for (let j = 0; j < links.length; j++) {
    const link = links[j]
    const href = link.getAttribute('href')

    if (window.location.pathname.includes(href)) {
      link.classList.add('menuMobileLinkCurrent')
    } else {
      link.classList.remove('menuMobileLinkCurrent')
    }
  }
}

init()
