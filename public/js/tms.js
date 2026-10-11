const navBar = document.getElementById('dashboard-nav')
const uiBackdropFilter = document.getElementById('ui-backdrop-nav')
const closeBtn = document.getElementById('close-nav')
const openBtn = document.getElementById('open-nav')

function syncBodyScrollLock() {
    const hasOpenModal = document.querySelector('.ui-modal-backdrop.show-modal') !== null
    const hasOpenMobileNav = window.innerWidth < 1024 && navBar?.classList.contains('nav-open')

    document.body.classList.toggle('block-scroll', hasOpenModal || hasOpenMobileNav)
}

function setMobileNav(isOpen) {
    navBar?.classList.toggle('nav-open', isOpen)
    uiBackdropFilter?.classList.toggle('show-nav-backdrop', isOpen)
    openBtn?.setAttribute('aria-expanded', String(isOpen))
    navBar?.setAttribute('aria-hidden', String(!isOpen))
    syncBodyScrollLock()
}

function closeMobileNav() {
    setMobileNav(false)
}

openBtn?.addEventListener('click', () => setMobileNav(true))
closeBtn?.addEventListener('click', closeMobileNav)
uiBackdropFilter?.addEventListener('click', closeMobileNav)

function syncNavWithViewport() {
    if (window.innerWidth >= 1024) {
        navBar?.classList.remove('nav-open')
        uiBackdropFilter?.classList.remove('show-nav-backdrop')
        openBtn?.setAttribute('aria-expanded', 'false')
        navBar?.setAttribute('aria-hidden', 'false')
    } else {
        navBar?.setAttribute('aria-hidden', String(!navBar.classList.contains('nav-open')))
    }

    syncBodyScrollLock()
}

window.addEventListener('resize', syncNavWithViewport)
syncNavWithViewport()
