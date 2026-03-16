(function (window, document) {
  'use strict';

  window.__app = window.__app || {};

  function debounce(fn, wait) {
    var timer;
    return function () {
      var ctx = this, args = arguments;
      clearTimeout(timer);
      timer = setTimeout(function () { fn.apply(ctx, args); }, wait);
    };
  }

  function getHeaderHeight() {
    var header = document.querySelector('.navbar');
    return header ? header.getBoundingClientRect().height : 68;
  }

  function getFocusableElements(container) {
    return Array.prototype.slice.call(
      container.querySelectorAll(
        'a[href], button:not([disabled]), input:not([disabled]), ' +
        'select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])'
      )
    );
  }

  function initBurger() {
    if (__app.burgerReady) return;
    __app.burgerReady = true;

    var toggler = document.querySelector('.navbar-toggler');
    var collapse = document.querySelector('.navbar-collapse');
    var overlay = document.querySelector('.nav-overlay');

    if (!toggler || !collapse) return;

    function isOpen() {
      return collapse.classList.contains('is-open');
    }

    function openMenu() {
      collapse.classList.add('is-open');
      toggler.classList.add('is-active');
      toggler.setAttribute('aria-expanded', 'true');
      document.body.classList.add('u-no-scroll');
      if (overlay) overlay.classList.add('is-visible');
      var focusable = getFocusableElements(collapse);
      if (focusable.length) focusable[0].focus();
    }

    function closeMenu() {
      collapse.classList.remove('is-open');
      toggler.classList.remove('is-active');
      toggler.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('u-no-scroll');
      if (overlay) overlay.classList.remove('is-visible');
    }

    toggler.addEventListener('click', function () {
      isOpen() ? closeMenu() : openMenu();
    });

    if (overlay) {
      overlay.addEventListener('click', function () {
        if (isOpen()) closeMenu();
      });
    }

    document.addEventListener('keydown', function (e) {
      if (!isOpen()) return;
      var key = e.key || e.keyCode;

      if (key === 'Escape' || key === 27) {
        closeMenu();
        toggler.focus();
        return;
      }

      if (key === 'Tab' || key === 9) {
        var focusable = getFocusableElements(collapse);
        if (!focusable.length) return;
        var first = focusable[0];
        var last = focusable[focusable.length - 1];

        if (e.shiftKey) {
          if (document.activeElement === first) {
            e.preventDefault();
            last.focus();
          }
        } else {
          if (document.activeElement === last) {
            e.preventDefault();
            first.focus();
          }
        }
      }
    });

    document.addEventListener('click', function (e) {
      if (!isOpen()) return;
      var nav = document.querySelector('.navbar');
      if (nav && !nav.contains(e.target)) {
        closeMenu();
      }
    });

    collapse.querySelectorAll('.nav-link').forEach(function (link) {
      link.addEventListener('click', function () {
        if (isOpen()) closeMenu();
      });
    });

    window.addEventListener('resize', debounce(function () {
      if (window.innerWidth >= 768 && isOpen()) {
        closeMenu();
      }
    }, 100), { passive: true });
  }

  function initNavbarScroll() {
    if (__app.navbarScrollReady) return;
    __app.navbarScrollReady = true;

    var navbar = document.querySelector('.navbar');
    if (!navbar) return;

    function onScroll() {
      if (window.pageYOffset > 10) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  function initAnchors() {
    if (__app.anchorsReady) return;
    __app.anchorsReady = true;

    document.addEventListener('click', function (e) {
      var target = e.target.closest('a[href^="#"]');
      if (!target) return;

      var href = target.getAttribute('href');
      if (!href || href === '#' || href === '#!') return;

      var id = href.substring(1);
      var section = document.getElementById(id);
      if (!section) return;

      e.preventDefault();

      var offset = getHeaderHeight();
      var top = section.getBoundingClientRect().top + window.pageYOffset - offset;

      window.scrollTo({ top: top, behavior: 'smooth' });

      if (history.pushState) {
        history.pushState(null, '', href);
      }
    });
  }

  function initActiveNav() {
    if (__app.activeNavReady) return;
    __app.activeNavReady = true;

    var path = window.location.pathname;
    var isHome = path === '/' || //index.html?$/i.test(path);

    document.querySelectorAll('.nav-link').forEach(function (link) {
      link.removeAttribute('aria-current');
      link.classList.remove('active');

      var href = link.getAttribute('href');
      if (!href) return;

      var normalised = href.replace(/^//, '').replace(/index.html?$/, '') || '/';
      var currentNorm = path.replace(/^//, '').replace(/index.html?$/, '') || '/';

      var matched = false;

      if (isHome) {
        matched = (href === '/' || //?(index.html?)?$/.test(href));
      } else {
        matched = (normalised !== '/' && currentNorm.indexOf(normalised) === 0);
      }

      if (matched) {
        link.setAttribute('aria-current', 'page');
        link.classList.add('active');
      }
    });
  }

  function initScrollSpy() {
    if (__app.scrollSpyReady) return;
    __app.scrollSpyReady = true;

    var navLinks = document.querySelectorAll('.nav-link[href^="#"]');
    if (!navLinks.length) return;

    var sections = [];
    navLinks.forEach(function (link) {
      var href = link.getAttribute('href');
      if (!href || href === '#' || href === '#!') return;
      var id = href.substring(1);
      var section = document.getElementById(id);
      if (section) sections.push({ link: link, section: section });
    });

    if (!sections.length) return;

    function onScroll() {
      var offset = getHeaderHeight() + 20;
      var scrollY = window.pageYOffset;
      var active = null;

      sections.forEach(function (item) {
        var top = item.section.getBoundingClientRect().top + scrollY - offset;
        if (scrollY >= top) {
          active = item;
        }
      });

      sections.forEach(function (item) {
        item.link.classList.remove('active');
        item.link.removeAttribute('aria-current');
      });

      if (active) {
        active.link.classList.add('active');
        active.link.setAttribute('aria-current', 'page');
      }
    }

    window.addEventListener('scroll', debounce(onScroll, 80), { passive: true });
    onScroll();
  }

  function initImages() {
    if (__app.imagesReady) return;
    __app.imagesReady = true;

    document.querySelectorAll('img').forEach(function (img) {
      var isCritical = img.hasAttribute('data-critical');
      var isLogo = img.closest('.navbar-brand') !== null;

      if (!isLogo && !isCritical && !img.hasAttribute('loading')) {
        img.setAttribute('loading', 'lazy');
      }

      img.addEventListener('error', function () {
        if (img.dataset.errored) return;
        img.dataset.errored = 'true';
        img.setAttribute('alt', img.getAttribute('alt') || 'Image');
      });
    });

    document.querySelectorAll('video').forEach(function (video) {
      if (!video.hasAttribute('loading')) {
        video.setAttribute('loading', 'lazy');
      }
    });
  }

  function initLogo() {
    if (__app.logoReady) return;
    __app.logoReady = true;

    var logo = document.querySelector('.navbar-brand');
    if (!logo) return;

    if (logo.tagName === 'A') {
      logo.setAttribute('href', '/');
    }
  }

  function createToastContainer() {
    var el = document.getElementById('toast-container');
    if (el) return el;
    el = document.createElement('div');
    el.id = 'toast-container';
    el.setAttribute('aria-live', 'polite');
    el.setAttribute('aria-atomic', 'true');
    el.className = 'toast-container';
    document.body.appendChild(el);
    return el;
  }

  function notify(message, type) {
    type = type || 'success';
    var container = createToastContainer();
    var alertEl = document.createElement('div');
    alertEl.className = 'alert alert-' + type + ' alert-dismissible shadow';
    alertEl.setAttribute('role', 'alert');
    var closeBtn = document.createElement('button');
    closeBtn.type = 'button';
    closeBtn.className = 'btn-close';
    closeBtn.setAttribute('aria-label', 'Close');
    closeBtn.addEventListener('click', function () {
      if (alertEl.parentNode) alertEl.parentNode.removeChild(alertEl);
    });
    var text = document.createElement('span');
    text.textContent = message;
    alertEl.appendChild(text);
    alertEl.appendChild(closeBtn);
    container.appendChild(alertEl);

    setTimeout(function () {
      if (alertEl.parentNode) alertEl.parentNode.removeChild(alertEl);
    }, 6000);
  }

  __app.notify = notify;

  function showFieldError(field, message) {
    clearFieldError(field);
    field.classList.add('is-invalid');
    var err = document.createElement('div');
    err.className = 'c-form__error invalid-feedback';
    err.setAttribute('role', 'alert');
    err.textContent = message;
    err.dataset.fieldError = field.name || field.id || 'field';
    field.parentNode.insertBefore(err, field.nextSibling);
  }

  function clearFieldError(field) {
    field.classList.remove('is-invalid');
    field.classList.remove('is-valid');
    var parent = field.parentNode;
    var existing = parent.querySelector('.c-form__error[data-field-error]');
    if (existing) parent.removeChild(existing);
  }

  function validateName(value) {
    return value.trim().length >= 1;
  }

  function validateEmail(value) {
    var re = /^[^s@]+@[^s@]+.[^s@]+$/;
    return re.test(value.trim());
  }

  function validatePhone(value) {
    var re = /^[+-ds()[]]{7,20}$/;
    return re.test(value.trim());
  }

  function validateMessage(value) {
    return value.trim().length >= 10;
  }

  function validateField(field) {
    var type = field.type;
    var name = (field.name || '').toLowerCase();
    var value = field.value || '';
    var required = field.hasAttribute('required') || field.dataset.required === 'true';

    if (!required && value.trim() === '') return true;

    if (type === 'email' || name === 'email' || name.indexOf('email') !== -1) {
      if (!validateEmail(value)) {
        showFieldError(field, 'Please enter a valid email address.');
        return false;
      }
    } else if (type === 'tel' || name === 'phone' || name.indexOf('phone') !== -1 || name.indexOf('tel') !== -1) {
      if (value.trim() !== '' && !validatePhone(value)) {
        showFieldError(field, 'Please enter a valid phone number (7–20 digits).');
        return false;
      }
    } else if (field.tagName === 'TEXTAREA' || name === 'message' || name.indexOf('message') !== -1 || name.indexOf('msg') !== -1) {
      if (!validateMessage(value)) {
        showFieldError(field, 'Message must be at least 10 characters.');
        return false;
      }
    } else if (name === 'name' || name.indexOf('name') !== -1) {
      if (!validateName(value)) {
        showFieldError(field, 'Please enter your name.');
        return false;
      }
    } else {
      if (required && value.trim() === '') {
        var label = field.closest('.c-form__group, .form-group');
        var labelEl = label ? label.querySelector('label') : null;
        var fieldName = labelEl ? labelEl.textContent.replace('*', '').trim() : 'This field';
        showFieldError(field, fieldName + ' is required.');
        return false;
      }
    }

    if (required && value.trim() === '') {
      showFieldError(field, 'This field is required.');
      return false;
    }

    field.classList.add('is-valid');
    return true;
  }

  function initForms() {
    if (__app.formsReady) return;
    __app.formsReady = true;

    document.querySelectorAll('form').forEach(function (form) {
      if (form.dataset.validationBound) return;
      form.dataset.validationBound = 'true';

      var honeypot = document.createElement('input');
      honeypot.type = 'text';
      honeypot.name = 'website';
      honeypot.setAttribute('tabindex', '-1');
      honeypot.setAttribute('autocomplete', 'off');
      honeypot.className = 'u-honeypot';
      honeypot.setAttribute('aria-hidden', 'true');
      form.appendChild(honeypot);

      var submitTime = Date.now();

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (honeypot.value.trim() !== '') {
          return;
        }

        var elapsed = Date.now() - submitTime;
        if (elapsed < 1500) {
          return;
        }

        var fields = Array.prototype.slice.call(
          form.querySelectorAll('input:not([type="submit"]):not([type="hidden"]):not([type="button"]):not([name="website"]), textarea, select')
        );

        fields.forEach(function (f) {
          clearFieldError(f);
        });

        var valid = true;
        var firstInvalid = null;

        fields.forEach(function (field) {
          var required = field.hasAttribute('required') || field.dataset.required === 'true';
          var value = field.type === 'checkbox' ? field.checked : (field.value || '');

          if (field.type === 'checkbox' && required && !field.checked) {
            showFieldError(field, 'Please accept this to continue.');
            valid = false;
            if (!firstInvalid) firstInvalid = field;
            return;
          }

          if (!required && typeof value === 'string' && value.trim() === '') return;

          var fieldValid = validateField(field);
          if (!fieldValid) {
            valid = false;
            if (!firstInvalid) firstInvalid = field;
          }
        });

        if (!valid) {
          if (firstInvalid) firstInvalid.focus();
          return;
        }

        var submitBtn = form.querySelector('[type="submit"]');
        var originalText = '';
        if (submitBtn) {
          originalText = submitBtn.innerHTML;
          submitBtn.disabled = true;
          submitBtn.textContent = 'Sending…';
        }

        if (!navigator.onLine) {
          notify('Connection error, please try again later.', 'danger');
          if (submitBtn) {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
          }
          return;
        }

        var action = form.getAttribute('action') || 'process.php';
        var formData = {};
        var elements = form.elements;
        for (var i = 0; i < elements.length; i++) {
          var el = elements[i];
          if (!el.name || el.name === 'website') continue;
          if (el.type === 'checkbox') {
            formData[el.name] = el.checked;
          } else if (el.type === 'radio') {
            if (el.checked) formData[el.name] = el.value;
          } else if (el.type !== 'submit' && el.type !== 'button') {
            formData[el.name] = el.value;
          }
        }

        fetch(action, {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify(formData)
        })
          .then(function (res) {
            return res.json();
          })
          .then(function (data) {
            if (data && data.success) {
              window.location.href = 'thank_you.html';
            } else {
              notify((data && data.message) || 'An error occurred. Please try again later.', 'danger');
              if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.innerHTML = originalText;
              }
            }
          })
          .catch(function () {
            notify('Connection error, please try again later.', 'danger');
            if (submitBtn) {
              submitBtn.disabled = false;
              submitBtn.innerHTML = originalText;
            }
          });
      });
    });
  }

  function initAccordion() {
    if (__app.accordionReady) return;
    __app.accordionReady = true;

    var customAccordions = document.querySelectorAll('.c-accordion');
    customAccordions.forEach(function (acc) {
      var items = acc.querySelectorAll('.c-accordion__item');
      items.forEach(function (item) {
        var trigger = item.querySelector('.c-accordion__trigger');
        var panel = item.querySelector('.c-accordion__panel');
        if (!trigger || !panel) return;

        trigger.setAttribute('aria-expanded', 'false');

        trigger.addEventListener('click', function () {
          var isOpen = item.classList.contains('is-open');

          if (isOpen) {
            item.classList.remove('is-open');
            panel.classList.remove('is-open');
            trigger.setAttribute('aria-expanded', 'false');
          } else {
            item.classList.add('is-open');
            panel.classList.add('is-open');
            trigger.setAttribute('aria-expanded', 'true');
          }
        });

        trigger.addEventListener('keydown', function (e) {
          var key = e.key || e.keyCode;
          var buttons = Array.prototype.slice.call(acc.querySelectorAll('.c-accordion__trigger'));
          var idx = buttons.indexOf(trigger);

          if (key === 'ArrowDown' || key === 40) {
            e.preventDefault();
            var next = buttons[(idx + 1) % buttons.length];
            if (next) next.focus();
          }
          if (key === 'ArrowUp' || key === 38) {
            e.preventDefault();
            var prev = buttons[(idx - 1 + buttons.length) % buttons.length];
            if (prev) prev.focus();
          }
        });
      });
    });

    var bsAccordions = document.querySelectorAll('.accordion');
    bsAccordions.forEach(function (acc) {
      var buttons = acc.querySelectorAll('.accordion-button');
      buttons.forEach(function (btn) {
        if (btn.dataset.accBound) return;
        btn.dataset.accBound = 'true';

        btn.addEventListener('keydown', function (e) {
          var key = e.key || e.keyCode;
          var arr = Array.prototype.slice.call(buttons);
          var idx = arr.indexOf(btn);

          if (key === 'ArrowDown' || key === 40) {
            e.preventDefault();
            var next = arr[(idx + 1) % arr.length];
            if (next) next.focus();
          }
          if (key === 'ArrowUp' || key === 38) {
            e.preventDefault();
            var prev = arr[(idx - 1 + arr.length) % arr.length];
            if (prev) prev.focus();
          }
        });
      });
    });
  }

  function initScrollToTop() {
    if (__app.scrollTopReady) return;
    __app.scrollTopReady = true;

    var btn = document.querySelector('.scroll-to-top, [data-scroll-top], #scrollToTop, .c-scroll-top');
    if (!btn) return;

    btn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    function toggleVisibility() {
      if (window.pageYOffset > 400) {
        btn.classList.add('is-visible');
      } else {
        btn.classList.remove('is-visible');
      }
    }

    window.addEventListener('scroll', debounce(toggleVisibility, 100), { passive: true });
    toggleVisibility();
  }

  function initCountUp() {
    if (__app.countUpReady) return;
    __app.countUpReady = true;

    var stats = document.querySelectorAll('[data-count-up], .c-stat__value[data-target]');
    if (!stats.length) return;

    function animateCount(el, target, duration) {
      var start = 0;
      var startTime = null;
      var suffix = el.dataset.suffix || '';
      var prefix = el.dataset.prefix || '';

      function step(timestamp) {
        if (!startTime) startTime = timestamp;
        var progress = Math.min((timestamp - startTime) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var current = Math.round(eased * target);
        el.textContent = prefix + current.toLocaleString() + suffix;
        if (progress < 1) {
          requestAnimationFrame(step);
        } else {
          el.textContent = prefix + target.toLocaleString() + suffix;
        }
      }

      requestAnimationFrame(step);
    }

    var observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting && !entry.target.dataset.counted) {
          entry.target.dataset.counted = 'true';
          var target = parseInt(entry.target.dataset.target || entry.target.dataset.countUp, 10);
          if (!isNaN(target)) {
            animateCount(entry.target, target, 1800);
          }
        }
      });
    }, { threshold: 0.4 });

    stats.forEach(function (el) {
      observer.observe(el);
    });
  }

  function initModal() {
    if (__app.modalReady) return;
    __app.modalReady = true;

    var overlay = document.querySelector('.c-modal-overlay, #modalOverlay, [data-modal-overlay]');
    var modals = document.querySelectorAll('.c-modal, [data-modal]');
    var triggers = document.querySelectorAll('[data-modal-trigger], [data-bs-toggle="modal"]');
    var closeBtns = document.querySelectorAll('[data-modal-close], .c-modal__close');

    if (!modals.length) return;

    function openModal(modal) {
      if (!modal) return;
      modal.classList.add('is-open');
      modal.setAttribute('aria-hidden', 'false');
      document.body.classList.add('u-no-scroll');
      if (overlay) overlay.classList.add('is-visible');
      var focusable = getFocusableElements(modal);
      if (focusable.length) focusable[0].focus();
    }

    function closeModal(modal) {
      if (!modal) return;
      modal.classList.remove('is-open');
      modal.setAttribute('aria-hidden', 'true');
      document.body.classList.remove('u-no-scroll');
      if (overlay) overlay.classList.remove('is-visible');
    }

    function closeAllModals() {
      modals.forEach(function (m) { closeModal(m); });
    }

    triggers.forEach(function (trigger) {
      trigger.addEventListener('click', function (e) {
        e.preventDefault();
        var targetId = trigger.dataset.modalTrigger || trigger.dataset.bsTarget;
        if (!targetId) return;
        var modal = document.querySelector(targetId) || document.getElementById(targetId.replace('#', ''));
        if (modal) openModal(modal);
      });
    });

    closeBtns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var modal = btn.closest('.c-modal, [data-modal]');
        if (modal) closeModal(modal);
        else closeAllModals();
      });
    });

    if (overlay) {
      overlay.addEventListener('click', closeAllModals);
    }

    document.addEventListener('keydown', function (e) {
      var key = e.key || e.keyCode;
      if (key === 'Escape' || key === 27) {
        closeAllModals();
      }
    });
  }

  function initPrivacyModal() {
    if (__app.privacyModalReady) return;
    __app.privacyModalReady = true;

    var triggers = document.querySelectorAll('[data-privacy-modal], a[href*="privacy"], a[href*="Privacy"]');
    var modal = document.getElementById('privacyModal') || document.querySelector('.c-modal--privacy');

    if (!modal) {
      triggers.forEach(function (trigger) {
        var text = trigger.textContent.toLowerCase();
        if (text.indexOf('privacy') === -1) return;

        if (!document.getElementById('privacyModal')) {
          var m = document.createElement('div');
          m.id = 'privacyModal';
          m.className = 'c-modal';
          m.setAttribute('role', 'dialog');
          m.setAttribute('aria-modal', 'true');
          m.setAttribute('aria-labelledby', 'privacyModalTitle');
          m.setAttribute('aria-hidden', 'true');

          var inner = document.createElement('div');
          inner.className = 'c-modal__inner';

          var header = document.createElement('div');
          header.className = 'c-modal__header';

          var title = document.createElement('h2');
          title.id = 'privacyModalTitle';
          title.className = 'c-modal__title';
          title.textContent = 'Privacy Policy';

          var closeBtn = document.createElement('button');
          closeBtn.type = 'button';
          closeBtn.className = 'c-modal__close';
          closeBtn.setAttribute('aria-label', 'Close');
          closeBtn.textContent = '×';

          var body = document.createElement('div');
          body.className = 'c-modal__body';
          body.textContent = 'Your privacy policy content goes here.';

          header.appendChild(title);
          header.appendChild(closeBtn);
          inner.appendChild(header);
          inner.appendChild(body);
          m.appendChild(inner);
          document.body.appendChild(m);

          var overlayEl = document.querySelector('.c-modal-overlay');
          if (!overlayEl) {
            overlayEl = document.createElement('div');
            overlayEl.className = 'c-modal-overlay';
            document.body.appendChild(overlayEl);
          }

          modal = m;

          closeBtn.addEventListener('click', function () {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('u-no-scroll');
            overlayEl.classList.remove('is-visible');
          });

          overlayEl.addEventListener('click', function () {
            modal.classList.remove('is-open');
            modal.setAttribute('aria-hidden', 'true');
            document.body.classList.remove('u-no-scroll');
            overlayEl.classList.remove('is-visible');
          });
        }

        trigger.addEventListener('click', function (e) {
          var href = trigger.getAttribute('href');
          if (href && href.indexOf('privacy') !== -1 && !href.endsWith('.html') && !href.endsWith('.php')) {
            e.preventDefault();
          }
          if (modal) {
            modal.classList.add('is-open');
            modal.setAttribute('aria-hidden', 'false');
            document.body.classList.add('u-no-scroll');
            var overlayEl2 = document.querySelector('.c-modal-overlay');
            if (overlayEl2) overlayEl2.classList.add('is-visible');
          }
        });
      });
    }
  }

  function initRipple() {
    if (__app.rippleReady) return;
    __app.rippleReady = true;

    document.addEventListener('click', function (e) {
      var btn = e.target.closest('.c-button, .navbar-nav .nav-link');
      if (!btn) return;
      if (btn.dataset.rippleBound) return;
      btn.dataset.rippleBound = 'true';

      btn.classList.add('ripple-host');

      var ripple = document.createElement('span');
      ripple.className = 'c-ripple';
      btn.appendChild(ripple);

      setTimeout(function () {
        if (ripple.parentNode) ripple.parentNode.removeChild(ripple);
        delete btn.dataset.rippleBound;
      }, 400);
    });
  }

  function initScrollMargin() {
    if (__app.scrollMarginReady) return;
    __app.scrollMarginReady = true;

    function applyMargin() {
      var h = getHeaderHeight();
      document.querySelectorAll('section[id], div[id]').forEach(function (el) {
        el.style.scrollMarginTop = h + 'px';
      });
    }

    applyMargin();
    window.addEventListener('resize', debounce(applyMargin, 200), { passive: true });
  }

  __app.init = function () {
    if (__app.initialized) return;
    __app.initialized = true;

    initBurger();
    initNavbarScroll();
    initAnchors();
    initActiveNav();
    initScrollSpy();
    initImages();
    initLogo();
    initForms();
    initAccordion();
    initScrollToTop();
    initCountUp();
    initModal();
    initPrivacyModal();
    initRipple();
    initScrollMargin();
  };

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', __app.init);
  } else {
    __app.init();
  }

}(window, document));
