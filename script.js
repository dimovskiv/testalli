AOS.init()

const $scrollPositionBar = document.getElementById('scrollPositionBar')
const $scrollToTopBtn = document.getElementById('backToTopBtn')

$scrollToTopBtn.onclick = () => {
  const isSafari = window.safari !== undefined

  if (isSafari) {
    document.body.scrollTop = 0
  } else {
    window.scrollTo({top: 0, behavior: 'smooth'})
  }
}

document.body.onscroll = () => {
  const offset = window.pageYOffset
  const height = document.body.scrollHeight - 937 // ne pitaj me nista bajo :D
  const percent = offset / height * 100

  $scrollPositionBar.style.width = `${percent}%`

  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $scrollToTopBtn.style.display = 'flex'
  } else {
    $scrollToTopBtn.style.display = 'none'
  }
}

$('#nm').click(() => $('.navbar-mobile').toggle('flex'))
$('#this').click(() => $('#men').slideToggle('slow'))
$('#cookie').click(() => $('#cookieBanner').hide())